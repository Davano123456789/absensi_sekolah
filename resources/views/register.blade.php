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
            <div class="col-7">
                <div class="container">
                    <div class="">
                        @if ($errors->any())
                            <div class="alert alert-danger w-75 d-flex m-auto">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('message') }}
                            </div>
                        @endif
                    </div>
                    <div class="title">
                        <h3>Register Account</h3>
                    </div>
                    <form action="" method="POST">
                        @csrf
                        <div class="wrap-input mb-5">
                            <div class="w-75">
                                <div class="mb-3">
                                    <label for="username" class="form-label">Username</label>
                                    <input type="text" name="username" id="username" class="form-control mb-4">
                                </div>
                                <div class="mb-3">
                                    <label for="password" class="form-label">Password</label>
                                    <input type="password" name="password" id="password" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label for="age" class="form-label">Age</label>
                                    <input type="number" name="age" id="age" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label for="phone" class="form-label">Phone</label>
                                    <input type="number" name="phone" id="phone" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label for="address" class="form-label">Address</label>
                                    <input type="text" name="addres" id="addres" class="form-control">
                                </div>
                                <div class="">
                                    <label class="form-label">Role</label>
                                    <div class="d-flex gap-3">

                                        <div>
                                            <input type="checkbox" name="role_id" id="student" value="2">
                                            <label for="student">Student</label>
                                        </div>
                                        <div>
                                            <input type="checkbox" name="role_id" id="teacher" value="3">
                                            <label for="teacher">Teacher</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tombol">
                            <button type="submit">Log In Now</button>
                        </div>
                    </form>
                    <div class="des mt-2">
                        <p>
                            already have an account?
                            <a href="login" style="color: black">login here now</a>
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
