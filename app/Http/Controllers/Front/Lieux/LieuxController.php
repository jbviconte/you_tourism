<?php

namespace App\Http\Controllers\Front\Lieux;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests\CommentaireRequest;
use App\Commentaire;
use App\User;
use App\Lieux;
use Auth;
use Carbon\Carbon;


class LieuxController extends Controller
{

  public function index()
  {
    return view('single');
  }

  // obtenir tous les lieux publier
  public function lieux()
  {


    $lieux = Lieux::where('status','=','publish')->paginate(5);



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
  //public function commentaireNew(CommentaireRequest $request, $id)
  public function commentaireNew(Request $request, $id)
  {

    $lieu = Lieux::findOrFail($id);

    $rules = ['commentaire' => 'required|min:5', 'content' => 'required|min:10|max:255'];
    $validate = \Validator::make($request->all(), $rules);

     if ($validate->fails()) {
       return response()->json([
           'errors' => $validate->errors()
       ]);
     }


     ////////////////////////////////////////////////////////
     // Faire plutot un insert +++ d'un nouveau comment
     ////////////////////////////////////////////////////////

     $comment = $request->all();

     Commentaire::insert([
       'commentaire'  => $comment['commentaire'],
       'content'      => $comment['content'],
       'user_id'      => Auth::user()->id,
       'lieu_id'      => $id,
       'created_at'   => Carbon::now(),
     ]);

    return response()->json([
        'success' => true,
    ]);

  }

}
