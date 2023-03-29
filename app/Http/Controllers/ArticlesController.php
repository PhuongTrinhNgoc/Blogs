<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\Category;
use App\Models\News;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Symfony\Component\Console\Input\Input;

class ArticlesController extends Controller
{
    public function index(Request $request){
        $articles = Article::all();
        $category = Category::all();
        if($request->has('selectSort') && !empty($request->get('selectSort'))){
             $sortHighttoLow = DB::table('articles')
            ->orderBy('created_at',$request->selectSort)
            ->get();
        }else{
            $sortHighttoLow = Article::all();
        }
        return view('admin',compact('sortHighttoLow','category'));
    }
    public function show($id){
        $news = News::all();
        $newsSort = DB::table('news')->orderBy('created_at','desc')->limit('4')->get();
        $newsLimit = DB::table('news')->limit(4)->get();
        $category = Category::all();

        $article = Article::with('category')->find($id);
       return view('articles.article',compact('news','article','category','newsSort'));
    }  
     public function showNews($id){
        $news = News::find($id);
       return view('articles.news.info',compact('news'));
    } 
    public function create(){
        $category = Category::all();
        return view('articles.create',compact('category'));
    }
    public function edit($id){
     
        $art = Article::find($id);
        $artCate = Category::find($id);
        return view('articles.edit',compact('art','artCate'));
    }  
    public function update(Request $request,$id){
     
        $art = Article::where('id',$id)
        ->update([
            'title' => $request->input('title'),
            'content' => $request->input('content')
        ]);
        return redirect('/admin');
    }
    public function destroy($id){
        $art = Article::find($id);
        $art->delete();
        return redirect('/admin');

    }  
    public function store(Request $request){
      
        $listCr = Article::create([
            'title' => $request->input('title'),
            'content' => $request->input('content'),
            'id_category' =>$request->input('category')
        ]);
      $listCr->save();
        return redirect('admin');
    }
    public function showView(Request $request,$id){
        $category = Category::all();
        $news = News::all();
        $articles = Article::where('id_category',$id);
        if($request->has('selectSort') && !empty($request->get('selectSort'))){
            $sortHighttoLow =  $articles
           ->orderBy('created_at',$request->selectSort)
           ->get(); 
        //    dd($sortHighttoLow);
       }else{
           $sortHighttoLow =  $articles->get();
       }
        return view('viewOfcate',compact('sortHighttoLow','category','news'));
    }
    // create news
    public function indexNews(Request $request){
        $news = News::all();

        return view('articles.news.index',compact('news'));
    }
    public function createdNews(Request $request){
        $news = News::all();
        return view('articles.news.create',compact('news'));
    }
    public function storeNews(Request $request){
        $listCr = News::create([
            'title' => $request->input('title'),
            'content' => $request->input('content'),
            'status' =>$request->input('status')
        ]);
      $listCr->save();
        return redirect('/newsBlog');
    }
    public function editNews($id){
        $news = News::find($id);
        return view('articles.news.edit',compact('news'));
    }
    public function updateNews(Request $request,$id){
        $news = News::find($id)
        ->update([
            'title' => $request->input('title'),
            'content' => $request->input('content'),
            'status' => $request->input('status')
        ]);
        return redirect('/newsBlog');
    }
    public function destroyNews($id){
        $news = News::find($id);
        $news->delete();
        return redirect('/newsBlog');

}
}