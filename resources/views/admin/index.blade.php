@section('title','Story Upload')
<x-admin-layout >
{{--    <x-slot name="header">--}}
{{--        <h2 class="font-semibold text-xl text-gray-800 leading-tight">--}}
{{--            {{ __('Update Story') }}--}}
{{--        </h2>--}}
{{--    </x-slot>--}}

    <div class="py-12 " style="background-color:pink;">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
{{--            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg " >--}}
                <h1 style="font-size: 30px" >  <b> Upload The Love Story  </b> </h1>
                <form action="{{ route('story.save') }}" method="post" enctype="multipart/form-data">
                    @csrf

                    @if ($message = Session::get('success'))
                        <div style="width: 100%; background-color:mediumspringgreen;" >
                            <br>
                            <strong>{{ $message }}</strong>
                            <br>
                        </div>

                    @endif

                    <label for=""> Upload Image:</label>
                    <input type="file"  name="file"> <br>
                    <label for="">Title:</label><br>
                    <input type="text" name="title" placeholder="Love Story Title"><br>
                    <label for=""> Love Story :</label><br>
                    <textarea name="story" id="" cols="130" rows="15"></textarea><br>
                    <input type="submit" value=" Upload " style="background-color: deepskyblue; border-radius: 5px;">

                </form>

            </div>
        </div>
{{--    </div>--}}
</x-admin-layout>
