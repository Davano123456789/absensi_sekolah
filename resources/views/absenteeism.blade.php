@extends('layout.main')

@section('content')
    <div class="col-10" style="padding-right: 3rem">

        <div class="wrap-welcome">
            <div class="title-welcome">
                <h1>Absenteeism Articles Page</h1>
                <p>Let's be absent today</p>
                <hr style="width: 20%;  height: 3px; border-radius:20px;">
            </div>
            <div class="gambar-admin">
                <img src="../images/admin.png" class="img-fluid" alt="">
            </div>
        </div>
        @if (session('success'))
            <div class="alert alert-success w-75">
                {{ session('success') }}
            </div>
        @endif
        @if (session('error'))
            <div class="alert alert-danger w-75">
                {{ session('error') }}
            </div>
        @endif
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
                <form action="addAbsen" method="POST">
                    @csrf
                    <div class="wrap-input mb-2">
                        <div class="w-100">
                            <div class="row">
                                <div class="col-6">
                                    <div class="mb-3">
                                        <label for="attendance_status" class="form-label">Status</label>
                                        <select name="attendance_status" id="attendance_status" class="form-control mb-4">
                                            <option value="present">Present</option>
                                            <option value="alpha">Alpha</option>
                                            <option value="permission">Permission</option>
                                        </select>
                                    </div>

                                </div>
                                <div class="col-6">
                                    <div class="mb-3">
                                        <label for="information" class="form-label">Information</label>
                                        <input type="text" class="form-control" name="information" id="information">
                                    </div>

                                </div>



                            </div>
                        </div>
                    </div>
                    <div class="tombol">
                        <button type="submit" class="btn btn-primary w-100">ABSENTEEISM</button>
                    </div>
                </form>

            </div>

        </div>
    </div>
@endsection
