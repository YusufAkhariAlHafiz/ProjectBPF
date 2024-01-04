<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('template/auth/style.css') }}">
    <title>Login</title>
</head>

<body style="background-image: url({{ asset('template/auth/images/pcr.jpg') }})">

    <!----------------------- Main Container -------------------------->

    <div class="container d-flex justify-content-center align-items-center min-vh-100">

        <!----------------------- Login Container -------------------------->

        <div class="row border rounded-5 p-3 bg-white shadow box-area">

            <!--------------------------- Left Box ----------------------------->

            <div class="col-md-6 rounded-4 d-flex justify-content-center align-items-center flex-column left-box"
                style="background: #17c1e8;">
                <div class="featured-image mb-3">
                    <img src="{{ asset('template/auth/images/logo.png') }}" class="img-fluid" style="width: 250px;">
                </div>
                <p class="text-white fs-4" style="font-family: 'poppins', Courier, monospace; font-weight: 600;">Sistem
                    Informasi Kegiatan</p>
                <small class="text-white text-wrap text-center"
                    style="width: 17rem;font-family: 'poppins', Courier, monospace;">Selamat Mengelola Kegiatan Anda
                    dengan Lebih Efisien!</small>
            </div>

            <!-------------------- ------ Right Box ---------------------------->

            <div class="col-md-6 right-box">
                <div class="row align-items-center">
                    <div class="header-text mb-4">
                        <h2>Hello,Again</h2>
                        <p>We are happy to have you back.</p>
                    </div>
                    <form action="{{route('login')}}" method="post">
                        @csrf
                        <div class="input-group mb-3">
                            <input name="email" type="text" class="form-control form-control-lg bg-light fs-6"
                                placeholder="Email address">
                        </div>
                        <div class="input-group mb-1">
                            <input name="password" type="password" class="form-control form-control-lg bg-light fs-6"
                                placeholder="Password">
                        </div>
                        <div class="input-group mb-5 d-flex justify-content-between">

                        </div>
                        <div class="input-group mb-3">
                            <button type="submit" class="btn btn-lg w-100 fs-6" style="background: #17c1e8; color:white">Login</button>
                        </div>
                    </form>
                    <div class="input-group mb-3">
                        <button class="btn btn-lg btn-light w-100 fs-6"><img
                                src="{{ asset('template/auth/images/google.png') }}" style="width:20px" height="20px"
                                class="me-2"><small>Sign In with Google</small></button>
                    </div>
                    <!-- <div class="input-group mb-3">
                    <button class="btn btn-lg btn-light w-100 fs-6"><img src="{{ asset('template/auth/images/facebook.png') }}" style="width:20px" class="me-2"><small>Sign In with Facebook</small></button>
                </div> -->
                </div>
            </div>

        </div>
    </div>

</body>

</html>
