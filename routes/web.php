<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CommentController;

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


//Auth
Route::get('/create', [AuthController::class, 'create']);
Route::post('/registr', [AuthController::class, 'registr']);
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'customLogin']);
Route::get('/logout', [AuthController::class, 'logout']);

//Article
Route::get('/', [ArticleController::class, 'index']);
Route::resource('/article', ArticleController::class,);

// Route::get('/', function () {
//     return view('main.main');
// });
//Comment
Route::group(['prefix' => '/comment'], function(){
    Route::post('store', [CommentController::class, 'store'])->name('comment.store');
    Route::get('edit/{id}', [CommentController::class, 'edit'])->name('comment.edit');
    Route::post('update/{id}', [CommentController::class, 'update'])->name('comment.update');
    Route::post('delete/{id}', [CommentController::class, 'delete'])->name('comment.delete ');
});

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