<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Session;


class RegisterController extends Controller
{
    public function registernew()
    {
        return view('shopping.register');
    }

    public function loginnew()
    {
        return view('shopping.login');
    }

    public function register(Request $request)
    {
        $request->validate([
            'ad'=>'required',
            'user_ad'=>'required|unique:user',
            'email'=>'required',
            'password'=>'required',
            'passwordtwo'=>'required|same:password',
        ]);
        $user=new User();
        $user->ad=$request->input('ad');
        $user->user_ad=$request->input('user_ad');
        $user->email=$request->input('email');
        $user->password=Hash::make($request->input('password'));
        $user->save();
        return redirect()->route('login')->with("status","Qeydiyyat ugurla bitmisdir..");
    }

    public function login(Request $request)
    {
        $request->validate([
            'user_ad'=>'required',
            'password'=>'required|min:5|max:12',
        ]);
        
        if(Auth::attempt(['user_ad'=>$request->user_ad,'password'=>$request->password]))
        {
            $request->session()->regenerate();
            return redirect()->intended('/');
        }
           
         
            return back()->with('status', 'ya sifre ya istifadeci adniz yalnis');
    
        
    }

    public function logout(Request $request)
    {
        Auth::logout();
            $request->session()->invalidate();  
            $request->session()->regenerateToken();  
            return redirect()->route('login');
    
        
    }

    public function hesabim($id)
    {

        $user=User::find($id);
        
       
        
         return view('shopping.hesabim')->with('user',$user);
        
    }




}
