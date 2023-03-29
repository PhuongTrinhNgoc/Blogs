@extends('layouts.app')

@section('content')
    <div style="height:100vh" class="container">
        <div class="login-box">
            <h1 style="text-align: center;color:#fff">resign</h1>
            <form action="" method="POST">
                @csrf
                <div class="user-box">
                    <input type="text" name="userName" required="">
                    <label>user Name</label>
                </div>
                <div class="user-box">
                    <input type="text" name="password" required="">
                    <label>password</label>
                </div>
                <div class="user-box">
                    <input type="text" name="repassword" required="">
                    <label>repassword</label>
                </div>
                <center>
                    <a href="#">
                        <span></span>
                        <button style="border: none;outline:none;background:none;color:#fff" class="">Submit</button>

                    </a>
                </center>


            </form>
        </div>
    </div>
@endsection
