<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function create()
    {
        return view('auth.registr');
    }

    public function registr(Request $request)
    {
        var_dump($request->name);
        var_dump(request('name'));
    }
}
