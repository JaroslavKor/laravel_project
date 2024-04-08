@extends('layout')
@section('content')
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">date</th>
      <th scope="col">Name</th>
      <th scope="col">ShortDesc</th>
      <th scope="col">Description</th>
    </tr>
  </thead>
  <tbody>
    @foreach($articles as $article)
    <tr>
    <th scope="row">{{$article['date']}}</th>
    <td><a href="/article/{{$article->id}}">{{$article->name}}</a></td>
      <td>{{$article->short_desc}}</td>
      <td>{{$article['desc']}}</td>
    </tr>
    @endforeach
  </tbody>
</table>
{{$articles->links()}}
@endsection
