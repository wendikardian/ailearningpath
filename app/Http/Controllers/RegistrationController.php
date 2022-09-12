<?php

namespace App\Http\Controllers;

use App\Models\Achievement;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegistrationController extends Controller
{
    public function index()
    {

        return view('main/sign_up', [
            "title" => "Daftar"
        ]);
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:5|max:255',
        ]);

        $data['password'] = Hash::make($data['password']);
        $data['status'] = 1;
        $user = User::create($data);
        Achievement::create([
            'user_id' => $user->id
        ]);

        return redirect('/masuk')->with('success', 'Akun telah berhasil didaftarkan, silahkan masuk!');
    }
}
