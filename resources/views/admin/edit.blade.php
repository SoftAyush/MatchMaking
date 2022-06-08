@section('title','Story Change')
<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-bold text-xl text-gray-800 leading-tight">
            {{ __('Story Updating') }}
        </h2>
    </x-slot>
    <div class="py-12 " style="background-color:pink;">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            {{--            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg " >--}}
            <h1 style="font-size: 30px" >  <b> UpdateThe Love Story  </b> </h1>

            <form action="{{ route('story.update',$story->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                @if ($message = Session::get('success'))
                    <div style="width: 100%; background-color:mediumspringgreen;" >
                        <br>
                        <strong>{{ $message }}</strong>
                        <br>
                    </div>

                @endif
{{--                <input type="hidden" name="id" value="{{$story->id}}">--}}
                <label for=""> Upload Image:</label>
                <div id="imgdesign">
                    <img src="" alt="" >
                    <img src="{{ asset("storage/story/{$story->image}") }}" alt=""  id="img" style="height: 200px;"><br>
                   <input type="file" name="image" accept="image/*" id="fileinput" onchange="document.getElementById('img').src = window.URL.createObjectURL(this.files[0])">

                </div>

                <label for="">Title:</label><br>
                <input type="text" name="title" placeholder="Love Story Title" value="{{ $story->title}} "><br>
                <label for=""> Love Story :</label><br>
                <textarea name="story" id="" cols="130" rows="15"  > {{ old("story", $story->story)}}</textarea><br>
                <input type="submit" value="Update " style="background-color: deepskyblue; border-radius: 5px;">

            </form>

        </div>

</x-admin-layout>
