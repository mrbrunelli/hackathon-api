<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class IndexController extends Controller
{
    function login(){
        return view('layouts.login');
    }

    function auth(Request $request){

        $request->validate([
            'login' => 'required',
            'password' => 'required'
        ]);

        $userInfo = User::where('login', '=', $request->login)->first();
        if(!$userInfo){
            return back()->with('fail', 'Usuário incorreto');
        }else{
            if(Hash::check($request->password, $userInfo->password)){
                $request->session()->put('LoggedUser', $userInfo->id);
                return redirect()->route('dashboard');
            }else{
                return back()->with('fail', 'Usuário incorreto. Verifique');
            }
        }
    }

    function index(){
        return view('layouts.dashboard');
    }

    function logout(){
        if(session()->has('LoggedUser')){
            session()->pull('LoggedUser');
            return redirect()->route('login');
        }
    }
}
