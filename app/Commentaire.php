<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Commentaire extends Model
{


  protected $table = 'commentaire';

  protected $fillable = ['id', 'commentaire', 'content', 'user_id','lieu_id'];

  public function lieu()
  {
    return $this->hasmany('\App\Lieux');
  }

  public function user()
  {
    return $this->hasmany('\App\User');
  }
}
