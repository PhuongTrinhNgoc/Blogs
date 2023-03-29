@extends('layouts.app')

@section('content')
    <div style="height:100vh" class="container">
        <div class="login-box">
            <form action="{{ route('updateNews.news', $news->id) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="user-box">
                    <input value="{{ $news->title }}" type="text" name="title" required="">
                    <label>edit title</label>
                </div>
                <div class="user-box">
                    <input value="{{ $news->content }}" type="text" name="content" required="">
                    <label>edit content</label>
                </div>
                <div class="user-box">
                    <input value="{{ $news->status }}" type="text" name="status" required="">
                    <label>edit status</label>
                </div>


                <center>
                    <a href="#">
                        <span></span>
                        <button style="border: none;outline:none;background:none;color:#fff" class="">update</button>

                    </a>
                </center>


            </form>
        </div>
    </div>
@endsection
