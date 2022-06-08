@extends('User.Layouts.header')
@section('title','Contact-Us')
@section('content-section')
<div id="style1">
    <div id="body_container">
        <div class="detail_container">
            <div class="detail_box">
                <div class="detail_top_curve">
                    <div class="detail_detail_content">
                        <div class="welcomezone">
                            <div style="margin-bottom:10px;">
                                <div class="blueboldheading">
                                    <h1>Contact <span>Us</span></h1>
                                </div>
                                <div>
                                    <p> <strong> <b style="color: #2563eb">Match Making</b> helping thousands of people in the Nepal, If you have any questions about our service,Please Call one of our numbers below or using the contact form below.</strong></p>
                                    <p>If you have a some problem you can check <a href="{{route('faq')}}">FAQs</a>.</p>
                                </div>
                                <div> <br />
                                    <h2>Contact Form:</h2>
                                    <form action="{{route('feedback')}}" method="post" enctype="multipart/form-data">
                                        @csrf
                                        <table width="99%">
                                            <tr>
                                                <td class="body" id="Contact"><strong>
                                                        <label for="FullName">Full Name:</label>
                                                    </strong></td>
                                                <td><input name="Name" type="text" size="50" /></td>
                                            </tr>
                                            <tr>
                                                <td class="body" id="Address"><strong>
                                                        <label for="Address">Address:</label>
                                                    </strong></td>
                                                <td><input name="Address" type="text" size="50" /></td>
                                            </tr>
                                            <tr>
                                                <td class="body" id="Phone"><strong>
                                                        <label for="Phone">Phone:</label>
                                                    </strong></td>
                                                <td><input name="Phone" type="text" size="50" /></td>
                                            </tr>
                                            <tr>
                                                <td class="body" id="Email"><strong>
                                                        <label for="Email">Email:</label>
                                                    </strong></td>
                                                <td><input name="Email" type="email" size="50" /></td>
                                            </tr>
                                            <tr>
                                                <td class="body" id="Comments"><strong>
                                                        <label for="Comments">Questions/Comments:</label>
                                                    </strong></td>
                                                <td><textarea name="comments" cols="39" rows="6"></textarea></td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td><input type="submit" name="submit" class="button" value="Send Now" /></td>
                                            </tr>
                                        </table>
                                    </form>
                                </div>
                                <div> <br />
                                    <h2>Contact Information: </h2>
                                    <img src="{{asset('user/images/photo-contact.jpg')}}" alt="" width="226" height="150" hspace="15" vspace="15" class="project-img" />
                                    <p>Malta, lalitpur<br/>
                                        Nepal</p>
                                    <p> <span><img src="{{asset('user/images/ico-phone.png')}}" alt="" width="20" height="16" hspace="2" align="middle" id="error" /> Phone:</span> +977-9865231976<br />
                                        <span><img src="{{asset('user/images/ico-fax.png')}}" alt="" width="20" height="16" hspace="2" align="middle"  id="error"/> Fax:</span> (+01) 5739641<br />
                                        <span><img src="{{asset('user/images/ico-website.png')}}" alt="" width="20" height="16" hspace="2" align="middle" id="error"/> Website:</span> <a href="#">www.Match Making.com</a><br />
                                        <span><img src="{{asset('user/images/ico-email.png')}}" alt="" width="20" height="16" hspace="2" align="middle" id="error"/> Email:</span> <a href="#">info@matchmaking.com</a><br />
                                        <span><img src="{{asset('user/images/ico-twitter.png')}}" alt="" width="20" height="16" hspace="3" align="middle" id="error"/> <a href="#">Follow</a> on Twitter</span><br />
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="clear"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
