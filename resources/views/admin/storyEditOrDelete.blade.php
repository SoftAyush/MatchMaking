@section('title','Story Change')
<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Story list') }}
        </h2>
    </x-slot>

    <div >
        <h1 style="margin-left: 10%;  font-size: 25px;"><b> All User Name</b>  </h1>
        <table style="margin-left: 10%;">
            <tr>
                <th style="border: 1px solid indigo;">S.N</th>
                <th style="border: 1px solid indigo;">Title</th>
                <th style="border: 1px solid indigo;" colspan="2">Action</th>
            </tr>
            @php
                $i=1;
            @endphp

            @foreach($story as $story )
                <tr>
                    <td style=" border: 1px solid black; text-align: center;"> {{$i}}</td>
                    <td style=" border: 1px solid black; text-align: center;">{{$story->title}}</td>
                    <td style="background-color:green;  padding: 3px 5px; border-radius: 5px; border: 1px solid black; text-align: center;">
                        <a href="{{ route('story.edit', $story->id) }}"> Edit </a>
                    </td>
                    <td style=" border: 1px solid black; text-align: center;">
                        <form action="{{ route('admin.story.delete', $story->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" style="background-color:red; padding: 3px 5px; border-radius: 5px;" > Delete </button>
                        </form>
                    </td>
                </tr>
                @php
                    $i++;
                @endphp
            @endforeach


        </table>
    </div>
</x-admin-layout>
