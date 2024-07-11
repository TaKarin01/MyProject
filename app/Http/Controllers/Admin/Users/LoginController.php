<?php

namespace App\Http\Controllers\Admin\Users;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginStore;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('admin.users.login',[
            'title'=>'Login System'
        ]);
    }
    public function store(LoginStore $request)
    {
        if(Auth::attempt([
            'email'=>$request->input('email'),
            'password'=>$request->input('password')

        ],$request->input('remember'))){
            return redirect()->route('admin');
        }
        $request->session()->flash('error','Email not found! | Password not true!');
        return redirect()->back();
    }
}
