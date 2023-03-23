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
                    <a href="{{ route('articles.edit',$newArr->id) }}"> edit</a>
                    <form action="{{route('articles.destroy',$newArr->id) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">delete</button>
                    </form> 
                </div>
               
            @endforeach

        </div>
    </div>
@endsection
{{-- articles/{id}/edit --}}