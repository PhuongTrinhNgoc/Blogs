<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Article;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\News;
use Illuminate\Support\Facades\DB;

class PagesController extends Controller
{
    public function index(){
        return redirect('/articles');
    }
    public function home(Request $request){
        $articles = Article::all();
        $category = Category::all();
        $news = News::all();
        if($request->has('selectSort') && !empty($request->get('selectSort'))){
            $sortHighttoLow = DB::table('articles')
           ->orderBy('created_at',$request->selectSort)
           ->get();
       }else{
           $sortHighttoLow = Article::all();
       }
       return view('home',compact('sortHighttoLow','category','news'));
    }
    public function about(){
        return view('about.about');
    }
}
