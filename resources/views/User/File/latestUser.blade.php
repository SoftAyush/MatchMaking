@extends('User.Layouts.header')
@section('title','Latest people')
@section('content-section')

    @foreach($users as $user)
<div style="height: 200px; float: left"><a href="{{route('people.show', $user->id)}}">
        <img style="height: 190px; width: 190px; float: left; " src="{{$user->profile_photo_url }}" alt="{{ $user->name }}"/></a>
<!-- {{--    <h2 style=" color: black ;width: 150px;--}} -->
<!-- /* {{--    overflow: hidden;--}}  -->
<!-- {{--    text-overflow: ellipsis;" >Name:{{$user->name}}</h2>--}} -->
</div>

    @endforeach
@endsection
