<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\ContentBlog;
use App\Models\Image;
use App\Models\Partner;
use App\Models\Service;
use App\Models\StarredProject;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Storage;

class ClientController extends Controller
{
    public function addToHome(Request $request)
    {
        Gate::authorize('dashboardCreate');

        DB::beginTransaction();
        try {
            $pageClientIDs = trim($request['pageClientIDs'], '[]');
            $pageClientIDs = explode(',', $pageClientIDs);
            // pageClients won't bo more than ,8 $request['clients'] =>cheacked buttons
            foreach ($pageClientIDs as $pageClientID) {
                if (in_array($pageClientID, $request['clients']?:[])) {
                    Client::findOrFail($pageClientID)->update(['status' => CLient::STATUS_ACTIVE]);
                } else {
                    Client::findOrFail($pageClientID)->update(['status' => CLient::STATUS_DISACTIVE]);
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
        $this->authorize('create', Client::class);
        $request->validate([
            '*' => ['required','max:250'],
            'image' => ['required', 'mimes:jpg,jpeg,png,svg'],
        ]);

        DB::beginTransaction();
        try {
            $image = $request->file('image');
            $imageName = time() + rand(1, 1000000) . '.' . $image->getClientOriginalExtension();
            Storage::disk('public')->put('uploads/clientImages/' . $imageName, file_get_contents($image));
            $icon = 'uploads/clientImages/' . $imageName;

            $name = [];
            foreach (config('languages') as $key => $value) {
                $name[$key] = $request['name_' . $key];
            }
            $client = Client::create(['name' => $name]);
            $client->images()->create(['src' => $icon, 'type' => 'client']);
        } catch (Exception $e) {
            new Exception();
            DB::rollBack();
            return redirect()->back()->withErrors($e->getMessage());
        }
        DB::commit();

        return redirect()->back()->withSuccess('Successfully added new client .');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function show(Client $client)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function edit(Client $client)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $this->authorize('update', Client::class);

        $request->validate([
            'name' => ['required', 'string','max:100'],
            'image' => ['mimes:jpg,jpeg,png,svg'],
        ]);

        DB::beginTransaction();
        try {

            $client = Client::findOrFail($request['clientID']);
            $client->update(['name' => $request['name'],]);

            if ($request['image']) {
                $image = $request->file('image');
                $imageName = time() + rand(1, 1000000) . '.' . $image->getClientOriginalExtension();
                Storage::disk('public')->put('uploads/clientImages/' . $imageName, file_get_contents($image));
                $icon = 'uploads/clientImages/' . $imageName;
                $client->images[0]->update(['src' => $icon]);
            }
        } catch (Exception $e) {
            new Exception();
            DB::rollBack();
            return redirect()->back()->withErrors($e->getMessage());
        }
        DB::commit();


        return redirect()->back()->withSuccess('Successfully updated client .');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->authorize('delete', Client::class);
        DB::beginTransaction();
        try {
            $client = Client::findOrFail($id)->delete();
        } catch (Exception $e) {
            new Exception();
            DB::rollBack();
            return redirect()->back()->withErrors($e->getMessage());
        }
        DB::commit();
        return redirect()->back()->withSuccess('Successfully deletde client .');
    }
}