<!doctype html>
<html lang="en">

    <head>
        
        <meta charset="utf-8" />
        <title>Login | Admin</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="Themesdesign" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href={{ asset('backend/assets/images/favicon.ico') }}>

        <!-- Bootstrap Css -->
        <link href={{ asset('backend/assets/css/bootstrap.min.css') }} id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href={{ asset('backend/assets/css/icons.min.css') }} rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href={{ asset('backend/assets/css/app.min.css') }} id="app-style" rel="stylesheet" type="text/css" />

    </head>

    <body class="auth-body-bg">
        <div></div>
        <div class="wrapper-page">
            <div class="container-fluid p-0">
                <div class="card">
                    <div class="card-body">

                        <div class="text-center mt-4">
                            <div class="mb-3">
                                <a href="/" class="auth-logo">
                                    <img src={{ asset('backend/assets/images/logo-teal.png') }} height="80" class="logo-dark mx-auto" alt="">
                                    <img src={{ asset('backend/assets/images/logo-light.png') }} height="80" class="logo-light mx-auto" alt="">
                                </a>
                            </div>
                        </div>
    
                        <h4 class="text-muted text-center font-size-18"><b>Sign In</b></h4>
    
                        <div class="p-3">
                            <form class="form-horizontal mt-3" method="POST" action="{{ route('login') }}">
                                    @csrf
                                <!-- Username -->
                                <div class="form-group mb-3 row">
                                    <div class="col-12">
                                        <input class="form-control" id="username" type="text" name="username" :value="old('username')" required autofocus autocomplete="username" placeholder="Username">
                                    </div>
                                </div>
                                @error('username')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                                <!-- Password -->
                                <div class="form-group mb-3 row">
                                    <div class="col-12">
                                        <input class="form-control" input id="password" class="block mt-1 w-full"
                                        type="password"
                                        name="password"
                                        required autocomplete="current-password" placeholder="Password">
                                    </div>
                                </div>
                                @error('password')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                                <!-- Remember Me -->
                                <div class="block mt-4">
                                    <label for="remember_me" class="inline-flex items-center">
                                        <input id="remember_me" type="checkbox" class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800" name="remember">
                                        <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Remember me') }}</span>
                                    </label>
                                </div>
                        
                                <div class="form-group mb-3 text-center row mt-3 pt-1">
                                    <div class="col-12">
                                        <button class="btn btn-info w-100 waves-effect waves-light" type="submit">{{ __('Log in') }}</button>
                                    </div>
                                </div>

                                <div class="form-group mb-0 row mt-2">
                                    @if (Route::has('password.request'))
                                        <div class="col-sm-7 mt-3">
                                            <a href="{{ route('password.request') }}" class="text-muted"><i class="mdi mdi-lock"></i> {{ __('Forgot your password?') }}</a>
                                        </div>
                                    @endif
                                    <div class="col-sm-5 mt-3">
                                        <a href="{{ route('register') }}" class="text-muted"><i class="mdi mdi-account-circle"></i> Create an account</a>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!-- end -->
                    </div>
                    <!-- end cardbody -->
                </div>
                <!-- end card -->
            </div>
            <!-- end container -->
        </div>
        <!-- end -->

        <!-- JAVASCRIPT -->
        <script src={{ asset('backend/assets/libs/jquery/jquery.min.js') }}></script>
        <script src={{ asset('backend/assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}></script>
        <script src={{ asset('backend/assets/libs/metismenu/metisMenu.min.js') }}></script>
        <script src={{ asset('backend/assets/libs/simplebar/simplebar.min.js') }}></script>
        <script src={{ asset('backend/assets/libs/node-waves/waves.min.js') }}></script>

        <script src={{ asset('backend/assets/js/app.js') }}></script>

    </body>
</html>
