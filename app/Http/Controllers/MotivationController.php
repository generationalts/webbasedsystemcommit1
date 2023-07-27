<?php

namespace App\Http\Controllers;

use App\Models\motivation;
use App\Mail\NewNotificationEmail;
use App\Models\User;
use Illuminate\Support\Facades\Mail;

use Illuminate\Http\Request;

class MotivationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     *    public function index()

     */
    public function index()
    {
        $dailymotives = motivation::latest()->get();
    return view('dashoards.user.index', compact('dailymotives'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboards.admin.motivation.create');
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
        'image' => 'required|image',
        'verse' => 'required',
        'encouragement' => 'required',
    ]);

    $imageName = time().'.'.$request->image->extension();
    $request->image->move(public_path('images'), $imageName);

    $motivation = new motivation([
        'image' => $imageName,
        'verse' => $request->get('verse'),
        'encouragement' => $request->get('encouragement')
    ]);
    $motivation->save();

    // Send email to users
    $users = User::all(); // Replace with your logic to retrieve the desired users

    foreach ($users as $user) {
        $type = 'Motivation'; // Specify the type as 'Motivation'
        Mail::to($user->email)->send(new NewNotificationEmail($user, $type));
    }

    return back()->with('success', 'Daily verse has been sent');
}


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\motivation  $motivation
     * @return \Illuminate\Http\Response
     */
    public function show(motivation $motivation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\motivation  $motivation
     * @return \Illuminate\Http\Response
     */
    public function edit(motivation $motivation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\motivation  $motivation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, motivation $motivation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\motivation  $motivation
     * @return \Illuminate\Http\Response
     */
    public function destroy(motivation $motivation)
    {
        //
    }
}
