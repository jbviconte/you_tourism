<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\FormulaireRequest;

class FormulaireController extends Controller
{
    public function form()
    {
      return view('formulaire/formulaire');
    }

    public function action(FormulaireRequest $request)
    {
      return redirect()->route('lieux')->with('status', 'lieu ajouté !');  
    }

}
