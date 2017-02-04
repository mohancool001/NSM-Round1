<?php

namespace Aurora\Http\Controllers;

use Illuminate\Http\Request;
use Input;
use Aurora\Books;
use Aurora\Transactions;

class BookController extends Controller
{
    //Creation
    public function create()
    {
    	return view('bcreate');
    }

    //Updation
   	public function update()
   	{
   		$id=Input::get('id');
   		$book=Books::where('id',$id)->first();
   		return view('bupdate',compact('book'));
   	}

   	public function insert()
   	{
   		$book = new Books;
   		$book->name=Input::get("name");
   		$book->title=Input::get("title");
   		$book->synopsis=Input::get("synopsis");
   		$book->author=Input::get("author");
   		$book->edition=Input::get("edition");
   		$book->copies=Input::get("copies");
   		$book->genre=Input::get("genre");
   		//echo Input::get("type");
   		if(Input::get("type")==0)
   			$book->type=false;
   		else
   			$book->type=true;
   		$book->status=true;
   		$book->image=Input::get("image");
   		//dd($book);
   		$book->save();
   		$SS="Creation Successful";
   		return view('message',compact('SS'));
   	}

   	public function edit()
   	{
   		$id=Input::get('id');
   		$book=Books::where('id',$id)->first();
   		$book->name=Input::get("name");
   		$book->title=Input::get("title");
   		$book->synopsis=Input::get("synopsis");
   		$book->author=Input::get("author");
   		$book->edition=Input::get("edtion");
   		$book->copies=Input::get("copies");
   		$book->genre=Input::get("genre");
   		//echo Input::get("type");
   		if(Input::get("type")==0)
   			$book->type=false;
   		else
   			$book->type=true;
   		$book->status=true;
   		$book->image=Input::get("image");
   		//dd($book);
   		$book->save();
   		$SS=" Update Successful";
   		return view('message',compact('SS'));
   	}
}
