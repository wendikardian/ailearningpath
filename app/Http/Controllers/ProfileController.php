<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        return view('main/profile', [
            "title" => "Profil",
            "user" => $user,
            "achievement" => $user->achievement,
            "learning" => $user->learning->where('status', 1),
            "challenge" => $user->challengeTaken->where('status', 2)
        ]);
    }
}
