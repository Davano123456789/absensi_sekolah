<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<body>

    <div class="row">
        <div class="col-2">
            <div class="wrap-left">
                <div class="logo">
                    <img src="../images/logo.png" class="img-fluid" alt="">
                    <h6>SMA ANTARTIKA</h6>
                </div>
                <div class="wrap-link">
                    @if (Auth::user()->role_id == 1)
                        <div class="link {{ request()->route()->uri() == 'dashboard' ? 'active' : '' }}">
                            <i class="fa-solid fa-chart-line"></i>
                            <a href="dashboard">Dashboard</a>
                        </div>

                        <div
                            class="link {{ request()->is('studentData') || request()->is('detailStudent/*') || request()->is('showDeleted') ? 'active' : '' }}">
                            <i class="bi bi-people"></i>
                            <a href="/studentData">Student Data</a>
                        </div>
                        <div
                            class="link {{ request()->is('teacherData') || request()->is('detailTeacher/*') ? 'active' : '' }}">
                            <i class="bi bi-person-lines-fill"></i>
                            <a href="/teacherData">Teacher Data</a>
                        </div>
                        <div
                            class="link {{ request()->is('artikel') || request()->is('addArticle') || request()->is('listArticle') ? 'active' : '' }}">
                            <i class="bi bi-journal-text"></i>
                            <a href="/artikel">Article</a>
                        </div>
                        <div class="link {{ request()->is('listAbsenteeism') ? 'active' : '' }}">
                            <i class="bi bi-journal-text"></i>
                            <a href="/listAbsenteeism">Absenteeism</a>
                        </div>
                        <div class="link">
                            <i class="bi bi-box-arrow-in-left"></i>
                            <a href="logout">Logout</a>
                        </div>
                    @else
                        <div
                            class="link {{ request()->is('profile') || request()->is('listArticleUser') ? 'active' : '' }}">
                            <i class="bi bi-person-fill"></i>
                            <a href="/profile">Profile</a>
                        </div>
                        <div
                            class="link {{ request()->is('artikel') || request()->is('showArticle/*') ? 'active' : '' }}">
                            <i class="bi bi-journal-text"></i>
                            <a href="/artikel">Article</a>
                        </div>
                        <div class="link {{ request()->is('absenteeism') ? 'active' : '' }}">
                            <i class="bi bi-card-checklist"></i>
                            <a href="/absenteeism">Absenteeism</a>
                        </div>
                        <div class="link">
                            <i class="bi bi-box-arrow-in-left"></i>
                            <a href="/logout">Logout</a>
                        </div>
                    @endif

                </div>
            </div>
        </div>

        @yield('content')
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

</body>

</html>
