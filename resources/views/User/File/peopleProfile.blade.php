@extends('User.Layouts.header')
@section('title','PeopleProfile')
@section('content-section')


    <div id="imgdesign">
            <img src="{{$users->profile_photo_url }}" alt="{{ $users->name }}" id="img"><br>
{{--            <input type="file" name="Photo" accept="image/*" id="fileinput" onchange="document.getElementById('img').src = window.URL.createObjectURL(this.files[0])">--}}
        <button><a href="{{route('sentmail')}}"> Send Mail</a></button>
        </div>
        <hr>
        <div id="profiletxt" >
            <b>

        <p style="color: #b103fc"> Name:</p>{{$users->name}}<br>
                <p style="color: #b103fc">Email:</p>{{$users->email}}<br>
                @php
                    $age="";
                    $birthdate = $users->dob;
                        $currentdate=date("Y-m-d");
                        $age=date_diff(date_create($birthdate),date_create($currentdate));
                @endphp
                <p style="color: #b103fc"> Age: </p>{{ $age->format("%y") }}<br>
{{--         Date of birth: 2000/05/25 <br>--}}
                <p style="color: #b103fc">Searching : </p>{{$users->looking}} <br>
                <p style="color: #b103fc">  Gender:</p> {{$users->gender}} <br>
                <p style="color: #b103fc"> Education:</p>{{$users->Education}}  <br>
                <p style="color: #b103fc"> Hobbies :</p> {{$users->hobbies}} <br>
                <p style="color: #b103fc"> Permanent Address: </p> {{$users->perm_address}}  <br>
                <p style="color: #b103fc"> Temporary Address:</p> {{$users->temp_address}} <br>
                <p style="color: #b103fc"> Job:</p>{{$users->job}} <br>
                <p style="color: #b103fc"> Income :</p>{{$users->income}} <br>
                <p style="color: #b103fc"> Good Habits :</p>{{$users->good_habit}} <br>
                <p style="color: #b103fc">  Bad Habits :</p>{{$users->bad_habit}}
            </b>
            <br><br><br>
        </div>

@endsection
