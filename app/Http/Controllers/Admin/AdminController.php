<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use App\Lieux;

class AdminController extends Controller
{
    public function dashboard()
    {
      $users = User::orderBy('created_at', 'desc')
                    ->take(5)
                    ->get();

      $lieux = Lieux::orderBy('created_at', 'desc')
                    ->take(5)
                    ->get();

      return view('admin/dashboard', compact('users', 'lieux'));
    }

}
