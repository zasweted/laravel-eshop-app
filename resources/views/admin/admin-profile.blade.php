@extends('admin.admin-master')
@section('admin')

<div class="page-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3">
                <div class="card card-body align-items-center">
                    <img class="img-thumbnail rounded-circle avatar-xl" style="object-fit: cover;" src="{{ isset($userData->profile_image) ? asset('/uploads/admin_profile_images/' . $userData->profile_image) : asset('/uploads/no_image.jpg') }}" alt="Card image cap">
                        <h4 class="card-title mt-2">Name: {{ $userData->name }} </h4>
                        <h4 class="card-title mt-2">Username: {{ $userData->username }}</h4>
                        <h4 class="card-title mt-2">Email: {{ $userData->email }}</h4>
                    <a href="{{ route('admin.profile.edit') }}" class="btn btn-warning waves-effect waves-light mt-4">Edit Profile</a>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>

@endsection