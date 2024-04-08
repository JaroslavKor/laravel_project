<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;
use App\Models\Article;

class CommentController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'text' => 'required',
            'article_id' => 'required|exists:articles,id',
        ]);
    
        $comment = new Comment();
        $comment->title = $request->title;
        $comment->text = $request->text;
        $comment->author_id = Auth::id();
        $comment->article_id = $request->article_id;
        $comment->save();
    
        return redirect()->route('article.show', ['article' => $request->article_id])->with('status', 'Комментарий успешно добавлен.');
    }
    

    public function edit($id)
    {
        $comment = Comment::find($id);
        Gate::authorize('update-comment', $comment);
        return view('comment.edit', ['comment'=> $comment]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'text' => 'required',
            'article_id' => 'required',
        ]);
                $comment = Comment::find($id);
                $comment->title = request('title');
                $comment->text = request('text');
                // $comment->article()->associate($comment->article_id);
                $comment->save();
                return redirect('article.show'.$comment->article_id);
    }


    public function delete($id)
    {
        $comment = Comment::findOrFail($id);
        $article_id = $comment->article_id;
        $comment->delete();
        return redirect()->route('article.show', ['article' => $article_id])->with('status', 'Комментарий успешно удален.');
    }
    

    
}