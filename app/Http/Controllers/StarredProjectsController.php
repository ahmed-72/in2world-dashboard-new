<?php

namespace App\Http\Controllers;

use App\Models\StarredProject;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Storage;

class StarredProjectsController extends Controller
{
    public function addToHome(Request $request)
    {
        Gate::authorize('dashboardCreate');

        DB::beginTransaction();
        try {

            $pageStarredProjectIDs = trim($request['pageStarredProjectIDs'], '[]');
            $pageStarredProjectIDs = explode(',', $pageStarredProjectIDs);
            foreach ($pageStarredProjectIDs as $pageStarredProjectID) {
                if (in_array($pageStarredProjectID, $request['starredProjects']?:[])) {
                    StarredProject::findOrFail($pageStarredProjectID)->update(['status' => StarredProject::STATUS_HOMEPAGE]);
                } else {
                    StarredProject::findOrFail($pageStarredProjectID)->update(['status' => StarredProject::STATUS_ACTIVE]);
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
   
        $starredProjects = StarredProject::where('status', 'active')->orWhere('status', 'homePage')->paginate(4);
        return view('front_site.starredProjects.starredProjects_index')->with('starredProjects', $starredProjects);
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
        $this->authorize('create', StarredProject::class);

        $request->validate([
            '*' => ['required','max:250'],
            'image' => ['required', 'mimes:jpg,jpeg,png,svg'],
        ]);
        
        DB::beginTransaction();
        try {
            $image = $request->file('image');
            $imageName = time() + rand(1, 1000000) . '.' . $image->getClientOriginalExtension();
            Storage::disk('public')->put('uploads/starredProjects/' . $imageName, file_get_contents($image));
            $icon = 'uploads/starredProjects/' . $imageName;

            $name = $details = [];
            foreach (config('languages') as $key => $value) {
                $name[$key] = $request['name_' . $key];
                $details[$key] = $request['details_' . $key]; 
            }

            $starredProject = StarredProject::create(['name' => $name, 'details' => $details]);
            $starredProject->images()->create(['src' => $icon, 'type' => 'starredProject']);
        } catch (Exception $e) {
            new Exception();
            DB::rollBack();
            return redirect()->back()->withErrors($e->getMessage());
        }
        DB::commit();

        return redirect()->back()->withSuccess('Successfully added new starred project .');
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
        $this->authorize('update', StarredProject::class);
        $request->validate([
            'name' => ['required', 'string','max:100'],
            'details' => ['required', 'string','max:250'],
            'image' => ['mimes:jpg,jpeg,png,svg'],
        ]);

        DB::beginTransaction();
        try {

            $starredProject = StarredProject::findOrFail($request['id']);
            $starredProject->update(['name' => $request['name'], 'details' => $request['details']]);

            if ($request['image']) {
                $image = $request->file('image');
                $imageName = time() + rand(1, 1000000) . '.' . $image->getClientOriginalExtension();
                Storage::disk('public')->put('uploads/starredProjects/' . $imageName, file_get_contents($image));
                $icon =  'uploads/starredProjects/' . $imageName;
                $starredProject->images[0]->update(['src' => $icon]);
            }
        } catch (Exception $e) {
            //throw $e;
            new Exception();
            DB::rollBack();
            return redirect()->back()->withErrors($e->getMessage());
        }
        DB::commit();

        return redirect()->back()->withSuccess('Successfully updated starred project .');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->authorize('delete', StarredProject::class);
        DB::beginTransaction();
        try {

            $starredProject = StarredProject::findOrFail($id);
            $starredProject->delete();
        } catch (Exception $e) {
            new Exception();
            DB::rollBack();
            return redirect()->back()->withErrors($e->getMessage());
        }
        DB::commit();
        return redirect()->back()->withSuccess('Successfully deleted starred project .');
    }
}
