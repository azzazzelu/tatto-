<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function create()
    {
        return view('user.create');
    }
    public function store(Request $request)
    {
        $request->validate(
            [
                'name' => ['required', 'max:255'],
                'email' => ['required', 'email', 'max:255', 'unique:users'],
                'password' => ['required', 'confirmed'],
            ]
        );
        $user = User::create($request->all());
        event(new Registered($user));
        Auth::login($user);

        return redirect()->route('verification.notice');
    }
    public function login()
    {
        return view('user.login');
    }
    public function loginAuth(Request $request)
    {
        // Валидация входящих данных
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        // Проверка для обычного пользователя
        if (Auth::attempt($credentials, $request->boolean('remember'))) {
            $request->session()->regenerate();
            return redirect()->intended('dashboard')->with('success', 'Добро пожаловать, ' . Auth::user()->name . '!');
        }

        // В случае ошибки возврат с сообщением об ошибке
        return back()->withErrors(['email' => 'Ошибка в почте или пароле']);
    }
    // public function dashboard()
    // {
    //     return view('user.dashboard');
    // }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
}
