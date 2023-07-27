<?php

namespace App\Http\Controllers;

use App\Models\accounts;
use Illuminate\Support\Carbon;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Mail;
use App\Mail\NewNotificationEmail;
use Illuminate\Support\Facades\DB;

class AccountsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
{
    $request->validate([
        'status' => 'required',
        'name' => 'required',
        'email' => 'required|email',
        'contact' => 'required',
        'activity' => 'required',
        'contributionAmount' => 'required',
        'date' => 'required',
    ]);

    // Update the computer maintenance request with the new data
    $mycontribution = Accounts::find($id);
    $mycontribution->status = $request->status;
    $mycontribution->name = $request->name;
    $mycontribution->email = $request->email;
    $mycontribution->contact = $request->contact;
    $mycontribution->contributionAmount = $request->contributionAmount;
    $mycontribution->activity = $request->activity;
    $mycontribution->date = $request->date;
    $mycontribution->save();

    // Send notification email to the user
    $user = User::where('email', $request->email)->first();
    $type = 'Accounts Department';
    Mail::to($user->email)->send(new NewNotificationEmail($user, $type));

    return redirect()->route('accounts.dashboard')->with('success', 'Updated');
}


    public function view()
    {
        $accounts = accounts::all();
        return view('accounts.view', compact('accounts'));
    }
    public function index()
    {
        $contributionAmount = accounts::sum('contributionAmount');

        $user=DB::table('users')->count();
        $accounts=DB::table('accounts')->count();
        $users = User::all();
        $contributions_data = accounts::all();
        $data = [
            'contributions_data' => $contributions_data,
        ];
        return view('dashboards.accounts.index',$data,(compact('user','accounts','contributionAmount')))->with(['users' => $users]);
        }

    public function contribute(Request $request){
        $userEmail = $request->user()->email;

        $contributionRequests = accounts::where('email', $userEmail)->get();
return view('dashboards.user.contributions', [
    'contributionRequests' => $contributionRequests,]);
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
        $data = new accounts([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'contact' => $request->input('contact'),
            'contributionAmount' => (float)$request->input('contributionAmount'),
            'activity' => $request->input('activity'),
            'date' => Carbon::parse($request->input('date')),
            'status' => 'pending'
        ]);
        $data->save();

        return back()->with('success', 'Your Contribution Submitted');
    }




    /**
     * Display the specified resource.
     *
     * @param  \App\Models\accounts  $accounts
     * @return \Illuminate\Http\Response
     */
    public function show(accounts $accounts)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\accounts  $accounts
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $mycontribution=accounts::findOrFail($id);
        return view('dashboards.accounts.edit.mycontributionedit')->with('accounts',$mycontribution, );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\accounts  $accounts
     * @return \Illuminate\Http\Response
     */


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\accounts  $accounts
     * @return \Illuminate\Http\Response
     */
    public function destroy(accounts $accounts)
    {
        //
    }
}
