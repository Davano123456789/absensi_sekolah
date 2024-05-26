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
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        <div class="wrap-welcome">
            <div class="title-welcome">
                <h1>STUDENT DATA SMK ANTARTIKA</h1>
                <p>Check the list of student accounts at our school</p>
                <hr style="width: 20%;  height: 3px; border-radius:20px;">
            </div>
            <div class="gambar-admin">
                <img src="../images/student.png" class="img-fluid" alt="">
            </div>
        </div>
        <div class="text-end mt-4">
            <a href="studentData" class="btn btn-info">View Student</a>
        </div>
        <table>
            <thead>
                <tr>
                    <th>Username</th>
                    <th>Age</th>
                    <th>Phone</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($show as $item)
                    <tr>
                        <td>{{ $item->username }}</td>
                        <td>{{ $item->age }}</td>
                        <td>{{ $item->phone }}</td>
                        <td class="d-flex gap-4 action">
                            <a href="restoreStudent/{{ $item->id }}" class="text-info">Restore</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
