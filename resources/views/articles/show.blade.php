@extends('layout')
@section('content')

<form action="{{$article->id}}" method="post">
        @method('delete')
        @csrf
        <div class="card-body">
            <h5 class="card-title">{{$article->name}}, ({{$article->date}})</h5>
            <h6 class="card-subtitle mb-2 text-muted">{{$article->shortDesc}}</h6>
            <p class="card-text">{{$article->desc}}</p>
            <a href="/article/{{$article->id}}/edit" class="btn btn-info">Редактировать</a>
            <button class="btn btn-warning" type="submit">Удалить</button>
        </div>
    </form>
    
<div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title">{{$article->name}}</h5>
    <h6 class="card-subtitle mb-2 text-body-secondary">{{$article->shor_desc}}</h6>
    <p class="card-text">{{$article->desc}}</p>
    <a href="/article/{{$article->id}}/edit" class="btn btn-info">Обновить статью</a>
  </div>
</div>
@endsection