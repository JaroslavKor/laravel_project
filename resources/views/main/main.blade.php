@extends('layout')

@section('content')
    <h1>Articles</h1>

    @foreach($articles as $article)
    <p>{{ $article['date'] }}</p>
    @endforeach
@endsection
