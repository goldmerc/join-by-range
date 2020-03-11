<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Period extends Model
{
  public function antiques()
  {
      return $this->hasMany('App\CustomRelations\AntiquePeriod\Antique');
  }
}
