<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use \Cache;
use Illuminate\Support\Facades\DB;

class child extends Controller
{
    public function child()
    {
        $articles = Article::all();
        return view('homepage',['liat'=>$articles]);
    }
}
