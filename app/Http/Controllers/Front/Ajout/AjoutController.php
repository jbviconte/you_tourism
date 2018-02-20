<?php

namespace App\Http\Controllers\Front\Ajout;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\AjoutRequest;
use App\Lieux;
use App\User;
use App\Service\PathUpload;
use \Image;
use App\Http\Auth;

class AjoutController extends Controller
{

  protected $user = Auth::user()->id;

    public function ajoutForm()
    {

      return view('ajout/ajout');
    }

    public function action(AjoutRequest $request, $user)
    {

      if(!empty($request->image)) {

          $path = new PathUpload($request->image, 'lieu');
          $request->image->move(public_path($path->path()), $path->imageName());

          $inputs = array_merge($request->all(),[

            'user_id' => $user,
            'name_image'  => $path->originalName(),
            'new_name_image' => $path->imageName(),
            'path_image' => $path->path(),
          ]);

      } else {
        $inputs = array_merge($request->all(),[
          'user_id' => $user
        ]);
      }

      Lieux::create($inputs);
      return redirect()->route('lieux')->with('success', 'lieu ajouté !');
    }

}
