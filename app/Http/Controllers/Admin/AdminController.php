<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;
use App\Models\User;

class AdminController extends Controller
{
    public function index()
    {
        $userData = User::find(Auth::user()->id);

        return view('admin.index', [
            'userData' => $userData
        ]);
    }

    /**
     * Display profile page for authenticated user.
     */
    public function profile()
    {
        $userData = User::find(Auth::user()->id);

        return view('admin.admin-profile', [
            'userData' => $userData
        ]);
    }

    public function editProfile()
    {
        $userData = User::find(Auth::user()->id);

        return view('admin.admin-profile-edit', [
            'userData' => $userData
        ]);
    }

    public function updateProfile(Request $request)
    {
        $userData = User::find(Auth::user()->id);

        $request->validate(
            [
                'name' => 'required',
                'username' => 'required',
                'email' => 'required|email',
                'profile_image' => 'image|mimes:jpg,png,jpeg|max:512',
            ]
        );

        if($request->hasFile('profile_image')) {
            $image = $request->file('profile_image');
            $imageName = date('YmdHi') . '_' . $image->getClientOriginalName();
            $image->move(public_path('uploads/admin_profile_images'), $imageName);
            
            $userData->update([
                'name' => $request->name,
                'username' => $request->username,
                'email' => $request->email,
                'profile_image' => $imageName,
            ]);
        } else {
            $userData->update([
                'name' => $request->name,
                'username' => $request->username,
                'email' => $request->email
            ]);
        }

        $notification = [
            'message' => $userData->username . ' Profile Updated Successfully',
            'alert-type' => 'success',
        ];
        // todo Add functionality to remove previous images if you replace with new one.
        return redirect()->route('admin.profile')->with($notification); 
    }

    public function editProfilePassword()
    {
        $userData = User::find(Auth::user()->id);

        return view('admin.admin-profile-password-change', [
            'userData' => $userData
        ]);
    }

    public function updateProfilePassword(Request $request)
    {
        //store new pass
    }
    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $userData = User::find(Auth::user()->id);

        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        $notification = [
            'message' => $userData->username . ' Loged out Successfully',
            'alert-type' => 'success',
        ];

        return redirect('/login')->with($notification);
    }
}
