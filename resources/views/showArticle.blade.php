@extends('layout.main')

@section('content')
    <div class="col-10" style="padding-right: 3rem;">
        <div class="row mt-2" style="padding: 2rem">
            <div class="icon-back mb-2">
                @if (Auth::user()->role_id == 3)
                    <a href="/listArticleUser"><i class="bi bi-arrow-left"></i></a>
                @else
                    <a href="/artikel"><i class="bi bi-arrow-left"></i></a>
                @endif



            </div>
            <div class="col-4">
                <div class="wrap-img-detail">
                    @if ($article->cover == null)
                        <img src="/images/not.png" class="card-img-top img" alt="...">
                    @else
                        <img src="{{ asset('/storage/cover/' . $article->cover) }}" class="card-img-top img" alt="...">
                    @endif
                </div>
            </div>
            <div class="col-8">
                <div class="title-article-detail text-center">
                    <h2>{{ $article->title }}</h2>
                </div>
                <div class="author">
                    <p>Author : {{ $article->user->username }}</p>
                </div>
                <div class="fill-article-detail">
                    <p>{{ $article->content }}</p>
                </div>
            </div>
        </div>
    </div>
@endsection
