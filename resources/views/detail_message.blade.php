@extends('layout')

@section('title') {{ $contact_one->subject }} @endsection
@section('main_content')

<h1>{{ $contact_one->subject }}</h1>
    <div class="alert alert-info">
        <h3>{{ $contact_one->message }}</h3>
        <p>{{ $contact_one->email }}</p>
        <p><small>{{ $contact_one->created_at }}</small></p>
        <a href="{{ route('update_message', $contact_one->id) }}"><button class="btn btn-warning">Edit</button></a>
        <a href="{{ route('delete_message', $contact_one->id) }}"><button class="btn btn-danger">Delete</button></a>
    </div>

@endsection

@section('sidebar')@endsection
