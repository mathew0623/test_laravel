<?php

namespace App\Http\Controllers;

use Auth;

use Illuminate\Http\Request;



class SessionsController extends Controller
{
    public function create()
    {
        return view('sessions.create');
    }

    public function store(Request $request)
    {
        $credentials = $this->validate($request, [
            'email' => 'required|email|max:255',
            'password' => 'required'
        ]);

        if (Auth::attempt($credentials, $request->has('remember'))) {
            session()->flash('success', 'Welcome back!');
            return redirect()->route('users.show',[Auth::user()]);
        } else {
            session()->flash('danger', 'Sorry, email or password incorrect');
            return redirect()->back()->withInput();

        }
 
    }

    public function destroy()
    {
        Auth::logout();
        session()->flash('success', 'You are already logout!');
        return redirect('login');
    }


}
