<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CreatCategory extends Controller
{
    public function index(){
        $category = Category::all();
        return view('articles.category.creat',compact('category'));
    }
}
