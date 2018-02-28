<?php

namespace App\Http\Controllers\Front\Juridique;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ConditionsController extends Controller
{
  public function conditions()
  {

    return view('juridique/cg');
  }
}
