@extends('layout')

@section('title') All contacts @endsection
@section('main_content')

<h1>All contacts</h1>
@foreach ($contact_list as $contact)
    <div class="alert alert-info">
        <h3>{{ $contact->subject }}</h3>
        <p>{{ $contact->email }}</p>
        <p><small>{{ $contact->created_at }}</small></p>
        <a href="{{ route('detail_message') }}"><button class="btn btn-danger">Read...</button></a>
    </div>
@endforeach

@endsection

@section('sidebar')@endsection
