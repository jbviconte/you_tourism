<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\AjoutRequest;

class AjoutController extends Controller
{
    public function ajoutForm()
    {
      return view('ajout/ajout');
    }

    public function action(AjoutRequest $request)
    {
      return redirect()->route('home')->with('status', 'lieu ajouté !');
    }

}
