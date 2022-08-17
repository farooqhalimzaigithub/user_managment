<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function home()
    {
        return view('admin-dashboard.layouts.master');
    }

    public function index()
    {
        $data['users']=User::with('profile')->latest()->get();
        return view('user.index',$data);
    }

    public function login(Request $request)
    {
        if ($request->isMethod('get')) {
            return view("user.login");
        }

        $request -> validate( [
            'email' => 'required|email' ,
            'password' => 'required'
        ] );

        $user = $this -> model -> whereEmail( $request -> email ) -> first();

		if ( !$user || !Hash::check( $request -> password , $user -> password ) ) {
			return back()->withError("Provided credentials are not incorrect");
		}

        Auth::login($user);
        return redirect(RouteServiceProvider::HOME);
    }

    public function logout()
    {
        Auth::logout();
        return redirect(route('login.index'));
    }
}
