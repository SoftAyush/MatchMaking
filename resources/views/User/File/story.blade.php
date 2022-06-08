@extends('User.Layouts.header')
@section('title','Successful Stories')
@section('content-section')
    @foreach($storys as $story)
    <div id="container1">
        <img src="{{ asset("storage/story/{$story->image}") }}" alt="" id="image1">
        <div id="contant1">
            <h2> {{$story->title}} </h2>
            <p id="styleStory" >{{$story->story}} </p><a href="{{route('story.show', $story->id)}}">Read More »</a>
        </div>
    </div>
    @endforeach
@endsection
