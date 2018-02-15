<?php

namespace App\Http\Controllers\Admin\Lieux;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Lieux;

class AdminLieuxController extends Controller
{
  // affichage des lieux dans l'admin
  public function listing()
    {
        // $articles = Article::all();

        $lieux = Lieux::orderBy('created_at', 'desc')->paginate(5);
        return view('admin/lieux/adminlieux', compact('lieux'));
    }

  // suppression des lieux
  public function deleteAction($id)
  {
    $lieux = Lieux::findOrFail($id);
    $lieux->delete();

    return redirect()->route('adminlieux')->with('success', 'suppression éffectué');
  }


}
