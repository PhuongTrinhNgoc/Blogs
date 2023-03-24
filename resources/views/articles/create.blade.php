@extends('layouts.app')

@section('content')
    <div style="height:100vh" class="container">
        <div class="login-box">
            <form action="{{ route('articles.store') }}" method="POST">
                @csrf
                <div class="user-box">
                    <input type="text" name="title" required="">
                    <label>Username</label>
                </div>
                <div class="user-box">
                    <input type="text" name="content" required="">
                    <label>Password</label>
                </div>

                <select style="   
                 width: 100%;
                padding: 6px;
                border: none;
                outline: none;
                border-radius: 4px;" name="category" id="">
                    @foreach ($category as $newCategory)
                        <option value="{{ $newCategory->id }}">{{ $newCategory->name }}</option>
                    @endforeach

                </select>


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
