@extends('layout')

@section('content')
@if(isset($movies)) 
    @foreach($articles as $article)
    <p>{{ $article['date'] }}</p>
    <!-- <p>{{ $article['name'] }}</p> -->
    <!-- <p>{{ $article -> name }}</p> -->
    @endforeach
@endsection
@endif