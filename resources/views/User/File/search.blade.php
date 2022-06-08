@extends('User.Layouts.header')
@section('title','Search')
@section('content-section')
    @if(count($search) > 0)
    @foreach($search as $search)
        <div style="height: 200px; float: left"><a href="{{route('people.show', $search->id)}}">

            <img style="height: 190px; width: 190px; float: left; " src="{{$search->profile_photo_url }}" alt="{{ $search->name }}"/></a>
        </div>
    @endforeach
        @else
        <center>
            <span style="color: black; font-size: 35px; "  >Oop⚠️ No Data Found Sorry🥺🥺.</span>
        </center>

    @endif
@endsection
