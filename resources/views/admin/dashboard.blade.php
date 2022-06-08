@section('title','Admin Dashboard')
<x-admin-layout>
    <div>
     <h1 style="margin-left: 10%; font-size: 25px;"><b>All User Count</b>  </h1>
    <div style ="margin-left: 10%; background-color: deeppink; height: 90px; width: 100px; border-radius: 20px;float: left;">
         <h1 style=" text-align: center ; font-size: 20px; ">
           <b> Users</b>
         </h1>

       <h3 style="text-align: center; font-size: 20px;">
           {{$countusers}}
       </h3>
    </div>
        <div style ="margin-left: 1%; background-color: deeppink; height: 90px; width: 100px; border-radius: 20px; float: left;">
            <h1 style=" text-align: center ; font-size: 20px; ">
                <b> Story</b>
            </h1>

            <h3 style="text-align: center; font-size: 20px;">
                {{$countstory}}
            </h3>
        </div>
    </div>


{{--        user feedback--}}
    <div>
        <h1 style="margin-left: 10%; margin-top: 8%; font-size: 25px;"><b>User Feedback</b>  </h1>
         <table style="margin-left: 10%;">
             <tr>
                 <th style="border: 1px solid indigo;">S.N</th>
                 <th style="border: 1px solid indigo;">Name</th>
                 <th style="border: 1px solid indigo;">Address</th>
                 <th style="border: 1px solid indigo;">Phone</th>
                 <th style="border: 1px solid indigo;">Email</th>
                 <th style="border: 1px solid indigo;">Questions/Comments</th>
                 <th style="border: 1px solid indigo;">Action</th>
             </tr>
             @php
             $i=1;
                 @endphp
             @foreach($feedback as $feedback )
             <tr>
                 <td style=" border: 1px solid black; text-align: center;"> {{$i}}</td>
                 <td style=" border: 1px solid black; text-align: center;">{{$feedback->name}}</td>
                 <td style=" border: 1px solid black; text-align: center;">{{$feedback->address}}</td>
                 <td style=" border: 1px solid black; text-align: center;">{{$feedback->phone}}</td>
                 <td style=" border: 1px solid black; text-align: center;">{{$feedback->email}}</td>
                 <td style=" border: 1px solid black; text-align: center;">{{$feedback->comment}} </td>
                 <td style=" border: 1px solid black; text-align: center; ">
                     <form action="{{ route('admin.feedback.destroy', $feedback->id) }}" method="POST">
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
