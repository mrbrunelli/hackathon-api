<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Color;
use App\Models\User;
use App\Models\Vehicle;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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
                $request->session()->put('LoggedUserName', $userInfo->name);

                return redirect()->route('dashboard');
            }else{
                return back()->with('fail', 'Usuário incorreto. Verifique');
            }
        }
    }

    function index(){
        $colors = Color::all();
        $brands = Brand::all();
        $vehicles= Vehicle::all();

        return view('layouts.dashboard', [ 'colors' => $colors , 'brands' => $brands, 'vehicles' => $vehicles]);
    }

    function logout(){
        if(session()->has('LoggedUser')){
            session()->pull('LoggedUser');
            return redirect()->route('login');
        }
    }
}
