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
                Name:<p style="color: #0320fc">{{$users->name}} </p>
                Email:<p style="color:  #0320fc">{{$users->email}}</p>
                @php
                    $age="";
                    $birthdate = $users->dob;
                        $currentdate=date("Y-m-d");
                        $age=date_diff(date_create($birthdate),date_create($currentdate));
                @endphp
                Age:<p style="color: #0320fc"> {{ $age->format("%y") }} </p>

                Searching :<p style="color: #0320fc">{{$users->looking}} </p>
                Gender: <p style="color:  #0320fc">{{$users->gender}} </p>
                Education:<p style="color:  #0320fc">{{$users->Education}} </p>
                Hobbies :<p style="color:  #0320fc">{{$users->hobbies}}</p>
                Permanent Address: <p style="color: #0320fc"> {{$users->perm_address}} </p>
                Temporary Address: <p style="color:  #0320fc">{{$users->temp_address}} </p>
                Job:<p style="color:  #0320fc">{{$users->job}} </p>
                Income :<p style="color:  #0320fc">{{$users->income}} </p>
                Good Habits:  <p style="color:  #0320fc"> {{$users->good_habit}}</p>
                Bad Habits : <p style="color:  #0320fc">{{$users->bad_habit}}  </p>
            </b>
            <br><br><br>
        </div>

@endsection
