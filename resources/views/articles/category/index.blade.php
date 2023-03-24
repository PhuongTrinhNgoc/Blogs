@extends('layouts.app')
@section('content')
<h1>index</h1>
<a href=" {{ route('category.create') }}">creat category artiles</a>
    <div class="container">
        <div class="row">
            
                    @foreach ($category as $newCategory)
                    <div class="col-3 item-blog">
                        <h2> {{ $newCategory->name }} </h2>
                
                        <a href="{{ route('category.edit',$newCategory->id) }}"> edit</a>
                        <form action="{{route('category.destroy',$newCategory->id) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">delete</button>
                        </form> 
                    </div>
                   
                @endforeach
        
    </div>
@endsection
