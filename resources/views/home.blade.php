@extends('layout')

@section('title') Home Page @endsection
@section('main_content')

<h1>Home Page</h1>

@endsection

@section('sidebar')
    @parent
    <p>+ simple text</p>
@endsection
