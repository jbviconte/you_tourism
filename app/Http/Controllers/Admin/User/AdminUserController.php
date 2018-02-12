<?php

namespace App\Http\Controllers\Admin\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;

class AdminUserController extends Controller
{
  public function user()
  {
    $users = Users::orderBy('created_at', 'desc')->get();
    return view('admin/user/user', compact('users'));
    // return view('user');
  }
}
