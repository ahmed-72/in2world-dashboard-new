<?php

namespace App\Http\Controllers;

use App\Models\Member;
use App\Models\Message;
use App\Models\Service;
use App\Models\ServiceRequest;
use App\Models\User;
use App\Notifications\messageNotification;
use App\Notifications\serviceRequestNotification;
use App\Notifications\serviceRequestReplyNotification;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ServiceRequestsController extends Controller
{
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
        DB::beginTransaction();
        try {
            $services = Service::limit(15)->get();
        } catch (Exception $e) {
            new Exception();
            DB::rollBack();
            return redirect()->back()->withErrors($e->getMessage());
        }
        DB::commit();
        return view('front_site.serviceRequests.serviceRequest_create')->with(['services' => $services]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'services' => ['required', 'array'],
            'name' => ['required', 'string','max:200'],
            'email' => ['required', 'email','max:100'],
            'phone' => ['required', 'string','max:100'],
            'country' => ['required', 'string','max:100'],
        ]);
        DB::beginTransaction();
        try {

            $services = [];
            foreach ($request['services'] as $service) {
                $services[] = $service;
            }
            // ask for what's the requirements they need then edit this part 6/9
            $serviceRequest = new ServiceRequest;
            $serviceRequest->services = $services;
            // $serviceRequest->requirements=['a':'b'];
            $serviceRequest->name = $request['name'];
            $serviceRequest->email = $request['email'];
            $serviceRequest->phone = $request['phone'];
            $serviceRequest->country = $request['country'];
            $serviceRequest->save();

            $member = Member::create($request->only(['name', 'email', 'phone', 'country']));

            //notify admins
            $users = User::where('type', 'super-admin')->orWhere('type', 'admin')->get();
            foreach ($users as $user) {
                $user->notify(new serviceRequestNotification($serviceRequest, $member));
            }
        } catch (Exception $e) {
            new Exception();
            DB::rollBack();
            return redirect()->back()->withErrors($e->getMessage());
        }
        DB::commit();
        return redirect()->route('home')->withSuccess('Successfully sended your request.');
    }

    public function replyStore(Request $request)
    {
        $this->authorize('create', ServiceRequest::class);

        DB::beginTransaction();
        try {

            //the Service that member was request
            $serviceRequest = ServiceRequest::findOrFail($request['id']);
            //the reply message the admin was created
            $replyMessageBody = $request['messageBody'];
            $member = Member::where('email', $request['email'])->first();
            $member->notify(new serviceRequestReplyNotification($serviceRequest, $replyMessageBody, $member));
            //update member service request status
            $serviceRequest->update(['status' => 'replied']);

        } catch (Exception $e) {
            new Exception();
            DB::rollBack();
            return redirect()->back()->withErrors($e->getMessage());
        }
        DB::commit();
        return redirect()->back()->withSuccess('Successfully sended your reply email.');

        //update status 
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
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
