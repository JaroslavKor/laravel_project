@extends('layout')

@section('content')
    <h1>Articles</h1>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">name</th>
                <th scope="col">date</th>
                <th scope="col">image</th>
                <th scope="col">shortDesc</th>
                <th scope="col">desc</th>
            </tr>
        </thead>
        <tbody>
            @if(isset($articles))
                @foreach($articles as $article)
                    <tr>
                        <th scope="row">{{ $article->date }}</th>
                        <td>{{ $article->name }}</td>
                        <td>{{ $article->shortDesc ?? '' }}</td>
                        <td>{{ $article->desc }}</td>
                        <td><a href="{{ route('gallery', ['image' => $article->full_image]) }}">{{ $article->preview_image }}</a></td>
                    </tr>
                @endforeach
            @else
                <tr>
                    <td colspan="6">No articles found.</td>
                </tr>
            @endif
        </tbody>
    </table>
@endsection
