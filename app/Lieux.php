<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lieux extends Model
{
  protected $table = 'lieux';

  protected $fillable = ['id','lieu', 'content', 'status', 'adresse', 'updated_at', 'user_id', 'status', 'name_image','new_name_image', 'path_image'];


  public function user()
  {
    return $this->belongsToMany('\App\Admin\Commentaires');
    return $this->belongsToMany('\App\Front\Ajout');
  }
}
