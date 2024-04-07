@extends('layout')

@section('content')
    <h1>Articles</h1>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">date</th>
                <th scope="col">name</th>
                <th scope="col">shortDesc</th>
                <th scope="col">desc</th>
                <th scope="col">image</th>
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
                        <td><a href="/gallery/{{ $article->full_image }}"> <img src="{{ asset('images/' . $article->preview_image) }}" alt="" height="100" width="100"></a></td>
                @endforeach
            @else
                <tr>
                    <td colspan="6">No articles found.</td>
                </tr>
            @endif
        </tbody>
    </table>
@endsection
