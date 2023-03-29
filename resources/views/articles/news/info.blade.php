@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
       
                <div class="col-6">
                    <h2> {{ $news->title }} </h2>
                    <p class="lead">
                        {{ $news->content }}
                    </p>


        </div>
    </div>
</div>
@endsection
