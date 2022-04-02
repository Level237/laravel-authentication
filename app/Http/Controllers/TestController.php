<?php

namespace App\Http\Controllers;

use App\Mail\TestMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Mail;

class TestController extends Controller
{
    public function __construct()
    {
        // $this->middleware('auth');
    }
    public function foo(){

        if(!Gate::allows('access-admin')){
            abort('403');
        }
    return view('test.foo');
    }

    public function bar(){

        $user=['email'=>'user@gmail.com','name'=>'level'];

        Mail::to($user['email'])->send(new TestMail($user));
    return view('test.bar');
    }
}
