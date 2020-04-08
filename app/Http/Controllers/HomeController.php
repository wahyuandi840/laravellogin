<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User as UserModel;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        $data = [];
        $userid = $request->session()->get('userid');

        $user = UserModel::where('userid', '=', $userid)->first();
        $data['user'] = $user;

        return view('home', $data);
    }
}
