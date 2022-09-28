<?php

namespace App\Http\Controllers;


use App\Models\Service;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;

class ServicesController extends Controller
{

    public function addToHome(Request $request)
    {
        Gate::authorize('dashboardCreate');

        DB::beginTransaction();
        try {
            $pageServiceIDs = trim($request['pageServiceIDs'], '[]');
            $pageServiceIDs = explode(',', $pageServiceIDs);
            foreach ($pageServiceIDs as $pageServiceID) {
                if (in_array($pageServiceID, $request['services'] ?: [])) {
                    Service::findOrFail($pageServiceID)->update(['status' => Service::STATUS_ACTIVE]);
                } else {
                    Service::findOrFail($pageServiceID)->update(['status' => Service::STATUS_DISACTIVE]);
                }
            }
        } catch (Exception $e) {
            new Exception();
            DB::rollBack();
            return redirect()->back()->withErrors($e->getMessage());
        }
        DB::commit();
        return redirect()->back()->withSuccess('Successfully added to the home page .');
    }

    // add new items


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $this->authorize('create', Service::class);
 
        $request->validate([
            '*' => ['required', 'max:250'],
        //   'name_' => ['required', 'string', 'max:100'],
        //    'details' => ['required', 'string', 'max:250'],
            'image' => ['required', 'mimes:jpg,jpeg,png,svg'],
        ]);

        DB::beginTransaction();
        try {
            $image = $request->file('image');
            $imageName = time() + rand(1, 1000000) . '.' . $image->getClientOriginalExtension();
            Storage::disk('public')->put('uploads/serviceImages/' . $imageName, file_get_contents($image));
            $icon = 'uploads/serviceImages/' . $imageName;

            $name = $details = [];
            foreach (config('languages') as $key => $value) {
                $name[$key] = $request['name_' . $key];
                $details[$key] = $request['details_' . $key];
            }

            $service = Service::create(['name' =>$name , 'details' => $details]); 
            $service->images()->create(['src' => $icon, 'type' => 'service']);

        } catch (Exception $e) {
            new Exception();
            DB::rollBack();
            return redirect()->back()->withErrors($e->getMessage());
        }
        DB::commit();



        return redirect()->back()->withSuccess('Successfully added new service .');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
    public function update(Request $request)
    {
        $this->authorize('update', Service::class);

        //dd($request->all());
        $request->validate([
            'name' => ['required', 'string', 'max:100'],
            //'details' => ['required', 'string', 'max:250'],
            'image' => ['mimes:jpg,jpeg,png,svg'],
        ]);

        DB::beginTransaction();
        try {
            $service = Service::findOrFail($request['id']);
            $service->update(['name' => $request['name']]);
            if ($request['details']) 
                $service->update(['details' => $request['details']]);
            if ($request['image']) {
                $image = $request->file('image');
                $imageName = time() + rand(1, 1000000) . '.' . $image->getClientOriginalExtension();
                Storage::disk('public')->put('uploads/serviceImages/' . $imageName, file_get_contents($image));
                $icon = 'uploads/serviceImages/' . $imageName;
                $service->images[0]->update(['src' => $icon]);
            }
        } catch (Exception $e) {
            new Exception();
            DB::rollBack();
            return redirect()->back()->withErrors($e->getMessage());
        }
        DB::commit();

        return redirect()->back()->withSuccess('Successfully updated service .');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->authorize('delete', Service::class);
        DB::beginTransaction();
        try {
            $service = Service::findOrFail($id)->delete();
        } catch (Exception $e) {
            new Exception();
            DB::rollBack();
            return redirect()->back()->withErrors($e->getMessage());
        }
        DB::commit();
        return redirect()->back()->withSuccess('Successfully deleted service .');
    }
}
