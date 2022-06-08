<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Story;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //


    public function index()
    {
        $users = User::latest()->take(4)->get();
        $storys = Story::take(1)->get();
        return view('User.File.index',['users' => $users,'storys' => $storys]);
    }
    public function privacy()
    {
        return view('User.File.privacy');
    }
    public function profile()
    {
        return view('User.File.profile');
    }
    public function contact()
    {
        return view('User.File.contact');
    }
    public function term()
    {
        return view('User.File.terms_condition');
    }
    public function support()
    {
        return view('User.File.faq');
    }
    public function story()
    {
        $story = Story::latest()->get();
        return view('User.File.story',['storys' => $story]);
    }


    public function chat()
    {
        return view('User.File.chat');
    }
    public function latestUser(){
        $users = User::all();
        return view('User.File.latestUser',['users' => $users]);
    }
    public function peopleShow($id){
        $users=User::findOrFail($id);
        return view('user.file.peopleProfile',compact('users'));

    }
    public function for_girl()
    {
        return view('User.File.TipForGirls');
    }
    public function for_boy()
    {
        return view('User.File.TipForBoys');
    }
    public function search(Request $request){
            $iam= $request->i_am;
            $seeking= $request->seeking;
            $looking = $request->looking;
            $name = $request->name;
//            echo $iam;echo $seeking;die;
        if (isset($name)&& !empty($name)){

            $search= User::where('name','LIKE',"%". $name ."%")->get();
//            dd($search);
//            die();
        }else {
            if (isset($iam) && isset($seeking) && empty($looking)) {
                if ($iam == "Male" && $seeking == "Female") {
                    $search = User::where('gender', 'Female')->get();
                } elseif ($iam == 'Female' && $seeking == "Male") {
                    $search = User::where('gender', 'Male')->get();
                } elseif ($iam == 'Male' && $seeking == "Male") {
                    $search = User::where('gender', 'Male')->get();
                } elseif ($iam == 'Female' && $seeking == "Female") {
                    $search = User::where('gender', 'Female')->get();
                } else {

                }

            } elseif (isset($looking) && isset($iam) && isset($seeking)) {
                if ($looking == 'Dating') {
                    if ($iam == 'Male' && $seeking == 'Female') {
                        $search = User::where('looking', 'Dating')->where('gender', 'Female')->get();
                    } elseif ($iam == 'Female' && $seeking == 'Male') {
                        $search = User::where('looking', 'Dating')->where('gender', 'Male')->get();
                    } elseif ($iam == 'Female' && $seeking == 'Female') {
                        $search = User::where('looking', 'Dating')->where('gender', 'Female')->get();
                    } elseif ($iam == 'Male' && $seeking == 'Male') {
                        $search = User::where('looking', 'Dating')->where('gender', 'Male')->get();
                    } else {

                    }
                } elseif ($looking == 'Friendship') {
                    if ($iam == 'Male' && $seeking == 'Female') {
                        $search = User::where('looking', 'Friendship')->where('gender', 'Female')->get();
                    } elseif ($iam == 'Female' && $seeking == 'Male') {
                        $search = User::where('looking', 'Friendship')->where('gender', 'Male')->get();
                    } elseif ($iam == 'Female' && $seeking == 'Female') {
                        $search = User::where('looking', 'Friendship')->where('gender', 'Female')->get();
                    } elseif ($iam == 'Male' && $seeking == 'Male') {
                        $search = User::where('looking', 'Friendship')->where('gender', 'Male')->get();
                    } else {

                    }
                } else {
                    // relationship
                    if ($iam == 'Male' && $seeking == 'Female') {
                        $search = User::where('looking', 'Relationship')->where('gender', 'Female')->get();
                    } elseif ($iam == 'Female' && $seeking == 'Male') {
                        $search = User::where('looking', 'Relationship')->where('gender', 'Male')->get();
                    } elseif ($iam == 'Female' && $seeking == 'Female') {
                        $search = User::where('looking', 'Relationship')->where('gender', 'Female')->get();
                    } elseif ($iam == 'Male' && $seeking == 'Male') {
                        $search = User::where('looking', 'Relationship')->where('gender', 'Male')->get();
                    } else {

                    }

                }
            }
        }


            return view('user.file.search', compact('search'));
//            return redirect()->route('displaySearch', compact('search'));
    }




}
