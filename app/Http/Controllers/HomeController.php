<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Article;


class HomeController extends Controller
{
    public function index(){
        $articles = Article::all();
        return view('homepage',['liat'=>$articles]);
    }
    
    public function home(Request $request)
    {
        $articles = Article::paginate(4);
        return view('home.all',['liat'=>$articles]);
    }

    public function search(Request $request)
    {
        $search = $request->search;
        $result = DB::table('articles')
        ->where('title','like',"%".$search."%")
        ->paginate();
        return view('home.all',['liat'=>$result]);
    }

    public function adventure(Request $request)
    {
        $articles = \App\Article::all();
        return view('home.adventure',['liat'=>$articles]);
    }

    public function searchAdventure(Request $request)
    {
        $search = $request->search;
        $result = DB::table('articles')
        ->where('title','like',"%".$search."%")
        ->paginate();
        return view('home.adventure',['liat'=>$result]);
    }

    public function football(Request $request)
    {
        $articles = \App\Article::all();
        return view('home.football',['liat'=>$articles]);
    }

    public function searchFootball(Request $request)
    {
        $search = $request->search;
        $result = DB::table('articles')
        ->where('title','like',"%".$search."%")
        ->paginate();
        return view('home.football',['liat'=>$result]);
    }

    public function shooting(Request $request)
    {
        $articles = \App\Article::all();
        return view('home.shooting',['liat'=>$articles]);
    }

    public function searchShooting(Request $request)
    {
        $search = $request->search;
        $result = DB::table('articles')
        ->where('title','like',"%".$search."%")
        ->paginate(1);
        return view('home.shooting',['liat'=>$result]);
    }

    public function racing(Request $request)
    {
        $articles = \App\Article::all();
        return view('home.racing',['liat'=>$articles]);
    }

    public function searchRacing(Request $request)
    {
        $search = $request->search;
        $result = DB::table('articles')
        ->where('title','like',"%".$search."%")
        ->paginate();
        return view('home.racing',['liat'=>$result]);
    }

}
