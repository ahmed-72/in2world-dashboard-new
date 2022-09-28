<?php

namespace App\Http\Controllers;

use App\Models\Partner;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Storage;

class PartnersController extends Controller
{

    public function addToHome(Request $request)
    {
        Gate::authorize('dashboardCreate');

        DB::beginTransaction();
        try {
            $pagePartnerIDs = trim($request['pagePartnerIDs'], '[]');
            $pagePartnerIDs = explode(',', $pagePartnerIDs);
            foreach ($pagePartnerIDs as $pagePartnerID) {
                if (in_array($pagePartnerID, $request['partners']?:[])) {
                    Partner::findOrFail($pagePartnerID)->update(['status' => Partner::STATUS_ACTIVE]);
                } else {
                    Partner::findOrFail($pagePartnerID)->update(['status' => Partner::STATUS_DISACTIVE]);
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
        $this->authorize('create', Partner::class);
        $request->validate([
            '*' => ['required', 'max:250'],
            'image' => ['required', 'mimes:jpg,jpeg,png,svg'],
        ]);
        DB::beginTransaction();
        try {
            $image = $request->file('image');
            $imageName = time() + rand(1, 1000000) . '.' . $image->getClientOriginalExtension();
            Storage::disk('public')->put('uploads/partnerImages/' . $imageName, file_get_contents($image));
            $icon = 'uploads/partnerImages/' . $imageName;

            $name = $details = [];
            foreach (config('languages') as $key => $value) {
                $name[$key] = $request['name_' . $key];
                $details[$key] = $request['details_' . $key];
            }
            $partner = Partner::create(['name' =>$name , 'details' => $details]); 
            $partner->images()->create(['src' => $icon, 'type' => 'partner']);
        } catch (Exception $e) {
            new Exception();
            DB::rollBack();
            return redirect()->back()->withErrors($e->getMessage());
        }
        DB::commit();


        return redirect()->back()->withSuccess('Successfully added new partner .');
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
    { //dd($request->all());
        $this->authorize('update', Partner::class);
        $request->validate([
            'name' => ['required', 'string','max:100'],
            'details' => ['required', 'string','max:1000'],
            'image' => ['mimes:jpg,jpeg,png,svg'],
        ]);

        DB::beginTransaction();
        try {

            $partner = Partner::findOrFail($request['id']);
            $partner->update(['name' => $request['name'], 'details' => $request['details']]);

            if ($request['image']) {
                $image = $request->file('imagev');
                $imageName = time() + rand(1, 1000000) . '.' . $image->getClientOriginalExtension();
                Storage::disk('public')->put('uploads/partnerImages/' . $imageName, file_get_contents($image));
                $icon =  'uploads/partnerImages/' . $imageName;
                $partner->images[0]->update(['src' => $icon]);
            }
        } catch (Exception $e) {
            new Exception();
            DB::rollBack();
            return redirect()->back()->withErrors($e->getMessage());
        }
        DB::commit();



        return redirect()->back()->withSuccess('Successfully updated partner .');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->authorize('delete', Partner::class);
        DB::beginTransaction();
        try {

            $partner = Partner::findOrFail($id);
            $partner->delete();
        } catch (Exception $e) {
            new Exception();
            DB::rollBack();
            return redirect()->back()->withErrors($e->getMessage());
        }
        DB::commit();

        return redirect()->back()->withSuccess('Successfully deleted partner .');
    }
}
