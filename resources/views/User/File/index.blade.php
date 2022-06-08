@extends('User.Layouts.header')
@section('title','Home')
@section('content-section')
    <div id="content">
        <div id="content_left">
            <div class="content_left_section_01">
                <div class="welcome_title"></div>
                <!-- <h1>Welcome to our Dating website!</h1> -->
                <img src="{{asset('user/images/image_02.jpg')}}" alt="" style="float: right" id="welimg" />
                <p><strong>Match Making </strong> is the best platform for dating affluent, successful and beautiful singles. </p>
                <p> Our members include CEOs, pro athletes, doctors, lawyers, investors, entrepreneurs, beauty queens, fitness models and celebrities  just to name a few.</p>
                <p> Sign up and contact hundreds of thousands of like-minded  members now!</p>
                <p>Ever quality single is welcome here. <br>You do not have to be rich or famous.</p>
            </div>
            <div class="cleaner_with_divider">&nbsp;</div>
            <div class="content_left_section_02">
                <div class="latest_profile_title">Latest Members</div>
                @php $user = ''; @endphp
                @foreach($users as $user)
                <div class="latest_profile_box"> <img src="{{$user->profile_photo_url }}" alt="{{ $user->name }}"  height="100px" width="100px"/>
                    <div class="name">{{$user->name}}</div>
                    @php
                    $age="";
                    $birthdate = $user->dob;
                        $currentdate=date("Y-m-d");
                        $age=date_diff(date_create($birthdate),date_create($currentdate));
                        @endphp
                    <b style="color: black">Age:</b>{{ $age->format("%y") }}<br />
                   <b style="color: black">Address:</b>  {{ $user->temp_address }}<br/>
                    <div class="readmore">
                        <a href="{{route('people.show', $user->id)}}">Details &raquo;</a>
                    </div>
                     </div>
                @endforeach

                <div class="cleaner">&nbsp;</div>
                <span></span>
            </div>
            <!-- end of section 2 -->
        </div>

        <!-- end of content left -->
        <div id="content_right">
            <div id="templatmeo_quick_search">
                <h1 id="quick_search">Quick Search</h1>
                <form method="post" action="{{route('search')}}">
                    @csrf
                    <div class="form_row">
                        <label>I am</label>
                        <select name="i_am">

                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                        </select>
                        &nbsp;&nbsp;
                        <label>Seeking</label>
                        <select name="seeking">
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                        </select>
                    </div>
                    <div class="form_row">
                        <label>Looking for</label>
                        <select name="looking">
                            <option value="">Select</option>
                            <option value="Friendship">Friendship</option>
                            <option value="Relationship">Relationship</option>
                            <option value="Dating">Dating</option>
                        </select>
                    </div>
{{--                    <div class="form_row">--}}
{{--                        <label>I was born</label>--}}
{{--                        <select name="day">--}}
{{--                            <option>1</option>--}}
{{--                            <option>2</option>--}}
{{--                            <option>3</option>--}}
{{--                            <option>4</option>--}}
{{--                            <option>5</option>--}}
{{--                            <option>6</option>--}}
{{--                            <option>7</option>--}}
{{--                            <option>8</option>--}}
{{--                            <option>9</option>--}}
{{--                            <option>10</option>--}}
{{--                            <option>11</option>--}}
{{--                            <option>12</option>--}}
{{--                            <option>13</option>--}}
{{--                            <option>14</option>--}}
{{--                            <option>15</option>--}}
{{--                            <option>16</option>--}}
{{--                            <option>17</option>--}}
{{--                            <option>18</option>--}}
{{--                            <option>19</option>--}}
{{--                            <option>20</option>--}}
{{--                            <option>21</option>--}}
{{--                            <option>22</option>--}}
{{--                            <option>23</option>--}}
{{--                            <option>24</option>--}}
{{--                            <option>25</option>--}}
{{--                            <option>26</option>--}}
{{--                            <option>27</option>--}}
{{--                            <option>28</option>--}}
{{--                            <option>29</option>--}}
{{--                            <option>30</option>--}}
{{--                            <option>31</option>--}}
{{--                        </select>--}}
{{--                        <select name="month">--}}
{{--                            <option>Jan</option>--}}
{{--                            <option>Feb</option>--}}
{{--                            <option>Mar</option>--}}
{{--                            <option>April</option>--}}
{{--                            <option>May</option>--}}
{{--                            <option>June</option>--}}
{{--                            <option>July</option>--}}
{{--                            <option>Aug</option>--}}
{{--                            <option>Sep</option>--}}
{{--                            <option>Oct</option>--}}
{{--                            <option>Nov</option>--}}
{{--                            <option>Dec</option>--}}
{{--                        </select>--}}
{{--                        <input class="inputfield" name="year" type="text" value="year" style="width:50px;"   onfocus="clearText(this)" onblur="clearText(this)" />--}}
{{--                    </div>--}}
                    <div class="form_row">
                        <label> Profile Name</label>
                        <input class="inputfield" name="name" type="text" />
                    </div>
                    <input type="submit" value="Submit" id="Submit" />
                </form>
                <div class="cleaner">&nbsp;</div>
                <span></span> </div>
            <!-- end of quick search -->
            <div class="content_right_section">
                <h1>Successful Stories</h1>
                @foreach($storys as $story)
                <img src="{{ asset("storage/story/{$story->image}") }}" alt="" id="succesid"/>
                <h2>{{$story->title}}</h2>
                <p>{{$story->story}}</p>
                <a href="{{route('story.show', $story->id)}}" class="readmore">Read more &raquo;</a> </div>
            @endforeach
        </div>
        <!-- end of content right -->
        <div class="cleaner_with_height">&nbsp;</div>
    </div>

@endsection
