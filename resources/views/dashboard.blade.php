@extends('layout.main')

@section('content')
    <div class="col-10" style="padding: 0 3rem;background-color: rgb(245, 245, 245);">
        <div class="wrap-welcome">
            <div class="title-welcome">
                <h1>Welcome Admin</h1>
                <p>ayo update dan cek semua data sekolah saat ini apakah <br> banyak yang sudah absen</p>
                <hr style="width: 20%;  height: 3px; border-radius:20px;">
            </div>
            <div class="gambar-admin">
                <img src="../images/admin.png" class="img-fluid" alt="">
            </div>
        </div>
        <div class="row">
            <div class="col-4">
                <div class="wrap-box">
                    <div class="wrap-icon">
                        <i class="fa-solid fa-chart-line"></i>
                    </div>
                    <div class="fill-icon">
                        <h3>Data Siswa</h3>
                        <p>{{ $studentCount }}</p>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="wrap-box" style="background-color: #700070">
                    <div class="wrap-icon">
                        <i class="bi bi-person-lines-fill"></i>
                    </div>
                    <div class="fill-icon">
                        <h3>Data Guru</h3>
                        <p>{{ $teacherCount }}</p>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="wrap-box" style="background-color: #4F3E9A">
                    <div class="wrap-icon">
                        <i class="bi bi-clipboard-data-fill"></i>
                    </div>
                    <div class="fill-icon">
                        <h3>Data Absen</h3>
                        <p>20</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
