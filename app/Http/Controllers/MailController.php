<?php

namespace App\Http\Controllers;
//use App\Models\Mail;

use App\Mail\notifyuser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    function sentmail(){
        return view('User.File.sentmali');

    }
    public function mail(Request $request){
//        dd($request);die();
     $data= new mail;

        $data->to=$request->to;
        $data->from=$request->from;
        $data->subject=$request->subject;
        $data->message=$request->message;
//        $data->comment=$request->comments;
        $data->save();
        return redirect()->back();

    }
    public  function sentmailtouser(Request $request){
    Mail::to($request->to)->sent(new notifyuser($request->to ,$request->subject,$request->message));

    }
}
