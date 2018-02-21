<?php

namespace App\Http\Controllers\Front\Commentaire;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\CommentaireRequest;
use App\Commentaire;
use App\User;
use App\Lieux;
use Auth;

class CommentaireController extends Controller
{

    // public function commentaireNew(CommentaireRequest $request, $id) {
    //
    //   $inputs = array_merge($request->all(), [
    //           'user_id' => Auth::id(),
    //           'lieu_id' => $id,
    //         ]);
    //
    //   Commentaire::create($inputs);
    //
    //   return redirect()->route('lieux/single')->with('success', 'commentaire posté');
    //
    // }

    public function commentaireDelete() {

    }


}
