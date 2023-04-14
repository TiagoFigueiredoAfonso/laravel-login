<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Login;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(){

        if(Auth::check()){ // se eu tiver logado, não caio aqui.
            return redirect()->route('home');
        }
        
        return view('auth.login');
    }

    public function login_action(Request $request){        
        
        $validator = $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        if(Auth::attempt($validator)){ 
            return redirect()->route('home');
        }

        return view ('auth.login');
       
    }

    public function register(){

        if(Auth::check()){ // se eu tiver logado, não caio aqui.
            return redirect()->route('home');
        }

        return view('auth.register');
    }

    public function register_action(Request $request){
        //dd($request->all());

        $validator = $request->validate([
            'name' => 'required|min:3',
            'email' => 'required|email',
            'password' => 'required|min:3'
        ]);

        $data = $request->only(['name', 'email', 'password']);
        $data['password'] = Hash::make($data['password']);

        $user = new User($data);
        $user->save();
        return redirect()->route('login');
    }

    public function home(){
        //dd(Auth::user());   

        if(Auth::check()){ // se entra se estiver logado
            $user = Auth::user();    
            return view('auth.home', ['user' => $user]);  
        }
        
        return view('auth.login'); // sem login, volta para o início
       
    }

    public function logout(){
        Auth::logout();

        return redirect()->route('login');
    }

}
