<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('main.main');
});

Route::get('contacts', function () {
    $contact = [
        'name'=> 'Polytech',
        'adress' => 'B.Semenovskaya',
        'phone' => '8(495)223-3322'
    ];
    return view('main.contact', ['data'=>$contact]);
}); 