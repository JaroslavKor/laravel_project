@extends('layout')
@section('content')
<h1>Gallery</h1>
    <img src="{{URL::asset($full)}}" alt="">
@endsection