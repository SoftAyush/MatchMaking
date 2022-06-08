@extends('User.Layouts.header')
@section('title','Mail Sent')
@section('content-section')
    <center>
<h1 style="color: black">New message</h1>
</center>
<fieldset style="width: 100px; margin-left: 27%; color: black">

<form action=" {{route('SentMail')}}"  method="post">
    @csrf
    <label for=""> To :</label>
    <input type="email" name="to" placeholder="To" style="margin-left: 9% ;margin-top: 2%"><br>
    <label for="">From:</label>
    <input type="email" name="from" placeholder="Form" style="margin-left: 5.5% ;margin-top: 2%"> <br>
    <label for=""> Subject:</label>
    <input type="text" name="subject" placeholder="Subject" style="margin-left: 2.5% ;margin-top: 2%"> <br>
    <label for="">Message:</label> <br>
    <textarea name="message" id="" cols="50" rows="10" placeholder="Message" ></textarea> <br>
    <input type="submit"  value="Sent" style=" margin-left: 40%; ">

</form>
</fieldset>

@endsection
