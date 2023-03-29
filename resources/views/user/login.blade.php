@extends('layouts.app')

@section('content')
    <div style="height:100vh" class="container">
        <div class="login-box">
            <h1 style="text-align: center;color:#fff">login</h1>
            <form action="" method="POST">
                @csrf
                <div class="user-box">
                    <input type="text" name="userName" required="">
                    <label>user Name</label>
                </div>
                <div class="user-box">
                    <input type="password" name="password" required="">
                    <label>password</label>
                </div>
         
                <center>
                    <a href="#">
                        <span></span>
                        <button style="border: none;outline:none;background:none;color:#fff" class="">Login</button>

                    </a>
                </center>


            </form>
        </div>
    </div>
@endsection
