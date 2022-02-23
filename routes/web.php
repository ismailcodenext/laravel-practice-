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
    return view('welcome');
});

Route::get('/posts', [App\Http\Controllers\PostController::class,'index']);



Route::get('/about', function () {
    return view('about');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/demo/{name}/{id?}', function($name, $id = null){
    $data = compact('name', 'id');
     return view('demo')->with($data);
});
Route::get('/test/{user_name?}', function ($user_name = null){
   $data = compact('user_name');
   return view('test')->with($data);
});
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
