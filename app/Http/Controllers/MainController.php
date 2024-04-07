<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

// class MainController extends Controller
// {
//     public function index()
//     {
//         $articles = json_decode(file_get_contents(public_path().'/articles.json'));
//         return view('main.main', ['articles' => $articles]);
//     }
//     public function show($image)
//     {
//         return view('main.gallery', ['image' => $image]);
//     }
// }

class MainController extends Controller
{
    public function index(){
        $articles = json_decode(file_get_contents(public_path().'/articles.json'), true);
       return view('main.main', ['articles' => $articles]);
    }

    public function show($full){
        // echo $full;
        return view('main.gallery', ['full' => $full]);
    }
}