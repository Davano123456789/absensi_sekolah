@extends('layout.main')

@section('content')
    <link rel="stylesheet" href="/css/detailTeacher.css">
    <div class="col-10" style="padding: 2rem;background-color: rgb(245, 245, 245);">
        <div class="atas ">
            @if (Auth::user()->role_id == 3)
                <h4 class="mb-3 mt-3">Teacher Profile</h4>
            @else
                <h4 class="mb-3 mt-3">Student Profile</h4>
            @endif
        </div>
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <div class="row">
            <div class="col-3">
                <div class="wrap-profile" style="height: 83vh">
                    <div class="img-profile">
                        <img src="/images/user.jpg" class="img-fluid" alt="">
                    </div>
                    <div class="name-teacher">
                        <h5>{{ $detail->username }}</h5>
                    </div>
                    <div class="wrap-fil">
                        <p>Phone</p>
                        <h6>{{ $detail->phone }}</h6>
                    </div>
                    <div class="wrap-fil mt-4">
                        <p>Age</p>
                        <h6>{{ $detail->age }}</h6>
                    </div>
                    <div class="wrap-fil mt-4">
                        <p>Address</p>
                        <h6>{{ $detail->addres }}</h6>
                    </div>
                    <div class="mt-4">
                        <a href="edit-profile" class="btn btn-primary w-100">Edit Profile</a>
                    </div>
                </div>
            </div>

            <div class="col-9" style="padding-right: 2rem">
                <div class="wrap-data" style="padding: 1rem 3rem">
                    <div class="link-data">
                        <a href="" class="active-data">Data absensi user</a>
                        @if (Auth::user()->role_id == 3)
                            <a href="listArticleUser">Data artikel user</a>
                        @endif
                    </div>
                    <table class="table mt-4 ">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Username</th>
                                <th>Status</th>
                                <th>Information</th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($absen as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->user->username }}</td>
                                    <td>{{ $item->attendance_status }}</td>
                                    <td>{{ $item->information }}</td>

                                </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
