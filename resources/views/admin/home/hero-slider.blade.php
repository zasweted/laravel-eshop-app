@extends('admin.admin-master')
@section('admin')


<div class="page-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">

                        <h4 class="card-title text-center">Hero Slider Edit page!</h4>

                        <div class="p-3">
                            
                            <form class="form-horizontal mt-3" method="POST"
                                action="{{ route('home.hero-slider-update') }}" enctype="multipart/form-data">
                                @csrf

                                <!-- Title -->
                                <div class=" mb-2 row">
                                    <label for="hero_slider_title" class="col-sm-2 ">Title</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" id="hero_slider_title" type="text" name="hero_slider_title"
                                            value="{{ $heroSliderData->hero_slider_title }}" required
                                            placeholder="Title" />
                                    </div>
                                </div>
                                @error('title')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror

                                <!-- Short description -->
                                <div class="mb-2 row">
                                    <label for="hero_slider_short_desc" class="col-sm-2">Short Description</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" id="hero_slider_short_desc" type="text" name="hero_slider_short_desc"
                                            value="{{ $heroSliderData->hero_slider_short_desc }}" required placeholder="Short Description" />
                                    </div>
                                </div>
                                @error('hero_slider_short_desc')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror

                                <!-- Hero Slide Image -->

                                <div class="mb-2 row">
                                    <label for="hero_image" class="col-sm-2">Hero Slide Image</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" id="hero_image" type="file"
                                            name="hero_slider_image" required />
                                        <img id="showHeroImage" class="mt-2" style="object-fit: cover; width:80px; height:80px;" src="{{ isset($heroSliderData->hero_slider_image) ? asset('/uploads/hero_slider/' . $heroSliderData->hero_slider_image) : asset('/uploads/no_image.jpg') }}"
                                            alt="Hero Slide Image">
                                    </div>
                                </div>
                                @error('hero_slider_image')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror

                                <!-- Video Url -->
                                <div class="mb-2 row">
                                    <label for="hero_slider_vid_url" class="col-sm-2">Video url</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" id="hero_slider_vid_url" type="text" name="hero_slider_vid_url"
                                            value="{{ $heroSliderData->hero_slider_vid_url }}" required placeholder="Video url" />
                                    </div>
                                </div>
                                @error('hero_slider_vid_url')
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
        $('#hero_image').change(function(e){
            let reader = new FileReader();
            reader.onload = function(e){
                $('#showHeroImage').attr('src', e.target.result);
            }
            reader.readAsDataURL(e.target.files['0']);
        });
    });
</script>

@endsection