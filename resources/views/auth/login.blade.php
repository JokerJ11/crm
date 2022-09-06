<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>{{ config('app.name') }}</title>

    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css"
          integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog=="
          crossorigin="anonymous"/>

    <link href="{{ mix('css/app.css') }}" rel="stylesheet">

</head>
<body class="hold-transition login-page">

<div class="p-5 bg-image" style="
    background-image: url('https://mdbootstrap.com/img/new/textures/full/171.jpg');
    height: 300px;
    "></div>
<!-- Background image -->
    <!-- /.login-logo -->

    <!-- /.login-box-body -->
    <div class="card mx-4 mx-md-5 shadow-5-strong" style="
    margin-top: -100px;
    background: hsla(0, 0%, 100%, 0.8);
    backdrop-filter: blur(30px);
    ">
        <div class="card-body py-5 px-md-5">

            <div class="row d-flex justify-content-center">
                <div class="col-lg-6">
                    <h2 class="fw-bold mb-5">Sign up now</h2>
                {{-- <p class="login-box-msg">Sign in to start your session</p> --}}

                        <form method="post" action="{{ url('/login') }}">
                            @csrf

                            {{-- <div class="input-group mb-3">
                                <input type="email" name="email" value="{{ old('email') }}" placeholder="Email"
                                    class="form-control @error('email') is-invalid @enderror">
                                <div class="input-group-append">
                                    <div class="input-group-text"><span class="fas fa-envelope"></span></div>
                                </div>
                                @error('email')
                                <span class="error invalid-feedback">{{ $message }}</span>
                                @enderror
                            </div> --}}
                            <!-- Email input -->
                            <div class="form-outline mb-4">
                                <input type="email" name="email" value="{{ old('email') }}" placeholder="Email"
                                class="form-control @error('email') is-invalid @enderror" />
                                @error('email')
                                <span class="error invalid-feedback">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="form-outline mb-4">
                                <input type="password" name="password" placeholder="Password"
                                        class="form-control @error('password') is-invalid @enderror">
                                @error('password')
                                <span class="error invalid-feedback">{{ $message }}</span>
                                @enderror

                            </div>

                            <div class="row">
                                <div class="col-8">
                                    <div class="icheck-primary">
                                        <input type="checkbox" id="remember">
                                        <label for="remember">Remember Me</label>
                                    </div>
                                </div>

                                <div class="col-4">
                                    <button type="submit" class="btn btn-primary btn-block">Sign In</button>
                                </div>

                            </div>
                        </form>

                        <p class="mb-1">
                            <a href="{{ route('password.request') }}">I forgot my password</a>
                        </p>
                        <p class="mb-0">
                            <a href="{{ route('register') }}" class="text-center">Register a new membership</a>
                        </p>
                </div>
                
            </div>
            <!-- /.login-card-body -->
        </div>
    </div>
</div>

<!-- /.login-box -->

<script src="{{ mix('js/app.js') }}" defer></script>

</body>
</html>


{{-- <div class="card-body py-5 px-md-5">

    <div class="row d-flex justify-content-center">
        <div class="col-lg-8">
            <h2 class="fw-bold mb-5">Sign up now</h2>
            <form>
                <!-- 2 column grid layout with text inputs for the first and last names -->
                <div class="row">
                <div class="col-md-6 mb-4">
                    <div class="form-outline">
                    <input type="text" id="form3Example1" class="form-control" />
                    <label class="form-label" for="form3Example1">First name</label>
                    </div>
                </div>
                <div class="col-md-6 mb-4">
                    <div class="form-outline">
                    <input type="text" id="form3Example2" class="form-control" />
                    <label class="form-label" for="form3Example2">Last name</label>
                    </div>
                </div>
                </div>

                <!-- Email input -->
                <div class="form-outline mb-4">
                <input type="email" id="form3Example3" class="form-control" />
                <label class="form-label" for="form3Example3">Email address</label>
                </div>

                <!-- Password input -->
                <div class="form-outline mb-4">
                <input type="password" id="form3Example4" class="form-control" />
                <label class="form-label" for="form3Example4">Password</label>
                </div>

                <!-- Checkbox -->
                <div class="form-check d-flex justify-content-center mb-4">
                <input class="form-check-input me-2" type="checkbox" value="" id="form2Example33" checked />
                <label class="form-check-label" for="form2Example33">
                    Subscribe to our newsletter
                </label>
                </div>

                <!-- Submit button -->
                <button type="submit" class="btn btn-primary btn-block mb-4">
                Sign up
                </button>

                <!-- Register buttons -->
                <div class="text-center">
                <p>or sign up with:</p>
                <button type="button" class="btn btn-link btn-floating mx-1">
                    <i class="fab fa-facebook-f"></i>
                </button>

                <button type="button" class="btn btn-link btn-floating mx-1">
                    <i class="fab fa-google"></i>
                </button>

                <button type="button" class="btn btn-link btn-floating mx-1">
                    <i class="fab fa-twitter"></i>
                </button>

                <button type="button" class="btn btn-link btn-floating mx-1">
                    <i class="fab fa-github"></i>
                </button>
                </div>
            </form>
        </div>
    </div>
</div> --}}
