@extends('layouts.app')

@section('content')
    <div class="container">
        <div>
            <a href=" {{ route('articles.create') }}">create artiles</a>
        </div>

        <div style="margin-bottom: 50px" class="row">
            <div class="col-9">
                <div style="background: lightgray; border-radius:6px" class="">
                    <div style="width: 60%;display:flex;margin-left:15px">
                    @foreach ($category as $listCategory)
                        <div class="list-category">
                          
                            <a class="{{ request()->is('category/'.$listCategory['id']) ? 'active' : '' }}" href="{{ route('cate_show', ['id' => $listCategory->id])  }}">{{ $listCategory->name }}</a>
                            {{ dd('category/'.$listCategory['id']) }}
                        </div>
                    @endforeach
                </div>
                </div>
            </div>

        </div>

        <div class="row">
            <div class="col-9">
                <div class="row">
                    @foreach ($articles as $newArr)
                        <div class="col-3 main-conten">
                            <a href="{{ route('articles.show', $newArr->id) }}">
                                <div class="book">
                                    <div style=" padding: 6px 6px 6px 35px;height:100%" class="dada">
                                        <div style="height: 70%">
                                            <p class="lead">
                                                {{ $newArr->content }}
                                            </p>
                                            <div class="">
                                                <h6>{{ $newArr->category->name }}</h6>
                                            </div>
                                        </div>

                                        <div style="height: 30%;  text-align: center;">
                                            <a style="margin-bottom: 10px" class="btn-of-me" href="{{ route('articles.edit', $newArr->id) }}"> edit</a>
                                            <form action="{{ route('articles.destroy', $newArr->id) }}" method="post">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn-of-me-2">
                                                    <a class="btn-of-me" href="">delete</a>
                                                </button>
                                        </div>

                                        </form>
                                    </div>
                                    <div class="cover">
                                        <div class="main-img">
                                            <img src="https://goccualien.com/wp-content/uploads/2022/06/chicland-hotel-danang-15-600x460.jpg"
                                                alt="">
                                            <h6 class="h5-title"> {{ $newArr->title }} </h6>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="col-3">
                <h1>new blos</h1>
            </div>
        </div>
    </div>
@endsection
{{-- articles/{id}/edit --}}
