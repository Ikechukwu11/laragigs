<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Validation\Rule;
use Illuminate\Http\Request;

class UserController extends Controller
{
  public function registerform() {
    return view('users.register');
  }

  public function loginform() {
    return view('users.login');
  }

  public function logout(Request $request) {
    auth()->logout();
    $request->session()->invalidate();
    $request->session()->regenerateToken();

    return redirect('/')->with('success', 'You have been logged out');
  }

  public function createuser(Request $request) {
    $formFields = $request->validate([
      'name' => ['required', 'min:3'],
      'email' => ['required', 'email', Rule::unique('users', 'email')],
      'password' => ['required', 'confirmed', 'min:6']
    ]);
    $formFields['password'] = bcrypt($formFields['password']);
    $user = User::create($formFields);
    //auto login
    //auth()->login($user);

    if ($user) {
      return redirect('/register')->with('success', 'User created successfully');
    }
  }

  public function login(Request $request) {
    $formFields = $request->validate([
      'email' => ['required', 'email'],
      'password' => 'required'
    ]);

    if (auth()->attempt($formFields)) {
      $request->session()->regenerateToken();
      return redirect('/')->with('success', 'Login successful');
    }

    return back()->withErrors(['email' => 'These credentials do not match our records.'])->withInput();
  }
}