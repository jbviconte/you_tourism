<?php

namespace App\Http\Controllers\Admin\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;

class AdminUserController extends Controller
{

  // vue des utilisateur
  public function userView()
  {
    // $users = User::all();
    $users = User::orderBy('created_at', 'desc')->paginate(10);

    return view('admin/user/user', compact('users'));
  }

  // suppression utilisateurs
  public function deleteAction($id)
    {
      $users = User::findOrFail($id);
      $users->delete();

      return redirect()->route('user')->with('success', 'suppression éffectué');
    }
}
