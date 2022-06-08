@section('title','Message Check')
<x-admin-layout >
{{--    <x-slot name="header">--}}
{{--        <h2 class="font-semibold text-xl text-gray-800 leading-tight">--}}
{{--            {{ __('Update Story') }}--}}
{{--        </h2>--}}
{{--    </x-slot>--}}

    <div>
        <h1 style="margin-left: 10%; margin-top: 8%; font-size: 25px;"><b>Message Check</b>  </h1>
        <table style="margin-left: 10%;">
            <tr>
                <th style="border: 1px solid indigo;">S.N</th>
                <th style="border: 1px solid indigo;">From</th>
                <th style="border: 1px solid indigo;">To</th>
                <th style="border: 1px solid indigo;">Subject</th>
                <th style="border: 1px solid indigo;">Message</th>
                <th style="border: 1px solid indigo;" colspan="2">Action</th>
            </tr>
            @php
                $i=1;
            @endphp
            @foreach($messages as $message )
                <tr>
                    <td style=" border: 1px solid black; text-align: center;"> {{$i}}</td>
                    <td style=" border: 1px solid black; text-align: center;">{{$message->from}}</td>
                    <td style=" border: 1px solid black; text-align: center;">{{$message->to}}</td>
                    <td style=" border: 1px solid black; text-align: center;">{{$message->subject}}</td>
                    <td style=" border: 1px solid black; text-align: center; padding: 0px 5% 0px 5% ">{{$message->message}}</td>
                    <td style=" border: 1px solid black; text-align: center;">
                        <form action="" method="post">
                            @csrf
                            <input type="hidden" name="from" value="{{$message->from}}">
                            <input type="hidden" name="to" value="{{$message->to}}">
                            <input type="hidden" name="subject" value="{{$message->subject}}">
                            <input type="hidden" name="message" value="{{$message->message}}">
                        <button  type="submit" style="background-color:dimgrey; padding: 3px 5px; border-radius: 5px;"> Sent </button>
                        </form>
                    </td>
                    <td style=" border: 1px solid black; text-align: center; ">
                        <form action="#" method="POST">
                            @csrf
                            @method('DELETE')

                            <button  type="submit" style="background-color:red; padding: 3px 5px; border-radius: 5px;"> Delete </button>
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
