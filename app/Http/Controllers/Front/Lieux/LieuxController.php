<?php

namespace App\Http\Controllers\Front\Lieux;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Commentaire;
use App\User;
use App\Lieux;

class LieuxController extends Controller
{
  public function lieux()
  {

    $lieux = Lieux::where('status','=','publish')->paginate(6);


      return view('lieux/lieux', compact('lieux'));
  }

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
                        ->get();

      return view('lieux/single', compact('lieux', 'commentaires'));
  }

  public function commentaire($id) {



    return view('lieux/single', compact('commentaires'));

  }
}
