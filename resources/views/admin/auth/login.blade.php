<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin | Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('../css/style-admin.css') }}?v=1.3">
</head>

<body>
    <div class="container-fluid min-vh-100 py-5" id="container-login">
        <div class="container">
            <div class="row row-cols-1 row-cols-lg-2 justify-content-center align-items-center g-2 flex-lg-row-reverse">
                <div class="col p-5">
                    <img src="../adminassets/img/auth/login.png" alt="" class="w-100">
                </div>
                <div class="col">
                    <h1>
                        Welcome to the Admin Dashboard
                    </h1>
                    <p>
                        Manage Kahasolusi’s company profile easily
                    </p>
                    <form action="{{ route('authenticate') }}" method="POST">
                        @csrf
                        <div class="my-4">
                            <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}"
                                placeholder="Email">
                            @if ($errors->has('email'))
                            <span class="text-danger">{{ $errors->first('email') }}</span>
                            @endif
                        </div>
                        <div class="mb-4">
                            <input type="password" class="form-control" id="password" name="password"
                                placeholder="Password">
                            @if ($errors->has('password'))
                            <span class="text-danger">{{ $errors->first('password') }}</span>
                            @endif
                        </div>
                        <button type="submit" class="btn-action-form px-5" value="login">Login</button>
                    </form>
                </div>
            </div>
        </div>

    </div>
    <footer id="footer-login" class="container p-4">
        <h6 class="m-0 text-center">
            Copyright © 2023 Company Profile
        </h6>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous">
    </script>
</body>

</html>