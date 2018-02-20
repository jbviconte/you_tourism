<?php

namespace App\Http\Controllers\Front\Ajout;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\AjoutRequest;
use App\Lieux;
use App\User;
use App\Service\PathUpload;
use \Image;
use Auth;

class AjoutController extends Controller
{



    public function ajoutForm()
    {

      return view('ajout/ajout');
    }

    public function action(AjoutRequest $request)
    {

      if(!empty($request->image)) {

          $path = new PathUpload($request->image, 'lieu');
          $request->image->move(public_path($path->path()), $path->imageName());

          $inputs = array_merge($request->all(),[

            'user_id' => Auth::user()->id,
            'name_image'  => $path->originalName(),
            'new_name_image' => $path->imageName(),
            'path_image' => $path->path(),
          ]);

      } else {
        $inputs = array_merge($request->all(),[
          'user_id' => Auth::user()->id,
        ]);
      }

      Lieux::create($inputs);
      return redirect()->route('lieux')->with('success', 'lieu ajouté !');
    }

}
