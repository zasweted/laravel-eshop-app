<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\HeroSlider;
use App\Models\User;

class HeroSliderController extends Controller
{
    public function index()
    {

        $heroSliderData = HeroSlider::find(1);
        $userData = User::find(Auth::user()->id);
        
        return view('admin.home.hero-slider', [
            'heroSliderData' => $heroSliderData,
            'userData'=> $userData
        ]);
    }

    public function updateHeroSlider(Request $request)
    {

    }
}
