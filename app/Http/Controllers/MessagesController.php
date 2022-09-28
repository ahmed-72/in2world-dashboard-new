<?php

namespace App\Http\Controllers;

use App\Mail\NotifyMail;
use App\Models\Member;
use App\Models\Message;
use App\Models\Service;
use App\Models\ServiceRequest;
use App\Models\User;
use App\Notifications\messageNotification;
use App\Notifications\messageReplyNotification;
use App\Notifications\serviceRequestNotification;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class MessagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->authorize('viewAny', Message::class);

        DB::beginTransaction();
        try {

            $messages = Message::where('status', 'needReview')->paginate(8, ['*'], 'messages');
            $serviceRequests = ServiceRequest::where('status', 'needReview')->paginate(8, ['*'], 'serviceRequests');
            $serviceNames = array(array());
            foreach ($serviceRequests as $serviceRequest) {
                foreach ($serviceRequest->services as $id) {
                    $serviceNames[$serviceRequest->id][] = Service::findOrFail($id)->name;
                }
            }
        } catch (Exception $e) {
            new Exception();
            DB::rollBack();
            return redirect()->back()->withErrors($e->getMessage());
        }
        DB::commit();
        return view('dashboard.messages.messages_index')->with(['messages' => $messages, 'serviceRequests' => $serviceRequests, 'serviceNames' => $serviceNames]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('front_site.messages.message_create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        DB::beginTransaction();
        try {

            $message = Message::create($request->only(['name', 'companyName', 'email', 'phone', 'service', 'budget', 'details',]));

            $member = Member::create($request->only(['name', 'companyName', 'email', 'phone']));

            $users = User::where('type', 'super-admin')->orWhere('type', 'admin')->get();
            foreach ($users as $user) {
                $user->notify(new messageNotification($message, $member));
            }
        } catch (Exception $e) {
            new Exception();
            DB::rollBack();
            return redirect()->back()->withErrors($e->getMessage());
        }
        DB::commit();
        return redirect()->route('home')->withSuccess('Successfully sended your message.');
    }

    public function replyStore(Request $request)
    {
        $this->authorize('create', Message::class);

        DB::beginTransaction();
        try {

            //the message that member was sent
            $message = Message::findOrFail($request['messageID']);
            //the reply message the admin was created
            $replyMessageBody = $request['messageBody'];
            $member = Member::where('email', $request['email'])->first();
            $member->notify(new messageReplyNotification($message, $replyMessageBody, $member));
            //update member messgae status
            $message->update(['status' => 'replied']);
        } catch (Exception $e) {
            new Exception();
            DB::rollBack();
            return redirect()->back()->withErrors($e->getMessage());
        }
        DB::commit();
        return redirect()->back()->withSuccess('Successfully sended your reply email.');
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
