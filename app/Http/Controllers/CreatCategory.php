<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CreatCategory extends Controller
{
    public function index(){
        $category = Category::all();
        return view('articles.category.index',compact('category'));
    }
    public function show($id){
        dd($id);
        $category = Category::find($id);
        return view('articles.category.index')->with('article', $category);
    }
    public function create(){
        return view('articles.category.create');
    }
    public function store(Request $request){
        $listCr = Category::create([
            'name' => $request->input('name'),
            'status' => $request->input('status')]);
             $listCr->save();
        return redirect('/categories');
    }
    public function edit($id){
        $art = Category::find($id);
        return view('articles.category.edit',compact('art'));
    }  
    public function update(Request $request,$id){
     
        $art = Category::where('id',$id)
        ->update([
            'name' => $request->input('name'),
            'status' => $request->input('status')
        ]);
        return redirect('/categories');
    }
    public function destroy($id){
        $art = Category::find($id);
        $art->delete();
        return redirect('/categories');

    }  
}
