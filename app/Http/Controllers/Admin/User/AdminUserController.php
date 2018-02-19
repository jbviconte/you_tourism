<?php

namespace App\Http\Controllers\Admin\User;

use Carbon\Carbon;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use App\Http\Requests\UpdateUserRequest;

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
    return view('admin/user/update', compact('users'));
  }


  public function userUpdateAction(UpdateUserRequest $request, $id)
  {

    $users = User::findOrFail($id);
      $users->update($request->all());

      // Lieux::where('id', '=', $id)->update([
      //     'lieu'       => $post['lieu'],
      //     'content'     => $post['content'],
      //     'updated_at'  =>Carbon::now(),
      // ]);

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
