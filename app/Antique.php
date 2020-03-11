<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Antique extends Model
{
  public function periods()
  {
      return $this->hasMany('App\CustomRelations\AntiquePeriod\Period');
  }
}
