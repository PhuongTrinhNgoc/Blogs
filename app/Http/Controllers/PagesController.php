<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Article;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        return redirect('/articles');
    }
 
    public function about(){
        return view('about.about');
    }
}
