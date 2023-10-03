<!doctype html>
<html lang="en">

    <head>
        
        <meta charset="utf-8" />
        <title>Register | Admin</title>
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
                                <a href="{{ route('/') }}" class="auth-logo">
                                    <img src={{ asset('backend/assets/images/logo-teal.png') }} height="80" class="logo-dark mx-auto" alt="">
                                    <img src={{ asset('backend/assets/images/logo-light.png') }} height="80" class="logo-light mx-auto" alt="">
                                </a>
                            </div>
                        </div>
    
                        <h4 class="text-muted text-center font-size-18"><b>Register</b></h4>
    
                        <div class="p-3">
                            <form class="form-horizontal mt-3" method="POST" action="{{ route('register') }}">
                                @csrf

                                <!-- Name -->
                                <div class="form-group mb-3 row">
                                    <div class="col-12">
                                        <input class="form-control" id="name" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" placeholder="Name"/>
                                    </div>
                                </div>
                                @error('name')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror

                                <!-- Username -->
                                <div class="form-group mb-3 row">
                                    <div class="col-12">
                                        <input class="form-control" id="username"type="text" name="username" :value="old('username')" required autofocus autocomplete="username" placeholder="Username" />
                                    </div>
                                </div>
                                @error('username')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror

                                <!-- Email Address -->
                                <div class="form-group mb-3 row">
                                    <div class="col-12">
                                        <input class="form-control" id="email" type="email" name="email" :value="old('email')" required autocomplete="email" placeholder="Email" />
                                    </div>
                                </div>
                                @error('email')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror

                                <!-- Password -->
                                <div class="form-group mb-3 row">
                                    <div class="col-12">
                                        <input class="form-control" id="password" type="password" name="password" required autocomplete="new-password" placeholder="Password">
                                    </div>
                                </div>
                                @error('password')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror

                                <!-- Confirm Password -->
                                <div class="form-group mb-3 row">
                                    <div class="col-12">
                                        <input class="form-control" id="password_confirmation" type="password" name="password_confirmation" required autocomplete="new-password" placeholder="Confirm Password">
                                    </div>
                                </div>
                                @error('password_confirmation')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror

                                <div class="form-group text-center row mt-3 pt-1">
                                    <div class="col-12">
                                        <button class="btn btn-info w-100 waves-effect waves-light" type="submit">{{ __('Register') }}
                                        </button>
                                    </div>
                                </div>
    
                                <div class="form-group mt-2 mb-0 row">
                                    <div class="col-12 mt-3 text-center">
                                        <a class="text-muted" href="{{ route('login') }}">
                                            {{ __('Already registered?') }}
                                        </a>
                                    </div>
                                </div>
                            </form>
                            <!-- end form -->
                        </div>
                    </div>
                    <!-- end cardbody -->
                </div>
                <!-- end card -->
            </div>
            <!-- end container -->
        </div>
        <!-- end -->
        

        <!-- JAVASCRIPT -->
        <script src={{ asset('backend/assets/libs/jquery/jquery.min.js') }} ></script>
        <script src={{ asset('backend/assets/libs/bootstrap/js/bootstrap.bundle.min.js') }} ></script>
        <script src={{ asset('backend/assets/libs/metismenu/metisMenu.min.js') }} ></script>
        <script src={{ asset('backend/assets/libs/simplebar/simplebar.min.js') }} ></script>
        <script src={{ asset('backend/assets/libs/node-waves/waves.min.js') }} ></script>

        <script src={{ asset('backend/assets/js/app.js') }} ></script>

    </body>
</html>
