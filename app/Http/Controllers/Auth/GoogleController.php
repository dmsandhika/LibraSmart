<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class GoogleController extends Controller
{
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    // Callback dari Google setelah login
    public function handleGoogleCallback()
    {
        $googleUser = Socialite::driver('google')->user();

        // Cek apakah user sudah ada berdasarkan google_id
        $user = User::where('google_id', $googleUser->id)->first();

        if (!$user) {
            // Buat user baru jika belum ada
            $user = User::create([
                'name' => $googleUser->name,
                'email' => $googleUser->email,
                'google_id' => $googleUser->id,
                'avatar' => $googleUser->avatar,
                'email_verified_at' => now(),
            ]);
        }
        $user->assignRole('Member');
        $member = Role::findByName('member');
        $user->syncPermissions($member->permissions);

        // Login user
        Auth::login($user);

        // Redirect ke dashboard atau halaman yang diinginkan
        return redirect()->intended('dashboard');
    }
}