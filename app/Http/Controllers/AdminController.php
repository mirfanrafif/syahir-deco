<?php

namespace App\Http\Controllers;
namespace App\Http\Controllers\DB;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view('/admin/dashboard');
    }
    public function getuser()
    {
        # code...
        $user = DB::table('user')->get();

        return view('user',['user'=>$user])
    }
}
