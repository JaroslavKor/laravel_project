<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\GalleryController;

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

// Route::get('/', function () {
//     return view('main.main');
// });


Route::get('/', [MainController::class, 'index'])->name('home');

Route::get('/gallery/{full}', [MainController::class, 'show'])->name('gallery');


Route::get('contacts', function () {
    $contact = [
        'name'=> 'Yaroslaw',
        'adress' => 'B.Semenovskaya',
        'phone' => '8(495)223-3322'
    ];
    return view('main.contact', ['data'=>$contact]);
}); 