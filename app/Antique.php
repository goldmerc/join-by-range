<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Antique extends Model
{
  /**
   * Create a new Eloquent Collection instance.
   *
   * @param array $models
   * @return \Illuminate\Database\Eloquent\Collection
   */
  public function newCollection(array $models = [])
  {
      return new JoinByRangeCollection($models);
  }
}
