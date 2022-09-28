<?php

namespace App\Http\Controllers;

use App\Models\Group;
use App\Models\GroupMember;
use App\Models\Member;
use App\Notifications\groupReplyNotification;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GroupsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->authorize('viewAny', Group::class);

        DB::beginTransaction();
        try {
            $groups = Group::paginate(10);
            $members = Member::select('id','name')->limit(50)->get();
        } catch (Exception $e) {
            new Exception();
            DB::rollBack();
            return redirect()->back()->withErrors($e->getMessage());
        }
        DB::commit();
        return view('dashboard.groups.groups_index')->with(['groups' => $groups, 'members' => $members]);
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
        $this->authorize('create', Group::class);
        $request->validate([
            'name' => ['required', 'string','max:100'],
            'members' => ['required', 'array',],
        ]);

        DB::beginTransaction();
        try {
            
            $group = Group::create(['name' => $request['name'],]);
            
            foreach ($request['members'] as $member) {
                $groupMember = GroupMember::create(['group_id' => $group->id, 'member_id' => $member]);
            }

        } catch (Exception $e) {
            new Exception();
            DB::rollBack();
            return redirect()->back()->withErrors($e->getMessage());
        }
        DB::commit();
        return redirect()->back()->withSuccess('Successfully added new group.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $this->authorize('viewAny', Group::class);

        DB::beginTransaction();
        try {
            $groupMembers = GroupMember::where('group_id', $id)->with('group')->get();
            $allMembers = Member::all();
            $groupMemberIDs = [];
            foreach ($groupMembers as $groupMember) {
                $groupMemberIDs[] = $groupMember->member_id;
            }
            $otherMembers = [];
            foreach ($allMembers->toArray() as $member) {
                if (!in_array($member['id'], $groupMemberIDs)) {
                    $otherMembers[] = $member;
                }
            }
        } catch (Exception $e) {
            new Exception();
            DB::rollBack();
            return redirect()->back()->withErrors($e->getMessage());
        }
        DB::commit();
        return view('dashboard.groups.group_show')->with(['groupMembers' => $groupMembers, 'otherMembers' => $otherMembers]);
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
        $this->authorize('update', Group::class);

        $request->validate([
            'id' => ['required'],
            'name' => ['required', 'string','max:100'],
        ]);
        DB::beginTransaction();
        try {

            $group = Group::findOrFail($request['id'])->update(['name' => $request['name']]);
            if ($request['members']) {
                foreach ($request['members'] as $member) {
                    $groupMember = GroupMember::create(['group_id' => $request['id'], 'member_id' => $member]);
                }
            }
        } catch (Exception $e) {
            new Exception();
            DB::rollBack();
            return redirect()->back()->withErrors($e->getMessage());
        }
        DB::commit();
        return redirect()->back()->withSuccess('Successfully updated group.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->authorize('delete', Group::class);

        DB::beginTransaction();
        try {
            Group::findOrFail($id)->delete();
        } catch (Exception $e) {
            new Exception();
            DB::rollBack();
            return redirect()->back()->withErrors($e->getMessage());
        }
        DB::commit();
        return redirect()->back()->withSuccess('Successfully deleted group.');
    }

    /**
     * group reply messages 
     *
     * @return \Illuminate\Http\Response
     */

    public function replyStore(Request $request)
    {
        $this->authorize('create', Group::class);

        DB::beginTransaction();
        try {
            $messageBody = $request['messageBody'];
            $groupMembers = GroupMember::where('group_id', $request['id'])->get();
            foreach ($groupMembers as $groupMember) {
                $groupMember->member->notify(new groupReplyNotification($messageBody, $groupMember->member));
            }
        } catch (Exception $e) {
            new Exception();
            DB::rollBack();
            return redirect()->back()->withErrors($e->getMessage());
        }
        DB::commit();
        return redirect()->back()->withSuccess('Successfully sended email for group members.');
    }
}
