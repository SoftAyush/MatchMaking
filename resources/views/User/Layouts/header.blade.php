<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" type="image/x-icon" href="{{asset('favicon.ico')}}">
    <title>@yield('title')</title>
    <link href="{{asset('user/css/style.css')}}" rel="stylesheet" type="text/css"/>
    <script src=" {{asset('user/js/script.js')}}"></script>

</head>
<body >
<div id="container">
    <div id="header">

    </div>
    <!-- end of header -->
    <div id="menu">
        <ul>
            <li><a href="{{route('home')}}" class="{{'home' == request()->path() ? 'current' : ''}}">Home</a></li>
            <li><a href="{{route('chat')}}" class="{{'chat' == request()->path() ? 'current' : ''}}">Chat</a></li>
            <li><a href="{{route('story')}}" class="{{'story' == request()->path() ? 'current' : ''}}">Successful
                    Stories</a></li>
            <li><a href="{{route('latestUser')}}" class="{{'latest_People' == request()->path() ? 'current' : ''}}">Last
                    Added</a></li>
            <li><a href="{{route('profile')}}" class="{{'profile' == request()->path() ? 'current' : ''}}">Your
                    Profile</a></li>
            <li class="dropdown">
                <a href="#" class="dropbtn" class=""> Relationship Tip </a>
                <div class="dropdown-content">
                    <a href="{{route('Tip_For_Girl')}}"
                       class="{{'Tip_For_Girl' == request()->path() ? 'current' : ''}}">For Girl</a> <br>
                    <a href="{{route('Tip_For_Boys')}}"
                       class="{{'Tip_For_Boys' == request()->path() ? 'current' : ''}}">For Boy</a>
                </div>
            </li>

            <li><a href="{{route('contact')}}" class="{{'contact' == request()->path() ? 'current' : ''}}">Contact
                    Us</a></li>
            <li>
                <div id="logout">
                    <h3 onclick="logout()"  id="username">Welcome <span style="color:DodgerBlue;"> {{ Auth::user()->name }}</span> </h3>

                    <form action="{{ route('logout') }}" method="post">
                        @csrf
                        <button type="submit" id="logoutDIV" >Logout</button>
                    </form>
                </div>

          </li>
        </ul>
    </div>
    @yield('content-section')
    @include('User.Layouts.footer')
</div>
</body>
</html>
