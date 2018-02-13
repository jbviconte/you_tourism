<?php

namespace App\Http\Controllers\Front\Lieux;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Lieux;

class LieuxController extends Controller
{
  public function lieux()
  {

    $lieux = Lieux::all();
      return view('lieux/lieux', compact('lieux'));
  }
}
