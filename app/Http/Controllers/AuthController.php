<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AuthController extends Controller
{

    function showLoginForm(){
        // $data["title"] = $this->email; 
        return view("login");
    }


    public function loginUser(Request $request){
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6|max:10'
        ]);

        if(auth()->attempt($credentials)){
            // Find information of user and create session id to cookie on the browser
            return redirect()->route('protected-resource');
        }

        return redirect()->back()->withErrors(['message' => 'Invalid credential']);
    }


    public function showRegisterForm(){
        return view("register");
    }

    public function registerUser(Request $request){
     
        $data = $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6|max:10'
        ]);
        
        User::create($data);

        return redirect()->route("login");
    }

    public function protectedResource(){
        return view("dashboard");
    }

    public function logout(){
        auth()->logout();
        return redirect()->route('login');
    }

    function admin(){
        return "admin data";
    }
    function author(){
        return "author data";
    }

    function editor(){
        return "editor data";
    }






    
}
