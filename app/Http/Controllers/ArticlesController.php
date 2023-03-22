<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class ArticlesController extends Controller
{
    public function index(){
        $articles = Article::all();
        return view('index',compact('articles'));
    }
    public function show($id){
        $article = Article::find($id);
        return view('articles.article')->with('article', $article);
    }
    public function create(){
        return view('articles.create');
    }
    public function store(){
        return view('articles.store');
    }
}
