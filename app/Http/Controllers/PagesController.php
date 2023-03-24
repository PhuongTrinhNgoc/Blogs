<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Article;
use Illuminate\Http\Request;
use App\Models\Category;
class PagesController extends Controller
{
    public function index(){
        return redirect('/articles');
    }
    public function home(){
        $articles = Article::all();
        $category = Category::all();
        return view('home',compact('articles','category'));
    }
    public function about(){
        return view('about.about');
    }
}
