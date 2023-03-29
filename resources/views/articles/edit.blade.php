@extends('layouts.app')

@section('content')
  


    <div style="height:100vh" class="container">
      <div class="login-box">
          <form  action="{{ route('articles.update', $art->id) }}"  method="POST">
              @csrf
            @method('PUT')

              <div class="user-box">
                  <input value="{{ $art->title }}" type="text" name="title" required="">
                  <label>edit title</label>
              </div>
              <div class="user-box">
                  <input value="{{ $art->content }}"  type="text" name="content" required="">
                  <label>edit content</label>
              </div>
              {{-- <select style="   
               width: 100%;
              padding: 6px;
              border: none;
              outline: none;
              border-radius: 4px;" name="category" id="">
                  @foreach ($artCate as $newCategory )
                      <option >{{ $newCategory->name }}</option>
                  @endforeach

              </select> --}}


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
