@extends('layouts.app')

@section('content')
    <div class="container">


        <div style="margin-bottom: 50px" class="row">
            <div class="col-9">
                <div style="background: lightgray;border-radius:6px" class="">
                    <div style="width: 60%;display:flex;margin-left:15px">
                    @foreach ($category as $listCategory)
                        <div class=" list-category">
                            <a class="{{ request()->is('category/'.$listCategory['id']) ? 'active' : '' }}" href="{{ route('cate_show', ['id' => $listCategory->id]) }}">{{ $listCategory->name }}</a>
                        {{-- {{ dd(request()->is('category/11')) }} --}}
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
                        <div class="col-4 main-conten">
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

                                        <div style="height: 20%;text-align:center">
                                            <div class="">
                                                <h6>{{ $newArr->category->name }}</h6>
                                            </div>
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
