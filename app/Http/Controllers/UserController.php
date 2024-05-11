<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Validator;
class UserController extends Controller
{
    public function dashboard()
    {
        return view('dashboard');
    }

    public function show()
    {
        $user = Auth::User();
        return view('profile.update', compact('user'));
    }
    
    public function showData()
    {
        $user = Auth::User();
        return view('profile.UserData', compact('user'));
    }

    public function update(Request $request)
    {
        // dd($request->all());

        $user = Auth::User();
        $user->update($request->all());  // Ensure you've added validation and only update what's necessary!
        return redirect()->route('dashboard')->with('success', 'Profile updated successfully!');
    }

    

    public function deletePage(){
        return view('profile.delete');
    }
    public function destroy()
    {
        $user = Auth::User();
        $user->delete();
        return redirect('/index')->with('success', 'Your account has been deleted.');
    }
}
