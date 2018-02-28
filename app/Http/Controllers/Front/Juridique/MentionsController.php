<?php

namespace App\Http\Controllers\Front\Juridique;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MentionsController extends Controller
{
  public function mentions()
  {

    return view('juridique/mentions-legales');
  }
}
