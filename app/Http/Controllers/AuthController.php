<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;
use App\Models\User;

class AuthController extends Controller
{
    public function showLogin(){return view('pages.login');}
    public function showRegister(){return view('pages.register');}

    public function admin(){
        return view('pages.admin',['newsList'=>News::all()]);
    }

    public function register(Request $Request){
        $data = $Request->validate([
            'username'=>['required'],
            'password'=>'required|confirmed'
        ]);

        $data['password'] = bcrypt($data['password']);
        
        User::create($data);
        return redirect('/login');
    }

    public function login(Request $request){
        $formFields = $request->validate([
            'username'=>'required',
            'password'=> 'required'
        ]);

        if(auth()->attempt($formFields)){
            $request->session()->regenerate();

            return redirect('/')->with('message','Logged in!!!!');
        }

        return back()->withErrors(['email'=>'Invalid credentials'])->onlyInput('email');
    }

    public function logout(Request $request){
        auth()->logout();
        
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/')->with('message','Logged out');
    }
}
