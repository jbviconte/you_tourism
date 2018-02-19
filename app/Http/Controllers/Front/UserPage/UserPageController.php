<?php

namespace App\Http\Controllers\Front\UserPage;

use Carbon\Carbon;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use App\Http\Requests\UpdateUserRequest;

class UserPageController extends Controller
{
  public function userpageView()
  {
    $users = User::get();
  }

  public function userpageUpdate($id)
  {
    $users = User::findOrFail($id);
  }

  public function userpageUpdateAction(UpdateUserRequest $request, $id)
  {
    $users = User::findOrFail($id);
     $users->update($request->all());

     return redirect()->route('userpage-update')->with('success', 'profil mis a jour');
  }

  public function userpageDeleteAction($id)
  {
    $users = User::findOrFail($id);
     $users->delete();

    return redirect()->route('userpage-delete')->with('success', 'profil effacé');
  }

}
