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
    <h6 class="card-subtitle mb-2 text-body-secondary">{{$article->short_desc}}</h6>
    <p class="card-text">{{$article->desc}}</p>
    <a href="/article/{{$article->id}}/edit" class="btn btn-info">Обновить</a>
    <a href="#" class="btn btn-info">Comment</a>
    <div class="mb-3">
      <a href="#" class="btn btn-info">Удалить</a>
     </div class="mb-3">
  </div>
</div>

<h2 class="text-center">Комментарии</h2>
  @foreach($comments as $comment)
  <div class="card" style="width: 18rem;">
  <div class="card-body">
     
    <h5 class="card-title">{{$comment->title}}</h5>
    <h6 class="card-subtitle mb-2 text-body-secondary">{{$comment->text}}</h6>
    <a href="/article/{{$article->id}}/edit" class="btn btn-info">Обновить</a>
    <a href="comment/delete/{{$comment->id}}" class="btn btn-info">Удалить</a>
  </div> 
</div>
  @endforeach
  {{$comments->links()}}
  <h2 class="text-center">Новый комментарий</h2>
   <div class="mb-3">
    <label for="text" class="form-label">Заголовок</label>
    <input type="text" class="form-control" id="text" name="title">
  </div>
  <input type="hidden" name="article_id" value="{{$article->id}}">
  <div class="mb-3">
    <label for="text" class="form-label">Текст</label>
    <textarea class="form-control" id="text" name="text"></textarea>
  </div>
  <button type="submit" class="btn btn-primary">Добавить</button>
</div>


@endsection
