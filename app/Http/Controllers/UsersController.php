<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\RoleUser;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->authorize('viewAny', User::class);

        $users = User::paginate(10);
        $roles = Role::limit(20)->get();
        return view('dashboard.users.users_index')->with(['users' => $users, 'roles' => $roles]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->authorize('create', User::class);

        DB::beginTransaction();
        try {

            $request->validate([
                'name' => ['required', 'string','max:100'],
                'email' => ['required', 'email', 'unique:users,email' ,'max:100'],
                'password' => ['required', 'between:3,50', 'confirmed'],
                'type'=>['required'],
                'roleUser' => ['required',],
            ]);

            $user = User::create(['name' => $request['name'], 'email' => $request['email'], 'password' => Hash::make($request['password']),'type' => $request['type']]);

            foreach ($request['roleUser'] as $role) {
                $roleUser = RoleUser::create(['user_id' => User::latest('created_at')->first()->id, 'role_id' => $role]);
            }
        } catch (Exception $e) {
            new Exception();
            DB::rollBack();
            return redirect()->back()->withErrors($e->getMessage());
        }
        DB::commit();
        return redirect()->back()->withSuccess('Successfully added new user.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::findOrFail($id); 
        $this->authorize('view', [User::class, $user]);
        DB::beginTransaction();
        try {
            $AllRoles = Role::limit(20)->get();
        } catch (Exception $e) {
            new Exception();
            DB::rollBack();
            return redirect()->back()->withErrors($e->getMessage());
        }
        return view('dashboard.users.user_view')->with(['user' => $user, 'AllRoles' => $AllRoles]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->authorize('update', User::class);

        DB::beginTransaction();
        try {
            $request->validate([
                'name' => ['required', 'string','max:100'],
                'email' => ['required', 'email', "unique:users,email,$id",'max:100'],
                'roles' => ['required',],
            ]);

            $user = User::findOrFail($id);
            $user->update(['name' => $request['name']]);

            $RoleUserIDs = [];
            foreach ($user->roles as $role) {
                $RoleUserIDs[] = $role->id;
            }
            foreach ($RoleUserIDs as $roleID) {
                if (!in_array($roleID, $request['roles'])) { 
                    RoleUser::where([['user_id', '=', $id], ['role_id', '=', $roleID]])->delete();
                }
            }
            foreach ($request['roles'] as $roleID) {
                if (!in_array($roleID, $RoleUserIDs)) {
                    $roleUser = RoleUser::create(['user_id' => $id, 'role_id' => $roleID]);
                }
            }
        } catch (Exception $e) {
            new Exception();
            DB::rollBack();
            return redirect()->back()->withErrors($e->getMessage());
        }
        DB::commit();
        return redirect()->back()->withSuccess('Successfully  updated user.');
    }



    /**
     * Reset password for the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function resetPassword(Request $request, $id)
    {
        $this->authorize('update', User::class);
        $request->validate([
            'password' => ['required', 'between:3,50', 'confirmed'],
        ]);

        DB::beginTransaction();
        try {
            $user=User::findOrFail($id);
            if (Hash::check($request['oldPassword'], $user->password)) { 
                $user->update(['password'=>Hash::make($request['password'])]);
            }

        } catch (Exception $e) {
            DB::rollBack();
            return redirect()->back()->withErrors($e->getMessage());
        }
        DB::commit();
        return redirect()->back()->withSuccess('Successfully reset user password.');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->authorize('delete', User::class);
        DB::beginTransaction();
        try {

            $user = User::findOrFail($id)->delete();
        } catch (Exception $e) {
            new Exception();
            DB::rollBack();
            return redirect()->back()->withErrors($e->getMessage());
        }
        DB::commit();
        return redirect()->back()->withSuccess('Successfully deleted user.');
    }
}
