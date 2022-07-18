<!doctype html>
<html lang="en">

<head>
    <title>:: Lucid University :: Login</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta name="description" content="Lucid Bootstrap 4.1.1 Admin Template">
    <meta name="author" content="WrapTheme, design by: ThemeMakker.com">

    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <!-- VENDOR CSS -->
    <link rel="stylesheet" href="{{ asset('backend/assets/vendor/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/assets/vendor/font-awesome/css/font-awesome.min.css') }}">

    <!-- MAIN CSS -->
    <link rel="stylesheet" href="{{ asset('backend/assets/css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/assets/css/color_skins.css') }}">
</head>

<body class="theme-blue">
    <!-- WRAPPER -->
    <div id="wrapper">
        <div class="vertical-align-wrap">
            <div class="vertical-align-middle auth-main">
                <div class="auth-box">
                    <div class="top">
                        <img src="{{ asset('backend/assets/images/logo-white.svg') }}" alt="Lucid">
                    </div>
                    <div class="card">
                        <div class="header">
                            <p class="lead">Login to your account</p>
                        </div>
                        <div class="body">
                            <form class="form-auth-small" method="POST" action="{{ route('login') }}">
                                @csrf
                                {{-- <div class="form-group">
                                    <button class="btn btn-outline-secondary dropdown-toggle" type="button"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Login
                                        For</button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="javascript:void(0);">Admin</a>
                                        <a class="dropdown-item" href="javascript:void(0);">Professors</a>
                                        <a class="dropdown-item" href="javascript:void(0);">Student</a>
                                    </div>
                                </div> --}}
                                <div class="form-group">
                                    <label for="signin-email"
                                        class="control-label sr-only">{{ __('Email Address') }}</label>
                                    <input type="email" name="email"
                                        class="form-control @error('email') is-invalid @enderror" id="signin-email"
                                        value="{{ old('email') }}" placeholder="Email">
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="password" class="control-label sr-only">
                                        {{ __('Password') }}
                                    </label>
                                    <input type="password" name="password"
                                        class="form-control @error('password') is-invalid @enderror" id="password"
                                        placeholder="Password">
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group clearfix">
                                    <label class="fancy-checkbox element-left">
                                        <input type="checkbox">
                                        <span> {{ __('Remember Me') }}</span>
                                    </label>
                                </div>
                                <button type="submit" class="btn btn-primary btn-lg btn-block">
                                    {{ __('LOGIN') }}</button>
                                <div class="bottom">
                                    <span class="helper-text m-b-10"><i class="fa fa-lock"></i> <a
                                            href="page-forgot-password.html">{{ __('Forgot password?') }}</a></span>
                                    <span>{{ __('Don\'t have an account?') }} <a
                                            href="{{ route('register') }}">{{ __('Register') }}</a></span>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END WRAPPER -->

    <!-- Javascript -->
    <script src="{{ asset('backend/assets/bundles/libscripts.bundle.js') }}"></script>
    <script src="{{ asset('backend/assets/bundles/vendorscripts.bundle.js') }}"></script>

    <script src="{{ asset('backend/assets/bundles/mainscripts.bundle.js') }}"></script>
</body>

</html>
