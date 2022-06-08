<?php

namespace App\Http\Controllers;
use App\Models\Story;
use App\Models\User;
use App\Models\Admin;
use App\Models\Feedback;
use App\Models\Mail;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use DB;
class AdminController extends Controller
{
    //

    function dashboard()
    {
        $countstory = Story::count();
        $countusers = User::count();
        $feedback = Feedback::get()->all();
        return view('admin.dashboard', ['countusers' => $countusers, 'feedback' => $feedback, 'countstory' => $countstory]);
    }

    function index()
    {
        $countusers = User::count();
        return view('admin.index', ['countusers' => $countusers]);
    }

    function allUser()
    {
        $users = User::get()->all();
        return view('admin.userShow', ['users' => $users]);
    }

    public function destroy($id)
    {
        $users = User::findOrFail($id);
        $users->delete();
        return back();
    }

    public function show(Request $request)
    {
        $user = Auth::guard('admin')->user(0)->name;
        $list = DB::table('admins')->where('name', $user)->get();
//        $profile = Auth::guard('admin')->user();
        return view('admin.profile.show', ['profile' => $list]);
//        return view('admin.profile.show', [
//            'request' => $request,
//            'admin' => $request->Auth::guard('admin')->user(),
//        ]);
//        dd(Auth());
    }

    public function multitask()
    {
        $story = Story::get()->all();
        return view('admin.storyEditOrDelete', ['story' => $story]);
    }

    public function delete($id)
    {
        $story = Story::findOrFail($id);
        $story->delete();
        return back();
    }

    public function edit($id)
    {
        $story = Story::findOrFail($id);

        return view('admin.edit', compact('story'));
    }

    public function update(Request $request, $id){
//    dd($request);die;
        $story= Story::find($id);
        if($request->hasFile('image')){

            $image=$request->image;
            $imagename = time().$image->getClientOriginalName();

            $image->move(public_path('storage/story'), $imagename);
            $story->image =  $imagename;
        }
           $story->title= $request->title;
           $story->story=$request->story;
           $story->save();
           return redirect()->back()->with('success', 'Story updated.');
    }
    public function mailcheck(){
        $messages= Mail::get()->all();
        return view('admin.checkMail',['messages'=> $messages]);
    }


}
