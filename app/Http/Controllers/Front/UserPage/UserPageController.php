<?php

namespace App\Http\Controllers\Front\UserPage;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserPageController extends Controller
{
  public function userpage()
  {
    return view('userpage/userpage');
  }

  public function userpageUpdateAction(UpdateUserRequest $request, $id)
  {
    $user = User::findOrFail($id);
     $user->update($request->all());

     return redirect()->route('userpage')->with('success', 'profil mis a jour');
  }

}
