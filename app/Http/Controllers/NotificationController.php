<?php

namespace App\Http\Controllers;

use App\Models\notification;
use Illuminate\Http\Request;
use App\Models\User;
use App\Mail\NewNotificationEmail;
use Illuminate\Support\Facades\Mail;


class NotificationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $notifications = Notification::where('user_id', auth()->id())
                                      ->latest('created_at')
                                      ->get();
        return view('dashboards.user.notifications', compact('notifications'));
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = User::all();
        return view('dashboards.admin.notifications.create')->with(['users' => $users]);
    }
    public function acreate()
    {
        $users = User::all();
        return view('dashboards.admin.notifications.create')->with(['users' => $users]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'recipient' => 'required',
            'message' => 'required'
        ]);

        if ($data['recipient'] === 'all') {
            $users = User::all();
            foreach ($users as $user) {
                $notification = new Notification([
                    'user_id' => $user->id,
                    'sender_id' => auth()->id(),
                    'message' => $data['message']
                ]);
                $notification->save();

                $type = 'Notification'; // Specify the type as 'Notification'
                Mail::to($user->email)->send(new NewNotificationEmail($user, $type));
            }
        } else {
            $notification = new Notification([
                'user_id' => $data['recipient'],
                'sender_id' => auth()->id(),
                'message' => $data['message']
            ]);
            $notification->save();

            $user = User::find($data['recipient']);
            $type = 'Notification'; // Specify the type as 'Notification'
            Mail::to($user->email)->send(new NewNotificationEmail($user, $type));
        }

        return redirect()->back()->with('success', 'Notification sent.');
    }



    /**
     * Display the specified resource.
     *
     * @param  \App\Models\notification  $notification
     * @return \Illuminate\Http\Response
     */
    public function show(notification $notification)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\notification  $notification
     * @return \Illuminate\Http\Response
     */
    public function edit(notification $notification)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\notification  $notification
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, notification $notification)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\notification  $notification
     * @return \Illuminate\Http\Response
     */
    public function destroy(notification $notification)
    {
        //
    }
}
