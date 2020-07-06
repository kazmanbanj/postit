<?php

namespace App\Http\Controllers;

use App\User;
use App\Mail\Welcome;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;

class RegistrationController extends Controller
{
    public function create()
    {
        return view('registration.create');
    }

    public function store(Request $request)
    {
        $this->validate(request(), [
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|confirmed',
        ]);

        $request['password'] = bcrypt($request->input('password'));

        $user = User::create(request(['name', 'email', 'password']));

        auth()->login($user);

        \Mail::to($user)->send(new Welcome($user));

        return redirect()->home();

        // $request['password'] = bcrypt($request->input('password'));
        // dd($request->all());

        // dd($request->input('password'));
    }
}
