<?php

namespace App\Http\Controllers\Admin\Commentaire;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Commentaire;
use App\User;
use App\Lieux;

class AdminCommentaireController extends Controller
{

  public function __construct(User $request)
  {
      $this->middleware('auth');
      $this->middleware('admin');
  }
    public function commentaire() {

      $commentaires = \DB::table('commentaire')
            ->join('users', 'commentaire.user_id', '=', 'users.id')
            ->join('lieux', 'commentaire.lieu_id', '=', 'lieux.id')
            ->select('commentaire.*', 'users.name', 'lieux.lieu')
            ->get();

      return view('admin/commentaire/commentaire', compact('commentaires'));

    }


    public function commentaireDelete($id)
    {
      $commentaires = Commentaire::findOrFail($id);
      $commentaires->delete();

      return redirect()->route('admin-commentaire')->with('success', 'suppression éffectué');
    }
}
