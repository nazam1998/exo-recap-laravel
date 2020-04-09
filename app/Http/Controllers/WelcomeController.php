<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
class WelcomeController extends Controller
{
    public function index(){
        $articles=Article::latest()->get();
        return view('welcome',compact('articles'));
    }
}
