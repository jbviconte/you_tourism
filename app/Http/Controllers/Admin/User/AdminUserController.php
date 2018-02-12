<?php

namespace App\Http\Controllers\Admin\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;

class AdminUserController extends Controller
{
  public function userView()
  {
    // $users = User::all();
    $users = User::orderBy('created_at', 'desc')->get();

    return view('admin.dashboard', compact('users'));
    // return view('user');
  }
}
