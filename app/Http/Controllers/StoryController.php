<?php

namespace App\Http\Controllers;

use App\Models\Story;
use Illuminate\Http\Request;

class StoryController extends Controller
{
    //
    public function store(Request $request){
        $data=  new Story;

        $image=$request->file;
        $imagename=time().$image->getClientOriginalName();
        $image->move(public_path('storage/story'), $imagename);
        $data->image =$imagename;
        $data->title=$request->title;
        $data->story=$request->story;
        $data->save();
        return redirect()->back()->with('success','Love Story Upload successfully!');

    }

    public function show($id){
        $story = Story::findOrFail($id);

        return view('user.file.love_story_1', compact('story'));
    }



}
