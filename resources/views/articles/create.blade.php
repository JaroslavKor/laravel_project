@extends('layout')
@section('content')

@if($errors->any())
  <div class="alert alert-danger">
    <ul>
        @foreach($errors->all() as $error)
            <li>
            {{$error}} 
            </li>
        @endforeach 
    </ul>
  </div>
  @endif

  <form action="/article" method="POST">
  @csrf
    <div class="mb-3">
        <label for="date" class="form-label">Дата</label>
        <input type="date" class="form-control" id="date" name="date">
   </div>
   <div class="mb-3">
    <label for="title" class="form-label">Заголовок</label>
    <input type="text" class="form-control" id="title" name="title">
  </div>
  <div class="mb-3">
    <label for="shortDesc" class="form-label">Аннотация</label>
    <input type="text" class="form-control" id="shortDesc" name="shortDesc">
  </div>
  <div class="mb-3">
    <label for="desc" class="form-label">Описание</label>
    <input type="text" class="form-control" id="desc" name="desc"></input>
  </div>
  <button type="submit" class="btn btn-primary">Сохранить</button>
</form>
@endsection