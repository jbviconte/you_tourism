<?php

namespace App\Http\Controllers\Front\Lieux;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\CommentaireRequest;
use App\Commentaire;
use App\User;
use App\Lieux;
use Auth;

class LieuxController extends Controller
{

  // obtenir tous les lieux publier
  public function lieux()
  {

    $lieux = Lieux::where('status','=','publish')->paginate(6);


      return view('lieux/lieux', compact('lieux'));
  }

  //obtenir un seul lieu et tous les commentaire de ce lieu
  public function single($id)
  {
    // $lieux = Lieux::all()->where('id', $id);
    $lieux = \DB::table('Lieux')->where('lieux.id', $id)
                        ->join('users', 'lieux.user_id', '=', 'users.id')
                        ->select('lieux.*', 'users.name')
                        ->get();

    $commentaires = \DB::table('commentaire')->where('lieu_id', $id)
                        ->join('users', 'commentaire.user_id', '=', 'users.id')
                        ->select('commentaire.*', 'users.name')
                        ->paginate(10);

      return view('lieux/single', compact('lieux', 'commentaires'));
  }


  //poster un commentaire
  public function commentaireNew(CommentaireRequest $request, $id)
  {

    $inputs = array_merge($request->all(), [
            'user_id' => Auth::id(),
            'lieu_id' => $id,
          ]);

    Commentaire::create($inputs);

    // return redirect()->route('lieux')->with('success', 'commentaire posté');

  }
}
