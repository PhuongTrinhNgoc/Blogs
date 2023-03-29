@extends('layouts.app')

@section('content')
    <div class="container">


        <div style="margin-bottom: 50px" class="row">
            <div class="col-9">
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

        <div style="margin-bottom:50px" class="col-9">
            <div>


                <form style="display: flex;
            justify-content: end;" action="{{ url()->current() }}"
                    method="get">
                    @csrf
                    <select style="padding: 8px;margin-right:6px" name="selectSort" id="">
                        <option value="" @if (request()->get('selectSort') == '')  @endif>all</option>
                        <option value="asc" @if (request()->get('selectSort') == 'asc') selected @endif>low to hight</option>
                        <option value="desc" @if (request()->get('selectSort') == 'desc') selected @endif>hight to low</option>
                    </select>
                    <button style="color: black;" class="btn-of-me btn-of-me-2" type="submit">Sort</button>
                </form>
            </div>
        </div>

        <div class="row">
            <div class="col-9">
                <div class="row">
                    @foreach ($sortHighttoLow as $newArr)
                        <div class="col-3 main-conten">
                            <a href="{{ route('articles.show', $newArr->id) }}">
                                <div class="book">
                                    <div style=" padding: 6px 6px 6px 35px;height:100%" class="dada">
                                        <div>
                                            <p style="
                                            height: 80%;
                                            font-size:15px;
                                            display:-webkit-box;
                                           -webkit-line-clamp:5;
                                            -webkit-box-orient:vertical;
                                            text-overflow:ellipsis;
                                            overflow:hidden;
                                            "
                                                class="lead">
                                                {{ $newArr->content }}
                                            </p>

                                        </div>

                                        <div style="height: 20%;text-align:center">
                                            <div class="">
                                                <p style="font-size: 10px" class=""> {{ $newArr->created_at }} </p>

                                                {{-- <h6>{{ $newArr->category->name }}</h6> --}}
                                                {{-- {{ dd($newArr) }} --}}
                                            </div>
                                        </div>

                                    </div>
                                    <div class="cover">
                                        <div class="main-img">
                                            <div style="">
                                                <img src="https://goccualien.com/wp-content/uploads/2022/06/chicland-hotel-danang-15-600x460.jpg"
                                                    alt="">
                                                <h6 class="h5-title"> {{ $newArr->title }} </h6>
                                            </div>


                                            <div
                                                style="  position: absolute;
                                          bottom:0;
                                            left: 10px;">
                                                <p style="font-size: 10px" class=""> {{ $newArr->created_at }} </p>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="col-3">
                <div class="right-news" style="padding-left:40px">
                    <div>
                        <h4 class="widget-title">News</h4>
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
    </div>
@endsection
{{-- articles/{id}/edit --}}
