<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lieux extends Model
{
  protected $table = 'lieux';

  protected $fillable = ['lieu', 'content', 'status', 'updated_at', 'user_id', 'status', 'name_image','new_name_image', 'path_image'];


  public function user()
  {
    return $this->belongsTo('\App\Commentaires');
  }
}
