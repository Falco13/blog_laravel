@extends('layout')

@section('title') Contact @endsection
@section('main_content')

<h1>Page Contact in developing now...</h1><br>

<form action="{{ route('contact-form') }}" method="post">
    @csrf
    <div class="form-group">
        <input type="text" name="name" id="name" placeholder="Your name" class="form-control"><br>
        <input type="text" name="email" id="email" placeholder="Your email" class="form-control"><br>
        <input type="text" name="subject" id="subject" placeholder="Subject message" class="form-control"><br>
        <textarea name="message" id="message" cols="30" rows="7" class="form-control" placeholder="Your message"></textarea><br>
        <button type="submit" class="btn btn-warning">Send message</button>
    </div>
</form>
@endsection
