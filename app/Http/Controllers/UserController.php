<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class UserController extends Controller
{
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email'    => 'required|email',
            'password' => 'required|string|min:6',
        ]);

        if (!Auth::attempt($credentials)) {
            return back()
                ->withErrors(['email' => 'Invalid credentials'])
                ->withInput();
        }

        $request->session()->regenerate();

        $user = Auth::user();

        return match ($user->role_id) {
            1 => redirect()->route('admin.Home'),
            2 => redirect()->route('waiter.Home'),
            3 => redirect()->route('chef.Home'),
        };
    }

    public function getAllUsers()
    {
        $users = User::all();
        return view('admin.users', compact('users'));
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('login');
    }
}
