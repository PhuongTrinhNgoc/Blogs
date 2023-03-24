<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\Category;
use Symfony\Component\Console\Input\Input;

class ArticlesController extends Controller
{
    public function index(){
        $articles = Article::all();
        $category = Category::all();
        return view('index',compact('articles','category'));
    }
    public function show($id){
        $article = Article::with('category')->find($id);
        return view('articles.article')->with('article', $article);
    }
    public function create(){
        $category = Category::all();
        return view('articles.create',compact('category'));
    }
    public function edit($id){
     
        $art = Article::find($id);
        return view('articles.edit',compact('art'));
    }  
    public function update(Request $request,$id){
     
        $art = Article::where('id',$id)
        ->update([
            'title' => $request->input('title'),
            'content' => $request->input('content')
        ]);
        return redirect('/');
    }
    public function destroy($id){
        $art = Article::find($id);
        $art->delete();
        return redirect('/');

    }  
    public function store(Request $request){
      
        $listCr = Article::create([
            'title' => $request->input('title'),
            'content' => $request->input('content'),
            'id_category' =>$request->input('category')
        ]);
      $listCr->save();
        return redirect('/');
    }
    public function showView($id){
        $category = Category::all();

        $articles = Article::where('id_category',$id)->get();
        return view('viewOfcate',compact('articles','category'));
    }

}
