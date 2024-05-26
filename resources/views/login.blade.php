<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />

    <title>Hello, world!</title>
    <link rel="stylesheet" href="/css/style.css" />
</head>

<body>
    <div class="section-login">
        <div class="row">
            <div class="col-7" style="margin-top: 7rem">
                <div class="container">
                    <div class="">

                        @if (session('status'))
                            <div class="alert alert-danger">
                                {{ session('message') }}
                            </div>
                        @endif
                    </div>
                    <div class="title">
                        <h2>Explore the world to experience the beauty of nature</h2>
                    </div>
                    <form action="" method="POST">
                        @csrf
                        <div class="wrap-input mb-5">
                            <div class="w-75">
                                <label for="username" class="form-label">Username</label>
                                <input type="text" name="username" id="username" class="form-control mb-4">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" name="password" id="password" class="form-control">
                            </div>
                        </div>
                        <div class="tombol">
                            <button type="submit">Log In Now</button>
                        </div>
                    </form>
                    <div class="des mt-2">
                        <p>
                            don't have an account yet?
                            <a href="register" style="color: black">Register an account now here</a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-5">
                <div class="bg-image"></div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>
