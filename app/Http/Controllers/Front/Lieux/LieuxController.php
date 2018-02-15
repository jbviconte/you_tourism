<?php

namespace App\Http\Controllers\Front\Lieux;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
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
    $lieux = Lieux::all()->where('id', $id);
      return view('lieux/single', compact('lieux'));
  }
}
