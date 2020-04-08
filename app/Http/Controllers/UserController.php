<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\User as UserModel;


class UserController extends Controller
{

    public function login(Request $request)
    {
        $data = [];
        $data['error_warning'] = '';

        if($request->isMethod('post'))
        {
            $username = !empty($request->post('username')) ? $request->post('username') : "";
            $password = !empty($request->post('password')) ? $request->post('password') : "";

            // cek user di database
            $user= UserModel::where('usernm', '=', $username)
                ->where('userpw', '=', $password)
                ->first();

            if(!empty($user))
            {
                $request->session()->put('userid',$user->userid);

                return redirect('/home');

            } else {
                $data['error_warning'] = 'Username Atau Password Salah';
            }
        }

        return view("login",$data);
    }

    public function logout(Request $request)
    {
        $request->session()->forget('userid');

        return redirect('home');
    }
}
