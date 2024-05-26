@extends('layout.main')

@section('content')
    <div class="col-10" style="padding: 0 3rem;background-color: rgb(245, 245, 245);">

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

            <div class="div mt-4 text-end">
                @if (Auth::user()->role_id == 1 || Auth::user()->role_id == 3)
                    <a href="listArticle" class="btn btn-info">
                        VIEW LIST ARTICLE
                    </a>
                    <a href="addArticle" class="btn btn-primary">
                        ADD ARTICLE
                    </a>
                @endif
            </div>

            @foreach ($artikel->reverse() as $item)
                <div class="col-3 mt-3">
                    <div class="card">
                        @if ($item->cover == null)
                            <img src="/images/not.png" class="card-img-top img" alt="...">
                        @else
                            <img src="{{ asset('/storage/cover/' . $item->cover) }}" class="card-img-top img"
                                alt="...">
                        @endif
                        <div class="card-body">
                            <h5 class="card-title">{{ $item->title }}</h5>
                            <p class="card-text">
                                {{ strlen($item->content) > 70 ? substr($item->content, 0, 70) . '...' : $item->content }}
                            </p>

                            <a href="showArticle/{{ $item->id }}" class="btn btn-primary">Detail Article</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
