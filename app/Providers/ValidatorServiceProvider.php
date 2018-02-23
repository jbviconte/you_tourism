<?php

namespace App\Providers;

use Illuminate\Support\Facades\Validator;
use Illuminate\Support\ServiceProvider;

Class ValidatorServiceProvider extends ServiceProvider {

  public function boot()
  {
    Validator::extend('commentvalid', function($attribute, $value, $parameters)
    {
      return $value == "commentvalid";
    });
  }

  public function register()
  {

  }
}
