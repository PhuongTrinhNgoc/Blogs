@extends('layouts.app')

@section('content')
@include('articles.navOfAdmin')
    <div style="text-align: center">
        <h1>admin articles</h1>
    </div>
    <div style="height: 100%" class="container">
        <div style="margin: 20px 0">
            <a style="color: black" class="btn-of-me" href=" {{ route('articles.create') }}">create artiles</a>
        </div>


        <div style="margin-bottom:50px" class="col-9">
            <div>
                <form style="display: flex; justify-content:end;" action="{{ url()->current() }}" method="get">
                    @csrf
                    <select style="padding: 8px;margin-right:6px" name="selectSort" id="">
                        <option value="">sort by year</option>
                        <option value="asc">low to hight</option>
                        <option value="desc">hight to low</option>
                    </select>
                    <button style="color: black" class="btn-of-me-2 btn-of-me   " type="submit">Sort</button>
                </form>
            </div>
        </div>


        <table class="table table-bordered table-dark">
            <thead style="color: 
            #fff">
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">title</th>
                    <th scope="col">content</th>
                    <th scope="col">created_at</th>
                    <th scope="col">update_at</th>
                    <th scope="col">id_category</th>
                    <th scope="col">action</th>
                </tr>
            </thead>
            <tbody>

                @foreach ($sortHighttoLow as $newArr)
                    <tr>
                        <th valign='middle' scope="row"> {{ $newArr->id }}</th>
                        <td valign='middle'> {{ $newArr->title }}</td>
                        <td valign='middle'> {{ $newArr->content }}</td>
                        <td valign='middle'> {{ $newArr->created_at }}</td>
                        <td valign='middle'>{{ $newArr->updated_at }}</td>
                        <td valign='middle'>{{ $newArr->id_category }}</td>
                        <td valign='middle'>
                            <div>
                                <a style="margin-bottom: 10px" class="btn-of-me"
                                    href="{{ route('articles.edit', $newArr->id) }}"> edit</a>
                            </div>
                            <div>
                                <form action="{{ route('articles.destroy', $newArr->id) }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button style="color: orange" type="submit" class="btn-of-me-2 btn-of-me">
                                        delete
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach


            </tbody>
        </table>



    </div>
@endsection
{{-- articles/{id}/edit --}}
