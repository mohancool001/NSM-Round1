<?php

namespace Aurora\Http\Controllers;

use Illuminate\Http\Request;
use Aurora\Books;
use Auth;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Auth::check())
            return view('index');
        else
        {
            return view('home');
        }
        
    }

    public function panel()
    {
        $user=Auth::user();
        if($user->role=="admin")
            return view('admin');
        else
        {
            $SS="No Access";
            return view('message',compact('SS'));
        }
    }


}
