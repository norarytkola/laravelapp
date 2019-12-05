<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Message;
use App\Answer;
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
    public function answer($id){
        $message=Message::find($id);
        $answers=Answer::where('original_message', $id)->get();
        return view('/pages/message', compact('answers', $answers))->withMessage($message);
    }
    public function postAnswer(Request $request, $id){
        $this->validate($request, array(
            'answer'=>'required',
            'nickname'=>'required|max:100',
        ));
        $answer=new Answer;

        $answer->answer=$request->answer;
        $answer->nickname=$request->nickname;
        $answer->original_message=$id;

        $answer->save();
        $message=Message::find($id);
        $answers=Answer::where('original_message', $id)->get();
        return view('pages/message', compact('message', $message));
    }

    public function index(){
        $messages=Message::paginate(8);
        return view('/pages/posts', compact('messages', $messages));
    }
    
}