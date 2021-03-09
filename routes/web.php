<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Post;
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

Route::get('/', [Post::class, 'index']);

Route::get('/about',function(){
    return view('about');
});

Route::get('/menu', [Post::class, 'menu']);

Route::get('/contact',function(){
    return view('contact');
});

#Route::get('/catering',function(){
#    return view('catering');
#});
