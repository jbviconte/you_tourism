<?php

namespace App\Http\Controllers\Front\UserPage;

use Carbon\Carbon;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;
use App\User;
use Auth;


class UserPageController extends Controller
{

  public function __construct(User $request)
  {
    $this->middleware('auth');
    $this->middleware('userid');
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

  public function userPageUpdateAction(UserRequest $request, $id)
  {

    $user = User::findOrFail($id);
    $inputs = $request->all();
    $user->update($inputs);

    return redirect()->route('userpage', ['id' => $id])->with('success', 'profil mis a jour');
  }

  public function userPageDeleteAction($id)
  {
    $users = User::findOrFail($id);

    $inputs = \DB::table('users')->where('users.id', '=', $id)
                    ->join('commentaire', 'commentaire.user_id', '=', 'users.id')
                    ->join('lieux', 'lieux.user_id', '=', 'users.id')
                    ->select('users.*', 'commentaire.*', 'lieux.*');

     $users->delete($inputs);
     return redirect()->route('home')->with('success', 'profil supprimer');
  }


}
