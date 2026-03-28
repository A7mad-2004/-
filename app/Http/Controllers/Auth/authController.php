<?php

namespace App\Http\Controllers\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class authController extends Controller
{
    //
    public function login()
    {
        return view('auth.login');
    }
    public function authenticate(Request $request)
    {
        $data = $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string'
        ]);
        $remember = $request->boolean('remember');

        if (! Auth::attempt([
            'email' => $data['email'],
            'password' => $data['password'],
        ], $remember)) {
            return back()->with('error', true);
        }

        $request->session()->regenerate();

        return match (Auth::user()->role) {
            'admin' => redirect()->route('dashboard'),
            'user' => redirect()->route('landing'),
            default => $this->logoutUnexpectedRole($request),
        };
    }

    private function logoutUnexpectedRole(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return back()->with('error', true);
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('login');

    }
    public function register()
    {
        return view('auth.signup');
    }
    public function registerPost(Request $request)
    {
//        dd($request->all());
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'phone' => 'required|string|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);
            $privacy = $request->boolean('privacy');

        User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'phone' => $data['phone'],
            'password' => Hash::make($data['password']),
            'role' => 'user',
            'privacy' => $privacy,
        ]);
        return redirect()->route('login')
            ->with('success','You have successfully registered.');
    }
}
