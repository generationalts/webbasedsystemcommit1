<?php

namespace App\Http\Controllers;

use App\Models\admin;
use Illuminate\Http\Request;
use  App\Models\User;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        $user=DB::table('users')->count();

        return view('dashboards.admin.index',(compact('user',)))->with('users',$users);
    }
 public function user()
 {
    $user=User::paginate(20);
    return view('dashboards.admin.user')->with('user',$user);

 }
 public function userupdate(Request $request,$id){
    $user=User::findOrFail($id);
    $user->update([
        "name" =>$request->name,
        "email"=>$request->email,
        "contact"=>$request->contact,
        "role"=>$request->role,
    ]);
    return redirect('');
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function show(admin $admin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function edit(admin $id)
    {
        $id=User::findOrFail($id);
            return view('dashboards.admin.edit')->with('user',$id, );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, admin $admin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function destroy(admin $admin)
    {
        //
    }
    public function deleteuser($id)
    {
        $user=User::findOrFail($id);
        $user->delete();
         return back();

    }


}
