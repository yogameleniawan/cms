<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use PDF;
use App;
use Dompdf\Dompdf;


class ManageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $article = Article::latest()->paginate(5);
  
        return view('articles.index',compact('article'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('articles.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'content' => 'required',
            'featured_image' => 'required|max:7000',
        ]);
        if($request->hasFile('featured_image'))
            {
            $fileName = time().'.'.$request->file('featured_image')->getClientOriginalExtension();
            $destinationPath = 'storage/uploads/';
            $upload_success = $request->file('featured_image')->move($destinationPath, $fileName);
            $article = new Article();
            $article->title = $request->title;
            $article->content = $request->content;
            $article->featured_image = $destinationPath.$fileName;
            $article->save();
            return redirect()->route('articles.index')
                        ->with('success','Article created successfully.');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function show(Article $article)
    {
        return view('articles.show',compact('article'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function edit(Article $article)
    {
        return view('articles.edit',compact('article'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Article $article)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
            'featured_image' => 'required',
        ]);
  
        $article->update($request->all());
  
        return redirect()->route('articles.index')
                        ->with('success','Article updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function destroy(Article $article)
    {
        $article->delete();
  
        return redirect()->route('articles.index')
                        ->with('success','Product deleted successfully');
    }

    function fetch_data(Request $request)
    {
     if($request->ajax())
        {
        $article = DB::table('articles')->paginate(5);
        return view('articles.index', compact('article'))->render();
        }
    }
    /**
    * View PDF on the browser
    * @return pdf [description] */
    public function viewPDF()
    {
        $article = Article::get();
        $pdf = PDF::loadView('articles.cetakpdf', compact('article'));
        return $pdf->stream("pdf_preview.pdf");
    }
}
