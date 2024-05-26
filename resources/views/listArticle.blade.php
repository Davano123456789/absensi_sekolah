@extends('layout.main')

@section('content')
    <div class="col-10" style="padding-right: 3rem">

        <div class="wrap-welcome">
            <div class="title-welcome">
                <h1>School Articles Page</h1>
                <p>Come on, read the article here containing hundreds of <br> useful articles</p>
                <hr style="width: 20%;  height: 3px; border-radius:20px;">
            </div>
            <div class="gambar-admin">
                <img src="../images/admin.png" class="img-fluid" alt="">
            </div>
        </div>
        <div class="row">
            @if (session('success'))
                <div class="alert alert-success w-75">
                    {{ session('success') }}
                </div>
            @endif
            @if ($errors->any())
                <div class="alert alert-danger w-75 ">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div>
                <form action="/listArticle" method="GET" class="d-flex mt-3">
                    <input type="text" class="form-control w-25" name="search" id="search"
                        placeholder="Search article">
                    <button type="submit" class="btn btn-primary">Search</button>
                </form>

            </div>
            <div class="div mt-4 text-end">
                <a href="artikel" class="btn btn-info">
                    VIEW ARTICLE
                </a>
            </div>
            <table class="table">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Title</th>
                        <th>Author</th>
                        <th>Created at</th>
                        <th>action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($article as $index => $item)
                        <tr>
                            <td>{{ $index + $article->firstItem() }}</td>
                            <td>{{ $item->title }}</td>
                            <td>{{ $item->user->username }}</td>
                            <td>{{ $item->created_at }}</td>
                            <td>
                                <a href="showArticle/{{ $item->id }}"
                                    class="text-primary me-3 text-decoration-none">Detail</a>
                                <a href="deleteArticle/{{ $item->id }}"
                                    class="text-danger me-3 text-decoration-none">Delete</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

            {{ $article->links() }}
        </div>
    </div>
@endsection
