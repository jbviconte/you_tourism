<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminLieuxController extends Controller
{

  public function listing()
    {
        // $articles = Article::all();

        $articles = Article::orderBy('created_at', 'desc')->paginate(5);
        return view('lieux', compact('lieux'));
    }

  public function lieux()
  {
    return view('lieux');
  }

}
