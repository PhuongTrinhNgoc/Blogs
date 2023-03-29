@extends('layouts.app')

@section('content')
@include('articles.navOfAdmin')
    <div style="text-align: center">
        <h1>admin news</h1>
    </div>
    <div style="height: 100%" class="container">
        <div style="margin: 20px 0">
            <a style="color: black" class="btn-of-me" href=" {{ route('created.news') }}">create artiles</a>
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
                    <th scope="col">status</th>
                    <th scope="col">action</th>
                </tr>
            </thead>
            <tbody>

                @foreach ($news as $newArr)
                    <tr>
                        <th valign='middle' scope="row"> {{ $newArr->id }}</th>
                        <td valign='middle'> {{ $newArr->title }}</td>
                        <td valign='middle'> {{ $newArr->content }}</td>
                        <td valign='middle'> {{ $newArr->created_at }}</td>
                        <td valign='middle'>{{ $newArr->status }}</td>
                        <td valign='middle'>{{ $newArr->id_category }}</td>
                        <td valign='middle'>
                            <div>
                                <a style="margin-bottom: 10px" class="btn-of-me"
                                    href="{{ route('edit.news', $newArr->id) }}"> edit</a>
                            </div>
                            <div>
                                <form action="{{ route('destroyNews.destroy', $newArr->id) }}" method="post">
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
