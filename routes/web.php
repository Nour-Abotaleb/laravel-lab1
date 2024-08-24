<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', [PostController::class, 'show'])
    ->name('posts.show');

Route::post('/posts', [PostController::class, 'store'])
    ->name('posts.store');

Route::get('/create/post', function () {
    return view('create_post');
})
    ->name('posts.create');

Route::get('/posts', [PostController::class, 'details'])
    ->name('posts.details');

Route::get('/posts/{id}', [PostController::class, 'getPost'])
    ->name('posts.get')
    ->where('id', '[0-9]+');

Route::get('/posts/delete/{id}', [PostController::class, 'destroy'])
    ->name('posts.delete')
    ->where('id', '[0-9]+');

Route::get('/posts/edit/{id}', [PostController::class, 'edit'])
    ->name('posts.edit')
    ->where('id', '[0-9]+');
    
Route::put('/posts/{id}', [PostController::class, 'update'])
    ->name('posts.update')
    ->where('id', '[0-9]+');
