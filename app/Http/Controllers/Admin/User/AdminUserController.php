<?php

namespace App\Http\Controllers\Admin\User;

use Carbon\Carbon;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\UserUpdateRequest;


use App\User;


class AdminUserController extends Controller
{

  // public function __construct(User $request)
  // {
  //     $this->middleware('auth');
  //     $this->middleware('admin');
  // }

  // vue des utilisateur
  public function userView()
  {
    // $users = User::all();
    $users = User::orderBy('created_at', 'desc')->paginate(10);


    return view('admin/user/user', compact('users'));
  }
  // update des user
  public function userUpdate($id)
  {
    $users = User::findorfail($id);

    $countcommentaires = \DB::table('commentaire')->where('commentaire.user_id', '=', $id)
                        ->join('lieux', 'lieux.id', '=', 'commentaire.lieu_id')
                        ->select('commentaire.commentaire', 'commentaire.content', 'lieux.lieu')
                        ->paginate(5);

    $countlieux = \DB::table('lieux')->where('lieux.user_id', '=', $id)
                      ->select('lieux.lieu', 'lieux.content')
                      ->paginate(5);


    return view('admin/user/update', compact('users', 'countcommentaires', 'countlieux'));
  }


  public function userUpdateAction(UserUpdateRequest $request, $id)
  {

    $post = $request->all();

    // $user = User::findOrFail($id);
    // $user->update($request->all());

      \DB::table('users')->where('id', '=', $id)->update([
          'name'       => $post['name'],
          'role'     => $post['role'],
          'updated_at'  => Carbon::now(),
      ]);

      return redirect()->route('user')->with('success', 'modification éffectué');
  }

  // suppression utilisateurs
  public function deleteAction($id)
    {
      $users = User::findOrFail($id);
      $users->delete();

      return redirect()->route('user')->with('success', 'suppression éffectué');
    }
}
