@extends('layout.main')

@section('content')
    <link rel="stylesheet" href="/css/detailTeacher.css">
    <div class="col-10" style="padding: 2rem;background-color: rgb(245, 245, 245);">
        <div class="atas ">
            <a href="/studentData"><i class="bi bi-arrow-left" style="font-size: 2rem;color:black;"></i></a>
            <h4 class="mb-3 mt-3">Teacher Detail</h4>
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
                        <a href="" class="active-data">Data absensi user</a>
                        <a href="">Data artikel user</a>
                    </div>
                    <table class="table mt-4 ">
                        <thead>
                            <tr>
                                <th>Username</th>
                                <th>Age</th>
                                <th>Phone</th>

                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Davano alif</td>
                                <td>22</td>
                                <td>123456789</td>

                            </tr>
                            <tr>
                                <td>Davano alif</td>
                                <td>22</td>
                                <td>123456789</td>

                            </tr>
                            <tr>
                                <td>Davano alif</td>
                                <td>22</td>
                                <td>123456789</td>

                            </tr>
                            <tr>
                                <td>Davano alif</td>
                                <td>22</td>
                                <td>123456789</td>

                            </tr>
                            <tr>
                                <td>Davano alif</td>
                                <td>22</td>
                                <td>123456789</td>

                            </tr>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
