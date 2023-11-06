<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HeroSlider extends Model
{
    use HasFactory;

    protected $fillable =[
        'hero_slider_title',
        'hero_slider_short_desc',
        'hero_slider_image',
        'hero_slider_vid_url'
    ];
}
