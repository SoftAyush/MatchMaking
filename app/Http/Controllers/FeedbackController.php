<?php

namespace App\Http\Controllers;
use App\Models\Feedback;

use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    //

    public function feedback(Request $request){

//        dd($request);
        $data=  new Feedback;

        $data->name=$request->Name;
        $data->address=$request->Address;
        $data->phone=$request->Phone;
        $data->email=$request->Email;
        $data->comment=$request->comments;
        $data->save();
        return redirect()->back();

    }
    public function destroy($id)
    {
        $feedback = Feedback::findOrFail($id);
        $feedback->delete();
        return back();
    }
}
