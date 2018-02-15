<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lieux extends Model
{
  protected $table = 'lieux';

  protected $fillable = ['lieu', 'content', 'status', 'user_id', 'name_image','new_name_image', 'path_image'];
}
