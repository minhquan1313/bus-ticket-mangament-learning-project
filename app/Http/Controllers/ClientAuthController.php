<?php

namespace App\Http\Controllers;

use App\Actions\Fortify\PasswordValidationRules;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Str;

class ClientAuthController extends Controller
{
    public function getUniqueFileName($name)
    {
        return Str::beforeLast($name, '.') . date('_Ymd_his') . '.' . Str::afterLast($name, '.');
    }

    public function signUpGet()
    {
        if (Auth::user()) return redirect()->route('home');
        return view('client.auth.sign_up');
    }
    public function signInGet()
    {
        if (Auth::user()) return redirect()->route('home');

        return view('client.auth.sign_in');
    }
    public function logOut(Request $req)
    {
        Auth::logout();

        $req->session()->invalidate();

        $req->session()->regenerateToken();

        return redirect('/');
    }

    public function profileGet()
    {
        $user = Auth::user();
        return view('client.user.profile', compact('user'));
    }

    use PasswordValidationRules;
    public function profilePost(Request $req)
    {
        $user = Auth::user();

        $input = [
            'surname' => $req->surname,
            'name' => $req->name,
            'new_password' => $req->new_password,
            'new_password_confirmation' => $req->new_password_confirmation,
            'old_password' => $req->old_password,
            'old_password_confirmation' => $req->old_password,
        ];

        Validator::make($input, [
            'surname' => ['string', 'max:255', 'nullable'],
            'name' => ['string', 'max:255', 'nullable'],
        ])->validate();

        if ($req->surname) $user->surname = trim($req->surname);
        if ($req->name) $user->name = trim($req->name);


        if ($req->new_password) {
            $rule = $this->passwordRules();

            Validator::make($input, [
                'new_password' => $rule,
                'old_password' => $rule,
            ], [
                'new_password' => 'Mật khẩu không khớp',
                'old_password' => 'Mật khẩu không trùng',
            ])->validate();

            if (!Hash::check($req->old_password, $user->password)) {
                throw ValidationException::withMessages(['old_password' => 'Mật khẩu không trùng']);
            }

            $user->password = Hash::make($req->new_password);
        }


        if ($req->profile_photo_path) {
            $filename = $req->profile_photo_path->getClientOriginalName();
            $oldImg = public_path($user->profile_photo_path);

            $path = 'images/' . $user->id . '/';
            $defaultAvatar = '/images/avatar.jpg';

            if (file_exists(public_path($path . $filename))) {
                $filename = $this->getUniqueFileName($filename);
            }

            $req->profile_photo_path->move($path, $filename);
            if ($oldImg != $defaultAvatar) {
                if (file_exists($oldImg)) {
                    unlink($oldImg);
                }
            }
            $user->profile_photo_path = '/images/' . $filename;
        }

        $user->save();

        return redirect()->route('user.profile');
    }
}
