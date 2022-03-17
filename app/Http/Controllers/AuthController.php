<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function index()
    {
        $this->login_page();
    }

    public function login_page()
    {
        return view('auth.login', ['title' => 'Login Page']);
    }
    public function register_page()
    {
        return view('auth.register', ['title' => 'Register Page']);
    }

    public function login(Request $request)
    {
        $validatedData = $request->validate([
            'email' => 'required|unique:users|email:dns',
            'password' => 'required|min:6|max:20',
        ]);

        $validatedData['password'] = Hash::make($validatedData['password']);

        $query = User::create($validatedData);

        if ($query) {
            $request->session()->flash('message', 'Registrasi berhasil!');
            return redirect('/auth/login');
        } else {
            $request->session()->flash('message', 'Registrasi gagal dilakukan!');
            return redirect('/auth/login');
        }
    }

    public function register(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|min:3|max:30',
            'email' => 'required|unique:users|email:dns',
            'username' => 'required|unique:users|min:5|max:20',
            'password' => 'required|min:6|max:20',
        ]);

        $validatedData['password'] = Hash::make($validatedData['password']);

        $query = User::create($validatedData);

        if ($query) {
            return redirect('/auth/login')->with('message', 'Registrasi berhasil!');
        } else {
            return redirect('/auth/login')->with('message', 'Registrasi gagal dilakukan!');
        }
    }
}
