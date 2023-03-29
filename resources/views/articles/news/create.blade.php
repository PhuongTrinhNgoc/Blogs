@extends('layouts.app')

@section('content')
    <div style="height:100vh" class="container">
        <div class="login-box">
            <form action="{{ route('storeNews.news') }}" method="POST">
                @csrf
                <div class="user-box">
                    <input type="text" name="title" required="">
                    <label>title</label>
                </div>
                <div class="user-box">
                    <input type="text" name="content" required="">
                    <label>content</label>
                </div>

                <div class="user-box">
                    <input type="text" name="status" required="">
                    <label>status</label>
                </div>
                <center>
                    <a href="#">
                        <span></span>
                        <button style="border: none;outline:none;background:none;color:#fff" class="">creted</button>

                    </a>
                </center>


            </form>
        </div>
    </div>
@endsection
