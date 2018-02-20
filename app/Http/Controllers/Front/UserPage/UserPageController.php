<?php

namespace App\Http\Controllers\Front\UserPage;

use Carbon\Carbon;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\UpdateUserRequest;
use App\User;
use Auth;


class UserPageController extends Controller
{

  public function __construct(User $request)
  {
    if ($request->user()->id == Auth::user()->id) {
      
      return view('userpage/userpage', compact('users'));
    }
    return edirect()->route('home')->with('danger', 'Vous n\'êtes pas autoriser à accéder à cette page');

  }
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
                    'password' => bcrypt($post['password']),
                    'updated_at' => Carbon::now()
                  ]);

     return redirect()->route('userpage', ['id' => $id])->with('success', 'profil mis a jour');
  }

  public function userPageDeleteAction($id)
  {
    $users = User::findOrFail($id);
     $users->delete();
     return redirect()->route('home')->with('success', 'profil supprimer');
  }


}
