<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\NewUser;
use Illuminate\Support\Facades\Hash;

class DemoUserController extends Controller
{
    public function index()
    {
        return view('signup');
    }

    public function signUp(Request $req)
    {
        $req->validate(
            [
                'fullname' => 'required',
                'mobile' => 'required',
                'email' => 'required|email',
                'password' => 'required|min:5|max:8',
                'conf_password' => 'required|same:password',                
            ]
        ); 
        //echo '<pre>';
        //print_r($req->all());

        $newUser = new NewUser;
        $newUser->fullname = $req['fullname'];
        $newUser->email = $req['email'];
        $newUser->mobile = $req['mobile'];
        $newUser->password = Hash::make($req['password']);
        $save = $newUser->save();
        
        if($save)
        {
            return back()->with('success', 'Your account has been created successfully!');
        }
        else{
            return back()->with('fail', 'Account creation failed');
        }
    }

    public function signInForm()
    {
        return view('signin');
    }

    public function signInLogic(Request $req)
    {
        //echo '<pre>';
        //print_r($req->all());

        $req->validate(
            [
                "email" => "required|email",
                "password" => "required"
            ]
        );
        
        $userInfo = NewUser::where('email', '=', $req['email'])->first();
        
        if(!$userInfo)
        {
            return back()->with('fail', 'Your Email or Password is invalid');
        }
        else
        {
            if(Hash::check($req['password'], $userInfo->password))            
            {
                $req->session()->put('isAuthorised', 'Yes');
                $req->session()->put('userId', $userInfo->id);
                $req->session()->put('userFullName', $userInfo->fullname);
                return redirect('customers');
            }
            else
            {
                return back()->with('fail', 'Your Email or Password is invalid');
            }
        }
    }

    public function getProfile()
    {
        $data = ['loggedUserInfo' => NewUser::where('id', '=', session('userId'))->first()];
        return view('profile')->with($data);
    }

    public function logout()
    {
        if(session()->has('isAuthorised'))
        {
            session()->pull('isAuthorised');
            session()->pull('userId');
            session()->pull('userFullName');
            return view('signin');
        }
    }
}
