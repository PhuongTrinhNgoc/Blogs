<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
class HomeController extends Controller
{
    public function res(){
       
        return view('user.index');
    }
    public function login(){
       
        return view('user.login');
    }
    public function resPost(Request $request){
      $user =  User::create([
            'userName'=>$request->userName,
            'password'=>bcrypt($request->password),
            'repassword'=>$request->repassword
     
        ]);
        $user->save();
        return redirect()->route('login.user');
        // dd($request->all());
    }
    public function loginPost(Request $request){

        //   return redirect()->route('login.user');
          // dd($request->all());
          if(Auth::attempt($request->only('userName','password'))){
            return redirect('/');
          }else{
            return redirect()->back();
          }
      }
      public function logout(Request $request):RedirectResponse
      {
          Auth::logout();
  
          $request->session()->invalidate();
  
          $request->session()->regenerateToken();
  
          return redirect('/');
      }
}
