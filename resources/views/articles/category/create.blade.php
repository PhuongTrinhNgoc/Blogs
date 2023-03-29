@extends('layouts.app')

@section('content')
    <h1 style="text-align: center">creat category</h1>
    <div class="">
        <div style="height:100vh" class="">
            <div class="login-box">
                <form action="{{ route('category.store') }}" method="POST">
                    @csrf
                    <div class="user-box">
                        <input type="text" name="name" required="">
                        <label>name</label>
                    </div>
                    <div class="user-box">
                        <input type="text" name="status" required="">
                        <label>status</label>
                    </div>

                    <center>
                        <a href="#">
                            <span></span>
                            <button style="border: none;outline:none;background:none;color:#fff"
                                class="">Submit</button>

                        </a>
                    </center>


                </form>
            </div>
        </div>
    </div>
@endsection
