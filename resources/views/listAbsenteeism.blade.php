@extends('layout.main')

@section('content')
    <style>
        .aktif-hadir {
            background-color: rgb(212, 231, 255)
        }

        .aktif-izin {
            background-color: rgb(249, 255, 199)
        }

        .aktif-alpa {
            background-color: rgb(255, 204, 204)
        }
    </style>
    <link rel="stylesheet" href="/css/detailTeacher.css">
    <div class="col-10" style="padding: 2rem;background-color: rgb(245, 245, 245);">
        <div class="atas ">
            <h4 class="mb-3 mt-3">List Absenteeism</h4>
        </div>
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <div class="row">
            <div class="col-12" style="padding-right: 2rem">
                <div class="wrap-data" style="padding: 1rem 3rem">
                    <div class="link-data">
                        <a href="" class="active-data">Data absensi user</a>
                        <a href="listArticleUser">Data artikel user</a>
                    </div>
                    <table class="table mt-4 ">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Username</th>
                                <th>Age</th>
                                <th>Phone</th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($absen as $item)
                                <tr
                                    class="{{ $item->attendance_status == 'alpha' ? 'aktif-alpa' : ($item->attendance_status == 'permission' ? 'aktif-izin' : ($item->attendance_status == 'present' ? 'aktif-hadir' : '')) }}">
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
