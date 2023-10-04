@extends('admin.admin-master')
@section('admin')


<div class="page-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">

                        <h4 class="card-title text-center">Hi {{ $userData->username }}, Lets change your password!</h4>

                        <div class="p-3">
                            <form class="form-horizontal mt-3" method="POST"
                                action="{{ route('admin.profile.passw-update') }}">
                                @csrf

                                <!-- Old pass -->
                                <div class=" mb-2 row">
                                    <label for="old_password" class="col-sm-2 ">Old Password</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" id="old_password" type="password"
                                            name="old_password" required autofocus autocomplete="current-password"
                                            placeholder="Password" />
                                    </div>
                                </div>
                                @error('password')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror

                                <!-- New pass -->
                                <div class="mb-2 row">
                                    <label for="new_password" class="col-sm-2">New password</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" id="new_password" type="password"
                                            name="new_password" required autofocus placeholder="New Password" />
                                    </div>
                                </div>
                                @error('new_password')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror

                                <!-- Repeat New Pass -->
                                <div class="mb-2 row">
                                    <label for="repeat_password" class="col-sm-2">Repeat Password</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" id="repeat_password" type="password" name="repeat_password"
                                            required placeholder="Repeat Password" />
                                    </div>
                                </div>
                                @error('email')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror

                                <div class="form-group text-left row mt-3 pt-1">
                                    <div class="col-12">
                                        <button class="btn btn-info waves-effect waves-light" type="submit">{{
                                            __('Change Password') }}
                                        </button>
                                    </div>
                                </div>

                            </form>
                            <!-- end form -->
                        </div>

                    </div>
                </div>
            </div> <!-- end col -->
        </div>
    </div>
</div>
</div>
</div>

@endsection