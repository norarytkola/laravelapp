<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Message;
use Illuminate\Http\Request;


class MessageController extends Controller{

    public function create(){
        return view('/pages/contact');
    }

    public function store(Request $request){

        //validate

        $this->validate($request, array(
            'firstname'=>'required|max:100',
            'lastname'=>'required|max:100',
            'email'=>'required|max:100',
            'message'=>'required'
        ));

        //create

        $message=new Message;

        $message->firstname=$request->firstname;
        $message->lastname=$request->lastname;
        $message->email=$request->email;
        $message->message=$request->message;

        //save to DB

        $message->save();

        //redirect

        return redirect()->route('home')->withHeading('Viesti lähetetty');
        
    }
}