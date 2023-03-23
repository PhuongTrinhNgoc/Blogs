@extends('layouts.app')

@section('content')
    <div class="container">
        <form action="{{ route('articles.store') }}" method="POST" class="form-horizontal">
            @csrf
            <div class="">
              <div class="form-group">
                <input name="name" type="text" class="form-control" placeholder="First name">
              </div>
              <div class="form-group">
                <input name="status" type="text" class="form-control" placeholder="Last name">
              </div>
            </div>
            <div class="col-auto">
                <button  class="btn btn-primary mb-2">Submit</button>
              </div>
          </form>
    </div>
@endsection
