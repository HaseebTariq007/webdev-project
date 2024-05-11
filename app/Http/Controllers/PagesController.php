<?php

    namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class PagesController extends Controller
{
    public function index(){
        return view('index');
    }

    public function about(){
        return view('about');
    }
    
    public function contact(){
        return view('contact');
    }
    
    public function products(){
        return view('products');
    }
    
    public function blog(){
        return view('blog');
    }

    public function promotions(){
        return view('promotions');
    }

    public function user(){
        return view('user');
    }

    public function create(Request $request)
{
    // $request->input = $request->validate([
    //     'firstName' => 'required|string|max:255',
    //     'lastName' => 'required|string|max:255',
    //     'username' => 'required|string|max:255|unique:users,username',
    //     'email' => 'required|string|email|max:255|unique:users,email',
    //     'password' => 'required|string|min:6',
    //     'mobileNumber' => 'required|numeric',
    //     'gender' => 'required|in:male,female,other'
    // ]);

    $user = new User();
    $user->firstname = $request->input('firstName');
    $user->lastname = $request->input('lastName');
    $user->username = $request->input('username');
    $user->email = $request->input('email');
    $user->password = bcrypt($request->input('password'));
    $user->mobileNumber = $request->input('mobileNumber');
    $user->gender = $request->input('gender');
    
    $user->save();

    return redirect()->back()->with('success', 'User registered successfully!');
}
    
}
