@extends('layouts.app')

@section('content')
    <div class="container">
        <form action="{{ route('category.update', $art->id) }}" method="POST" class="form-horizontal">
            @csrf
            @method('PUT')
            <div class="">
              <div class="form-group">
                <input value="{{ $art->name }}" name="name" type="text" class="form-control" placeholder="First name">
              </div>
              <div class="form-group">
                <input value="{{ $art->status }}" name="status" type="text" class="form-control" placeholder="Last name">
              </div>
            </div>
            <div class="col-auto">
                <button  class="btn btn-primary mb-2">update</button>
              </div>
          </form>
    </div>
@endsection
