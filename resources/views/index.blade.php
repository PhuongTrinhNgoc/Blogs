@extends('layouts.app')

@section('content')
    <div class="container">
        <div>
            <a href=" {{ route('articles.create') }}">create artiles</a>
        </div>
        <div class="row">
            @foreach ($articles as $newArr)
                <div class="col-sm-4 item-blog">
                    <h2> {{ $newArr->title }} </h2>
                    <p class="lead">
                      {{ $newArr->content }}
                    </p>
                    <a href="{{ route('articles.show', $newArr->id) }}"> Read more</a>
                </div>
            @endforeach

        </div>
    </div>
@endsection
