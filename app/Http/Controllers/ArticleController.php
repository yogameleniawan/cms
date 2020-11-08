<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use App\Comment;
use Faker\Factory as Faker;

class ArticleController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    

    public function article($id)
    {
        $hasil = Article::find($id);
        $komen = Comment::all();
        return view('post.post',['hasil'=>$hasil,'komen'=>$komen,'id'=>$id]);
    }

    public function insertData(Request $req, $id)
    {
        $faker = Faker::create();
        $hasil = Article::find($id);
        $user = new Comment();
        $user->name = $req->name;
        $user->comment = $req->komentar;
        $user->id_article = $req->id;
        $user->save();
        return redirect()->action('ArticleController@article',['id'=>$id]);
    }
    
    public function index()
    {
        $article = Article::all();
        return view('manage',['article' => $article]);
    }

    public function add()
    {
        return view('addarticle');
    }

    public function create(Request $request)
    {
        $add = new Article();
        $add->title = $request->title;
        $add->content = $request->content;
        $add->featured_image = $request->image;
        $add->save();
        return redirect('/manage');
    }

    public function edit($id)
    {
    $article = Article::find($id);
    return view('editarticle',['article'=>$article]);
    }

    public function update($id, Request $request)
    {
        $article = Article::find($id);
        $article->title = $request->title;
        $article->content = $request->content;
        $article->featured_image = $request->image;
        $article->save();
        return redirect('/manage');
    }

    public function delete($id)
    {
        $article = Article::find($id);
        $article->delete();
        return redirect('/manage');
    }

}
