<?php

namespace App\Http\Controllers\Front\Juridique;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ConfidentialiteController extends Controller
{
  public function confidentialite()
  {

    return view('juridique/confidentialite');
  }
}
