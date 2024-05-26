@extends('layout.main')

@section('content')
    <link rel="stylesheet" href="/css/detailTeacher.css">
    <div class="col-10" style="padding: 2rem;background-color: rgb(245, 245, 245);">
        <div class="atas ">
            <h4 class="mb-3 mt-3">Update Article</h4>
        </div>
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        <div class="mt-2">

            <form action="/updatedArticle/{{ $article->id }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('put')
                <div class="wrap-input mb-2">
                    <div class="w-100">
                        <div class="row">
                            <div class="col-12 w-75">
                                <div class="mb-3">
                                    <label for="title" class="form-label">Title</label>
                                    <input type="text" name="title" value="{{ $article->title }}" id="title"
                                        class="form-control mb-4">
                                </div>
                            </div>
                            <div class="col-12 w-75">
                                <div class="mb-3">
                                    <label for="image" class="form-label">Image</label>
                                    <input type="file" name="image" id="image" class="form-control">
                                </div>
                                <label for="image" style="display: block" class="form-label">Gambar sebelumnya</label>
                                @if ($article->cover == null)
                                    <img src="/images/not.png" class="card-img-top img mb-3" style="width: 80px"
                                        alt="...">
                                @else
                                    <img src="{{ asset('/storage/cover/' . $article->cover) }}" style="width: 80px"
                                        class="card-img-top img mb-3" alt="...">
                                @endif
                            </div>
                            <div class="col-12 w-75">
                                <div class="mb-3">
                                    <label for="content" class="form-label">content</label>
                                    <textarea name="content" id="content" class="form-control" cols="30" rows="3">{{ $article->content }}</textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tombol">
                    <button type="submit" class="btn btn-primary w-75">ADD ARTICLE</button>
                </div>
            </form>


        </div>

    </div>
@endsection
