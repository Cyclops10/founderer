<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        if($user->hasAnyRole('admin'))
            return redirect('admin/dashboard');
        else if($user->hasAnyRole('investor'))
            return redirect('investor/dashboard');
        else
            return redirect('founder/dashboard');
    }

    public function fake()
    {
        return view('admin.dashboard');
    }
}
