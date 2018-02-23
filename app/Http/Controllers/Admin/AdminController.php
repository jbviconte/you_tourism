<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use App\Lieux;

class AdminController extends Controller
{

    // public function __construct(User $request)
    // {
    //
    //     $this->middleware('auth');
    //     $this->middleware('admin');
    // }

    public function dashboard()
    {
      // vue utilisateurs sur le dashbaord
      $users = User::orderBy('created_at', 'desc')
                    ->take(5)
                    ->get();

      // vue lieux sur le dashboard
      $lieux = Lieux::orderBy('created_at', 'desc')
                    ->take(5)
                    ->get();

      // compte le nombre utilisateur inscrit
      $userscounts = User::count('id');

      // compte le nombre de lieu
      $lieuxcounts = Lieux::count('id');

      return view('admin/dashboard', compact('users', 'lieux', 'userscounts', 'lieuxcounts'));
    }

}
