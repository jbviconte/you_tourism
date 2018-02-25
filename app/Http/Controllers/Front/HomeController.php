<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Auth\ResetPasswordController;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Lieux;
use App\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function home()
    {

      $lieux = Lieux::where('status', '=', 'publish')->orderBy('created_at', 'desc')
                    ->take(5)
                    ->get();

      $lieuxrand = Lieux::where('status', '=', 'publish')->orderByRaw('RAND()')
                    ->take(5)
                    ->get();

        return view('home', compact('lieux', 'lieuxrand'));


    }

    public function sendMail($token)
    {
      $this->notify(new ResetPasswordController($token));
    }
}
