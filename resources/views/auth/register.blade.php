<html lang="zxx">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Fashi Template">
    <meta name="keywords" content="Fashi, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Login </title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,500,600,700,800,900&display=swap"
        rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href={{asset('css/bootstrap.min.css')}} type="text/css">
    <link rel="stylesheet" href={{asset('css/font-awesome.min.css')}} type="text/css">
    <link rel="stylesheet" href={{asset('css/themify-icons.css')}} type="text/css">
    <link rel="stylesheet" href={{asset('css/elegant-icons.css')}} type="text/css">
    <link rel="stylesheet" href={{asset('css/owl.carousel.min.css')}} type="text/css">
    <link rel="stylesheet" href={{asset('css/nice-select.css')}} type="text/css">
    <link rel="stylesheet" href={{asset('css/jquery-ui.min.css')}} type="text/css">
    <link rel="stylesheet" href={{asset('css/slicknav.min.css')}} type="text/css">
    <link rel="stylesheet" href={{asset('css/style.css')}} type="text/css">
</head>
<body>

    <!-- Register Section Begin -->
    <div class="register-login-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="login-form">
                        <h2>Login</h2>
                        <form method="POST" action="{{ route('register') }}">
                            @csrf
                            <div class="group-input">
                                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address *') }}</label>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                @error('email')
                                    <span class="invalid-feedback" role="alert"> <br>
                                        <strong>{{ $message }}</strong> <br>
                                    </span>
                                @enderror
                            </div>
                            <div class="group-input">
                                <label for="password" class="col-md-4 col-form-label text-center">{{ __('Password *') }}</label>
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                                    name="password" required autocomplete="current-password">
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                            </div>
                            <div class="group-input">
                                <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password ') }}</label>
                                <input id="password-confirm" type="password" class="form-control"
                                    name="password_confirmation" required autocomplete="new-password">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <button type="submit" class="fadeIn fourth site-btn login-btn">
                                {{ __('Login') }}
                            </button>
                        </form>
                        <div class="switch-login">
                            <a href="{{ route('login') }}" class="or-login"> Login </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src={{asset('js/jquery-3.3.1.min.js')}}></script>
    <script src={{asset('js/bootstrap.min.js')}}></script>
    <script src={{asset('js/jquery-ui.min.js')}}></script>
    <script src={{asset('js/jquery.countdown.min.js')}}></script>
    <script src={{asset('js/jquery.nice-select.min.js')}}></script>
    <script src={{asset('js/jquery.zoom.min.js')}}></script>
    <script src={{asset('js/jquery.dd.min.js')}}></script>
    <script src={{asset('js/jquery.slicknav.js')}}></script>
    <script src={{asset('js/owl.carousel.min.js')}}></script>
    <script src={{asset('js/main.js')}}></script>
</body>
</html>


{{-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}
