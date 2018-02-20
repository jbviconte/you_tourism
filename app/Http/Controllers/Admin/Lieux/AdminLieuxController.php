<?php

namespace App\Http\Controllers\Admin\Lieux;

use Carbon\Carbon;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\AjoutRequest;
use App\User;
use App\Lieux;
use App\Service\PathUpload;


class AdminLieuxController extends Controller
{

  public function __construct(User $request)
  {
      $this->middleware('auth');
      $this->middleware('admin');
  }

  // affichage des lieux dans l'admin
  public function listing()
  {
    // $articles = Article::all();

    $lieux = Lieux::orderBy('created_at', 'desc')->paginate(5);
    return view('admin/lieux/adminlieux', compact('lieux'));
  }

  // suppression des lieux
  public function deleteAction($id)
  {
    $lieux = Lieux::findOrFail($id);
    $lieux->delete();

    return redirect()->route('adminlieux')->with('success', 'suppression éffectué');
  }

  // update des lieux
  public function lieuxUpdate($id)
  {
    $lieux = Lieux::findorfail($id);
    return view('admin/lieux/update', compact('lieux'));
  }

  public function lieuxUpdateAction(AjoutRequest $request, $id)
  {
      $lieu = Lieux::findOrFail($id);

      if(!empty($request->image)) {



          $path = new PathUpload($request->image, 'lieu');
          $request->image->move(public_path($path->path()), $path->imageName());

          $inputs = array_merge($request->all(),[
            'name_image'      => $path->originalName(),
            'new_name_image'  => $path->imageName(),
            'path_image'      => $path->path(),
          ]);
          // Image::make($path->path() . '/' . $path->imageName(),array(
          //      'width' => 300,
          //      'height' => 300,
          //    ))->save($path->path() . '/' . $path->imageName());

        } else {
          $inputs = $request->all();
        }

      $lieu->update($inputs);
      return redirect()->route('adminlieux')->with('success', 'modification éffectué');
  }

  //ajout nouveau lieu
  public function action(AjoutRequest $request)
  {


    if(!empty($request->image)) {

        $path = new PathUpload($request->image, 'lieu');
        $request->image->move(public_path($path->path()), $path->imageName());

        $inputs = array_merge($request->all(),[
          'name_image'  => $path->originalName(),
          'new_name_image' => $path->imageName(),
          'path_image' => $path->path(),
        ]);
        // Image::make($path->path() . '/' . $path->imageName(),array(
        //      'width' => 300,
        //      'height' => 300,
        //    ))->save($path->path() . '/' . $path->imageName());

    } else {
      $inputs = $request->all();
    }

    Lieux::create($inputs);
    return redirect()->route('lieux')->with('success', 'lieu ajouté !');
  }

  public function lieuNew()
  {
    return view('admin/lieux/newadminlieu');
  }

  public function lieuNewAction(AjoutRequest $request)
  {


    if(!empty($request->image)) {

        $path = new PathUpload($request->image, 'lieu');
        $request->image->move(public_path($path->path()), $path->imageName());

        $inputs = array_merge($request->all(),[
          'name_image'  => $path->originalName(),
          'new_name_image' => $path->imageName(),
          'path_image' => $path->path(),
        ]);
        // Image::make($path->path() . '/' . $path->imageName(),array(
    	     //      'width' => 300,
    	     //      'height' => 300,
        //    ))->save($path->path() . '/' . $path->imageName());

    } else {
      $inputs = $request->all();
    }

    Lieux::create($inputs);
    return redirect()->route('adminlieux')->with('success', 'lieu ajouté !');
  }

}
