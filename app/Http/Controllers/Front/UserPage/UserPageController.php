<?php

namespace App\Http\Controllers\Front\UserPage;

use Carbon\Carbon;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use App\Http\Requests\UpdateUserRequest;


class UserPageController extends Controller
{
  public function userPage($id)
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
    $post = $request->all();
    User::where('id', '=', $id)->update([
                    'name' => $post['name'],
                    'email' => $post['email'],
                    'password' => bcrypt($post('password')),
                    'updated_at' => Carbon::now()
                  ]);

     return redirect()->route('userpage-update')->with('success', 'profil mis a jour');
  }

  public function userpageDeleteAction($id)
  {
    $users = User::findOrFail($id);
     $users->delete();
     return redirect()->route('userpage', array('id' => $id))->with('success', 'profil mis a jour');
  }


}
