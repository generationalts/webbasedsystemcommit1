<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

     public function about(){
        return view('pages.about');
     }

     public function activities(){
        return view('pages.activities');
     }

     public function gallery(){
        return view('pages.gallery');
     }

    public function redirect()
    {  $user = empty($user) ? [null] : $user;
        foreach($user as $user)
        {

        }
        if (Auth::id())
        {
            if(Auth::User()->role=='1')
            {
                return redirect('Admin/admin');

            }
            elseif(Auth::User()->role=='2')
            {

                return redirect ('user/user');

            }
            else{
                return redirect ('accounts/accounts');
            }
        }
        else{
            return redirect()->back();
        }
    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

}





