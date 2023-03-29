@extends('layouts.app')

@section('content')
@include('articles.navOfAdmin')

    <div class="container">

        <div style="margin-bottom: 50px" class="row">
            <div class="col-12">
                <div style="background: lightgray; border-radius:6px" class="">
                    <div style="width: 60%;display:flex;margin-left:15px">
                        @foreach ($category as $listCategory)
                            <div class="list-category">

                                <a class="{{ request()->is(`category/$listCategory->id`) ? 'active' : '' }}"
                                    href="{{ route('cate_show', ['id' => $listCategory->id]) }}">{{ $listCategory->name }}</a>

                            </div>
                        @endforeach
                    </div>
                </div>
            </div>

        </div>
        <div class="row">

            <div class="col-9">
                <h2> {{ $article->title }} </h2>
                <div>
                    <img style="width: 100%; margin-top:20px;margin-bottom:30px"
                        src="https://goccualien.com/wp-content/uploads/2022/06/chicland-hotel-danang-15-600x460.jpg" />
                </div>
                <p class="lead">
                    {{ $article->content }}
                </p>


            </div>

            <div class="col-3">
                <div class="right-news" style="padding-left:40px">
                    <div>
                        <h4 class="widget-title">Featured Posts</h4>
                    </div>
                    <ul>
                        @foreach ($news as $newArr)
                            <li class="cat-item cat-item-232">
                                <a href="{{ route('showNews.show', $newArr->id) }}">
                                    {{ $newArr->title }}</a>
                                <span class="sp-post-count">13</span>
                            </li>
                        @endforeach
                    </ul>

                </div>
            </div>
        </div>

        <div>
            <div class="row">
                <h3 style="padding-top: 50px;
                border-top: 1px solid;
                margin-top: 50px;">news
                    blogs</h3>
                @foreach ($newsSort as $newArr)
                    <div class="col-3">
                        <div class="card">
                            <div class="">
                                <img class="image" style="width: 100%;"
                                    src="https://goccualien.com/wp-content/uploads/2022/06/chicland-hotel-danang-15-600x460.jpg" />

                            </div>
                            <div class="content">
                                <a style="height: 20%" href="{{ route('showNews.show', $newArr->id) }}">
                                    <span
                                        style=" 
                                        font-size:15px;
                         display:-webkit-box;
                        -webkit-line-clamp:1;
                         -webkit-box-orient:vertical;
                         text-overflow:ellipsis;
                         overflow:hidden;"
                                        class="title">
                                        {{ $newArr->title }}
                                    </span>
                                </a>

                                <div style="height: 20%">


                                    <p style=" 
                                    font-size:15px;
                       display:-webkit-box;
                      -webkit-line-clamp:2;
                       -webkit-box-orient:vertical;
                       text-overflow:ellipsis;
                       overflow:hidden;"
                                        class="desc">
                                        {{ $newArr->content }}
                                    </p>
                                </div>

                                <div style="">
                                    <a href="{{ route('showNews.show', $newArr->id) }}"
                                        style="color:black;    line-height: 1.25rem;
                                    font-weight: 500;    margin-top: 1rem;"
                                        href="#" class="btn-of-me">
                                        Find out more
                                        <span aria-hidden="true">
                                            →
                                        </span>
                                    </a>
                                </div>
                            </div>

                        </div>



                    </div>
                @endforeach


            </div>
        </div>
    </div>
@endsection
