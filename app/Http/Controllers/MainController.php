<?php

namespace Aurora\Http\Controllers;

use Illuminate\Http\Request;
use Aurora\Books;
use Input;
use Redirect;
use Auth;
class MainController extends Controller
{
    
    public function main()
    {
        if(Auth::check())
            return redirect('index');
        else
            return view('home');
        
    }

    public function index()
    {
    	//Return all the books. Which are available.
    	$books=Books::all();
        return view('index',compact('books'));
    }

   public function addcart()
   {
   		$sescart = new sescart();
   		$sescart->sid=0;
   		$sescart->cart=Input::all();
   		//$sescart->save();
   }

   public function search()
    {
        $qu=Input::get('search');
        $books=Books::where('id',$qu)->orWhere('title','like','%'.$qu.'%')->orWhere('genre','like','%'.$qu.'%')->get();
        return view('index',compact('books'));
    }
}
