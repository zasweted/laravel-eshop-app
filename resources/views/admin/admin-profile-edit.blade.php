@extends('admin.admin-master')
@section('admin')


<div class="page-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">

                        <h4 class="card-title text-center">Hi {{ $userData->username }}, Lets edit your profile !</h4>

                        <div class="p-3">
                            <form class="form-horizontal mt-3" method="POST"
                                action="{{ route('admin.profile.update') }}" enctype="multipart/form-data">
                                @csrf

                                <!-- Name -->
                                <div class=" mb-2 row">
                                    <label for="name" class="col-sm-2 ">Name</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" id="name" type="text" name="name"
                                            value="{{ $userData->name }}" required autofocus autocomplete="name"
                                            placeholder="Name" />
                                    </div>
                                </div>
                                @error('name')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror

                                <!-- Username -->
                                <div class="mb-2 row">
                                    <label for="username" class="col-sm-2">Username</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" id="username" type="text" name="username"
                                            value="{{ $userData->username }}" required autofocus autocomplete="username"
                                            placeholder="Username" />
                                    </div>
                                </div>
                                @error('username')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror

                                <!-- Email Address -->
                                <div class="mb-2 row">
                                    <label for="email" class="col-sm-2">Email</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" id="email" type="email" name="email"
                                            value="{{ $userData->email }}" required autocomplete="email"
                                            placeholder="Email" />
                                    </div>
                                </div>
                                @error('email')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror

                                <!-- Profile Image -->

                                <div class="mb-2 row">
                                    <label for="profile_image" class="col-sm-2">Profile Image</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" id="profile_image" type="file"
                                            name="profile_image" />
                                        <img id="showProfileImage" class="mt-2" style="object-fit: cover; width:80px; height:80px;" src="{{ isset($userData->profile_image) ? asset('/uploads/admin_profile_images/' . $userData->profile_image) : asset('/uploads/no_image.jpg') }}"
                                            alt="Card image cap">
                                    </div>
                                </div>
                                @error('profile_image')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror

                                <div class="form-group text-left row mt-3 pt-1">
                                    <div class="col-12">
                                        <button class="btn btn-info waves-effect waves-light" type="submit">{{
                                            __('Update changes') }}
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

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $('#profile_image').change(function(e){
            let reader = new FileReader();
            reader.onload = function(e){
                $('#showProfileImage').attr('src', e.target.result);
            }
            reader.readAsDataURL(e.target.files['0']);
        });
    });
</script>

@endsection