<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

    <title>Sipeka - Sistem Pendeteksi Kesepian</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
                <div class="card border-0 rounded-3 my-5">
                    <div class="card-body p-4 p-sm-5">
                        <div class="text-center mb-2">
                            <img src="{{ asset('assets/images/logo/logo.svg') }}" width="120px" alt="Sipeka Logo">
                        </div>
                        <h5 class="card-title text-center mb-5 fw-light fs-5"><b class="text-primary">Si</b>stem
                            <b class="text-primary">Pe</b>ndeteksi
                            <b class="text-primary">K</b>esepi<b class="text-primary">a</b>n
                        </h5>
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="form-floating mb-3">
                                <input type="email" class="form-control @error('email') is-invalid @enderror"
                                    id="floatingInput" name="email" placeholder="name@example.com"
                                    value="{{ old('email') }}" required autocomplete="email" autofocus>
                                <label for="floatingInput">Email address</label>
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="form-floating mb-3">
                                <input type="password" @error('password') is-invalid @enderror name="password"
                                    class="form-control" id="floatingPassword" placeholder="Password">
                                <label for="floatingPassword">Password</label>
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-6 offset-md-4">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{
                                            old('remember') ? 'checked' : '' }}>

                                        <label class="form-check-label" for="remember">
                                            {{ __('Remember Me') }}
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="d-grid">
                                <button class="btn btn-primary btn-login text-uppercase fw-bold" type="submit">Sign
                                    in</button>
                            </div>
                            <hr class="my-4">

                            <div class="text-center my-3">
                                <p class="text-muted
                                ">Belum punya akun? <a href="{{ route('register') }}">Daftar</a></p>
                            </div>
                        </form>

                        {{-- copyright fixed on bottom --}}
                        <div class="text-center mt-5">
                            <p class="text-muted
                            ">© 2023 Sipeka - Beta Testing</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</body>

</html>