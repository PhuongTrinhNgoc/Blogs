@extends('layouts.app')

@section('content')
    <h1>creat category</h1>
    <div class="container">
        <form action="{{ route('category.store') }}" method="POST" class="form-horizontal">
            @csrf
            <div class="">
              <div class="form-group">
                <input name="name" type="text" class="form-control" placeholder="name">
              </div>
              <div class="form-group">
                <input name="status" type="text" class="form-control" placeholder="status">
              </div>
            </div>
            <div class="col-auto">
                <button  class="btn btn-primary mb-2">Submit</button>
              </div>
          </form>
    </div>
@endsection
