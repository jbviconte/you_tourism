<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;

class AdminController extends Controller
{
    public function dashboard()
    {
      return view('admin/dashboard');
    }

    public function user()
    {
      $users = User::orderBy('created_at', 'desc')
                    ->take(5)
                    ->get();
        return view('admin/dashboard', compact('users'));
    }



}
