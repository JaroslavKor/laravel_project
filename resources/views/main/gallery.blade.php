@extends('layout')

@section('content')
    <h1>Gallery</h1>
    <img src="{{ asset($image) }}" alt="Image">
@endsection
