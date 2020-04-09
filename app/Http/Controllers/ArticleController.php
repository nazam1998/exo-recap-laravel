<?php

namespace App\Http\Controllers;

use App\Article;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use App\Mail\NewsLetterMail;
use Illuminate\Support\Facades\Storage;

class ArticleController extends Controller
{
    public function __construct()
    {
        $this->authorizeResource(Article::class,'article');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles=Article::orderBy('id', 'ASC')->get();
        return view('admin.article.index',compact('articles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.article.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $article=new Article();
        $filename=Storage::disk('public')->put('',$request->image);
        $article->titre=$request->titre;
        $article->image=$filename;
        $article->texte=$request->texte;
        $article->user_id=Auth::id();
        $article->save();
        return redirect()->route('article.index')->with('msg','Article created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function show(Article $article)
    {
        return view('admin.article.show',compact('article'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function edit(Article $article)
    {
        return view('admin.article.edit',compact('article'));
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
        if($request->hasFile('image')){
            if(Storage::disk('public')->exists($article->image)){
                Storage::disk('public')->delete($article->image);
            }
            $filename=Storage::disk('public')->put('',$request->image);
            $article->image=$filename;
        }
        $article->titre=$request->titre;
        $article->texte=$request->texte;
        $article->save();
        return redirect()->route('article.index')->with('msg','Article edited successfully');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function destroy(Article $article)
    {
        if(Storage::disk('public')->exists($article->image)){
            Storage::disk('public')->delete($article->image);
        }
        $article->delete();
        return redirect()->route('article.index')->with('msg','Article deleted successfully');

    }
}
