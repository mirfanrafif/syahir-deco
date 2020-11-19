<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function index()
    {
        # code...
        $user = DB::table('user')->get();

        return view('adminuser',['user'=>$user]);
    }
}
