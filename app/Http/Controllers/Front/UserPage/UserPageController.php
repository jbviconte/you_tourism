<?php

namespace App\Http\Controllers\Front\UserPage;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;

class UserPageController extends Controller
{
  public function userpage($id)
  {
    $users = User::findOrFail($id);
    return view('userpage/userpage', compact('users'));
  }

  public function userPageUpdate($id)
  {
    $users = User::findOrFail($id);
    return view('userpage/update', compact('users'));
  }

  public function userPageUpdateAction(UpdateUserRequest $request, $id)
  {
    $user = User::findOrFail($id);
     $user->update($request->all());

     return redirect()->route('userpage')->with('success', 'profil mis a jour');
  }

}
