<?php

namespace App\Http\Controllers\Front\UserPage;

use Carbon\Carbon;
<<<<<<< HEAD
<<<<<<< HEAD
use Illuminate\Http\Request;
=======
>>>>>>> c3b71c5d06fb59380863088ff079330fa994eeac
=======
>>>>>>> c67051d665b7870ce338ae130dbb8360ff679657
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use App\Http\Requests\UpdateUserRequest;


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
    $users = User::findOrFail($id);
     $users->update($request->all());

     return redirect()->route('userpage-update')->with('success', 'profil mis a jour');
  }

  public function userpageDeleteAction($id)
  {
    $users = User::findOrFail($id);
     $users->delete();

<<<<<<< HEAD
<<<<<<< HEAD
     return redirect()->route('userpage', array('id' => $id))->with('success', 'profil mis a jour');
=======
    return redirect()->route('userpage-delete')->with('success', 'profil effacé');
>>>>>>> c3b71c5d06fb59380863088ff079330fa994eeac
=======
     return redirect()->route('userpage', array('id' => $id))->with('success', 'profil mis a jour');
>>>>>>> c67051d665b7870ce338ae130dbb8360ff679657
  }


}
