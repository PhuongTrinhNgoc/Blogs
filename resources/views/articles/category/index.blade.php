@extends('layouts.app')
@section('content')
@include('articles.navOfAdmin')

    <div style="height: 100vh" class="container">
        <h1 style="text-align: center;margin-top:50px;margin-bottom:50px">admin category</h1>

        <a style="color: black;margin-bottom:50px" class="btn-of-me" href=" {{ route('category.create') }}">creat category
            artiles</a>


        <table class="table table-bordered table-dark">
            <thead style="color: #fff">
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">name</th>
                    <th scope="col">status</th>
                    <th scope="col">created_at</th>
                    <th scope="col">updated_at</th>
                    <th scope="col">action</th>

                </tr>
            </thead>
            <tbody>
                @foreach ($category as $newCategory)
                    <tr>
                        <th valign='middle' scope="row"> {{ $newCategory->id }}</th>
                        <th valign='middle' scope="row"> {{ $newCategory->name }}</th>
                        <th valign='middle' scope="row"> {{ $newCategory->status }}</th>
                        <th valign='middle' scope="row"> {{ $newCategory->created_at }}</th>
                        <th valign='middle' scope="row"> {{ $newCategory->updated_at }}</th>
                        <td valign='middle'>
                            <div>
                                <a style="margin-bottom: 10px" class="btn-of-me"
                                    href="{{ route('category.edit', $newCategory->id) }}"> edit</a>
                            </div>
                            <div>
                                <form action="{{ route('articles.destroy', $newCategory->id) }}" method="post">
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
