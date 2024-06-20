<?php

namespace App\Http\Controllers\Auth;

use Firebase\JWT\JWT;

use Firebase\JWT\Key;
use App\Models\User;
use DateTimeImmutable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\Controller;
use Tymon\JWTAuth\Facades\JWTAuth;

class LoginController extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function lupa_password(Request $request)
    {
        $data = [
            'title' => 'Lupa Password',
        ];
        return view('auth.lupa_password', $data);
    }

    public function proses_lupa_password(Request $request)
    {
        $user = User::where('email', $request->email)->first();
        if (!$user) {
            return redirect('lupa_password')->with('error', 'Email Not Found');
        }
        $secretKey  = Config::get("app.jwt_key");
        $user->email_forgot_password = date('Y-m-d H:i:s');
        $user->save();

        $issuedAt   = new DateTimeImmutable();
        $data = [
            'iat'  => $issuedAt->getTimestamp(),
            'expire'     => $issuedAt->modify('+6 minutes')->getTimestamp(),
            'iat'  => $issuedAt->getTimestamp(),
            'user_id' => $user->id,
            'email' => $user->email,
        ];
        $token = JWTAuth::encode(
            $data,
            $secretKey,
            'HS512'
        );
        $params = [
            'user' => $user,
            'url' => url('change_password') . '?token=' . $token,
            'path' => 'change_password',
        ];
        $mailcek = Mail::to($request->email)->send(new \App\Mail\LupaPassword($params));

        return redirect('login')->with('success', 'Silahkan Cek Email anda');
    }
}
