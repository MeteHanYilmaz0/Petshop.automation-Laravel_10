<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }

    public function register()
    {
        return view('auth.register');
    }

    public function registerP(Request $request){
        $user=new User();
        $user->name=$request->name;
        $user->surname = $request->surname;
        $user->email=$request->email;
        $user->password=Hash::make($request->password);
        $user->telephoneNumber = $request->telephoneNumber;
        $user->role = $request->role ?? 1;

        $user->save();

        return redirect()->route("login")->withErrors("Kullanıcı kaydı başarılı");

    }

    public function loginP(Request $request){
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            $user = Auth::user();  // Get authenticated user

            if ($user->role == 0) {
                return redirect()->route('adminPanel.home');
            } else {
                return redirect()->route('userPanel.home');
            }
        } else {
            return redirect()->route("login")->withErrors('Kullanıcı hatası!');
        }
    }

    public function logoutP(){
        Auth::logout();
        return redirect()->route("login")->withErrors("Oturum kapatıldı.");
    }

}
