<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    function index(){
        $datas = Post::all();
        return view('home', compact("datas"));
    }
}
