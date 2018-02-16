<?php

namespace App\Http\Controllers\Front\UserPage;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserPageController extends Controller
{
  public function userpage()
  {
    return view('userpage/userpage');
  }

}
