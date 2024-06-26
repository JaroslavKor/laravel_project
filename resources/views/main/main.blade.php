@extends('layout')
@section('content')
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">date</th>
      <th scope="col">Name</th>
      <th scope="col">Description</th>
      <th scope="col">image</th>
    </tr>
  </thead>
  <tbody>
    @foreach($articles as $article)
    <tr>
    <th scope="row">{{$article['date']}}</th>
      <td>{{$article['name']}}</td>
      <td>{{$article['desc']}}</td>
      <td><a href="/gallery/{{$article['full_image']}}"> <img src="{{URL::asset($article['preview_image'])}}" alt="" height = "100" width="100" ></a></td>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection
