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
            <div class="div mt-4 text-end">
                <a href="/artikel" class="btn btn-primary">
                    VIEW ALL ARTICLE
                </a>
            </div>
            @if ($errors->any())
                <div class="alert alert-danger w-75 ">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div class="mt-2">
                <form action="addArticle" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="wrap-input mb-2">
                        <div class="w-100">
                            <div class="row">
                                <div class="col-6">
                                    <div class="mb-3">
                                        <label for="title" class="form-label">Title</label>
                                        <input type="text" name="title" id="title" class="form-control mb-4">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="mb-3">
                                        <label for="image" class="form-label">Image</label>
                                        <input type="file" name="image" id="image" class="form-control">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="mb-3">
                                        <label for="content" class="form-label">content</label>
                                        <textarea name="content" id="content" class="form-control" cols="30" rows="3"></textarea>

                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>
                    <div class="tombol">
                        <button type="submit" class="btn btn-primary w-100">ADD ARTICLE</button>
                    </div>
                </form>

            </div>

        </div>
    </div>
@endsection
