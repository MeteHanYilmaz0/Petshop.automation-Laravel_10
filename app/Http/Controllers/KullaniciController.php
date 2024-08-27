<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class KullaniciController extends Controller
{
    public function index()
    {
        $users = User::where("role", 1)->get();
        return view("adminPanel.user.index", compact("users"));
    }

    public function show($id)
    {
        $user = User::findOrFail($id);
        return view("adminPanel.user.show", compact("user"));
    }

    public function delete($id)
    {
        $user = User::findOrFail($id);
        $user->delete();
        return redirect()->route('kullanici.index')->with('success', 'Kullanıcı başarıyla silindi.');
    }
}
