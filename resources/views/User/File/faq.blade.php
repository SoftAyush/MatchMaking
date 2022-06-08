@extends('User.Layouts.header')
@section('title','Support')
@section('content-section')
    <center><h1>Hi,How Can I Help you ? </h1></center>

    <div id="myimgdiv">
        <img src="{{asset('user/images/help.jpg')}}" alt="" width="100%" height="300px">
    </div>
    <div id="textdiv">
        <h3 onclick="myFunction()" style="margin-left: 10px;">How long should you stay on a dating app?</h3>
        <p id="myDIV">
            Most people stay on dating apps until they become exclusive with someone or decide they want to focus on one
            person and see how things turn out. Some people get off apps after a few years of having little to no
            success. Online dating is not worth it for all people especially if they lack self-awareness, realistic
            expectations, have bad app choices, poor profiles, bad communication skills.
        </p>
    </div>

    <div id="textdiv_1">
        <h3 onclick="myFunction1()" style="margin-left: 10px;">Should I use plandid photos on my dating profile?</h3>
        <p id="myDIV_1">
            No, these photos are generally too staged, stiff and are obviously fake. They resemble stock photos, are
            cliche and suggest there is a high level of photoshop involved to make you look better than you actually
            look. Stick with natural, candid photos.
        </p>
    </div>
    <div id="textdiv_2">
        <h3 onclick="myFunction2()" style="margin-left: 10px;">Should I use plandid photos on my dating profile?</h3>
        <p id="myDIV_2">
            No, these photos are generally too staged, stiff and are obviously fake. They resemble stock photos, are
            cliche and suggest there is a high level of photoshop involved to make you look better than you actually
            look. Stick with natural, candid photos.
        </p>
    </div>
@endsection
