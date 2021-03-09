<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
class Post extends Controller
{
    //

    public function index()
    {
        $posts = DB::select('select * from kiloapp_posts');
        $food_choice=['Biriyani','Curries','Garlic Rice','Juice Bar','Kilo koththu'];

        return view('index',['posts'=>$posts])
        ->with($food_choice);
    }

    public function menu()
    {
        $posts = DB::select('select * from kiloapp_posts');

        return view('menu',['posts'=>$posts]);
    }

}
