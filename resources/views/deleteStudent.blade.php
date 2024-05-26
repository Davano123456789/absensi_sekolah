@extends('layout.main')

@section('content')
    <style>
        table {
            width: 100%;
            margin-top: 1rem;
            border-collapse: collapse;
        }

        th,
        td {
            padding: 8px;
            text-align: left;
            border: 1px solid #acacac;
        }

        tr:nth-child(even) {
            background-color: hsl(215, 100%, 89%);
        }

        tr:nth-child(odd) {
            background-color: #ffffff;
        }

        .action a {
            text-decoration: none;
            font-weight: 500;

        }
    </style>
    <div class="col-10" style="padding-right: 3rem">
        <div class="wrap-welcome">
            <div class="title-welcome">
                <h1>
                    @if ($detail->role_id == 2)
                        STUDENT
                    @else
                        TEACHER
                    @endif DATA SMK ANTARTIKA
                </h1>
                <p>Check the list of student accounts at our school</p>
                <hr style="width: 20%;  height: 3px; border-radius:20px;">
            </div>
            <div class="gambar-admin">
                <img src="../images/student.png" class="img-fluid" alt="">
            </div>
        </div>
        <div class="text-end mt-4">
            <a href="" class="btn btn-danger">View ban user</a>
        </div>
        <div>

            <h4>
                Apakah yakin untuk menghapus user : {{ $detail->username }}
            </h4>
            <div class="mt-4">
                <a href="/studentData" class="btn btn-info me-5">Back</a>
                <a href="/deletedStudent/{{ $detail->id }}" class="btn btn-danger">Delete Now</a>
            </div>
        </div>
    </div>
@endsection
