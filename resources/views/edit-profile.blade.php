@extends('layout.main')

@section('content')
    <link rel="stylesheet" href="/css/detailTeacher.css">
    <div class="col-10" style="padding: 2rem;background-color: rgb(245, 245, 245);">
        <div class="atas ">
            <a href="/studentData"><i class="bi bi-arrow-left" style="font-size: 2rem;color:black;"></i></a>
            <h4 class="mb-3 mt-3">Edit Profile</h4>
        </div>
        <div class="row">
            <div class="col-3">
                <div class="wrap-profile">
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
                </div>
            </div>
            <div class="col-9" style="padding-right: 2rem">
                <div class="wrap-data" style="padding: 1rem 3rem">
                    <div class="link-data">
                        <a href="" class="active-data">Edit Profil</a>
                    </div>
                    <div class="mt-5">
                        <form action="edit-profile" method="POST">
                            @csrf
                            @method('put')
                            <div class="wrap-input mb-5">
                                <div class="w-100">
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="mb-3">
                                                <label for="username" class="form-label">Username</label>
                                                <input type="text" name="username" value="{{ $detail->username }}"
                                                    id="username" class="form-control mb-4">
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="mb-3">
                                                <label for="age" class="form-label">Age</label>
                                                <input type="number" name="age" value="{{ $detail->age }}"
                                                    id="age" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="mb-3">
                                                <label for="phone" class="form-label">Phone</label>
                                                <input type="number" value="{{ $detail->phone }}" name="phone"
                                                    id="phone" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="mb-3">
                                                <label for="address" class="form-label">Address</label>
                                                <input type="text" name="addres" value="{{ $detail->addres }}"
                                                    id="address" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tombol">
                                <button type="submit" class="btn btn-primary w-100">UPDATE NOW</button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
