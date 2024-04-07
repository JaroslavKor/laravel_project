<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function show($image)
    {
        return view('main.gallery', ['image' => $image]);
    }
}
