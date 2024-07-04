@extends('layout')

@section('title') Update contact @endsection
@section('main_content')

<h1>Update contact</h1><br>

<form action="{{ route('update_message_submit', $contact_one->id) }}" method="post">
    @csrf
    <div class="form-group">
        <input type="text" name="name" id="name" value="{{ $contact_one->name }}" class="form-control"><br>
        <input type="text" name="email" id="email" value="{{ $contact_one->email }}" placeholder="Your email" class="form-control"><br>
        <input type="text" name="subject" id="subject" value="{{ $contact_one->subject }}" placeholder="Subject message" class="form-control"><br>
        <textarea name="message" id="message" cols="30" rows="7" class="form-control" placeholder="Your message">{{ $contact_one->message }}</textarea><br>
        <button type="submit" class="btn btn-warning">Update</button>
    </div>
</form>
@endsection
