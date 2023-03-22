@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
       
                <div class="col-6">
                    <h2> {{ $article->title }} </h2>
                    <p class="lead">
                        {{ $article->content }}
                    </p>
                    {{-- <a href="{{ $article }}"> Read more</a> --}}


        </div>
    </div>
@endsection
