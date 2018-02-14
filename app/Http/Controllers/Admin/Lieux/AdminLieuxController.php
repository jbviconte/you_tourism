<?php

namespace App\Http\Controllers\Admin\Lieux;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Lieux;

class AdminLieuxController extends Controller
{

  public function listing()
    {
        // $articles = Article::all();

        $lieux = Lieux::orderBy('created_at', 'desc')->paginate(5);
        return view('admin/lieux/lieux', compact('lieux'));
    }


  public function lieux()
  {
    return view('lieux');
  }

}
