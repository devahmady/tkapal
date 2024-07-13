<?php

namespace App\Http\Controllers\Auth;

use App\Models\Users;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Roles;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
    {
        return view('auth.register');
    }

    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:5|confirmed',
        ]);

        // Ambil role_id untuk penumpang (asumsi Anda memiliki tabel roles)
        $roleId = Roles::where('name', 'penumpang')->first()->id;

        Users::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role_id' => $roleId,
        ]);

        return redirect()->route('login')->with('success', 'Registration successful. Please login.');
    }
}
