<?php

namespace App\Http\Controllers\Auth;

use Carbon\Carbon;
use App\Models\Users;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }

    public function logout()
    {
        session()->flush();
        return redirect('/');
    }

    public function login(Request $request)
    {
        $user = Users::where('email', $request->name)->where('role_id', 'penumpang')->first();

        if ($user) {
            if (Hash::check($request->password, $user->password)) {
                $user->login = Carbon::now();
                $user->save();

                $response = ['status' => 'success', 'message' => 'Login Success'];
                return response()->json($response, 201);
            } else {
                $response = ['status' => 'error', 'message' => 'name & Password tidak sesuai'];
                return response()->json($response, 201);
            }
        } else {
            $response = ['status' => 'error', 'message' => 'name tidak terdaftar'];
            return response()->json($response, 201);
        }
    }
}
