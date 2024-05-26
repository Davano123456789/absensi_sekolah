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

            <div class="mt-5">

                <h4>
                    Apakah yakin untuk menghapus Article : {{ $detail->title }}
                </h4>
                <div class="mt-4">
                    <a href="/studentData" class="btn btn-info me-5">Back</a>
                    <a href="/deletedArticle/{{ $detail->id }}" class="btn btn-danger">Delete Now</a>
                </div>
            </div>
        </div>
    </div>
@endsection
