<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Period extends Model
{
  public function scopeJoinByYear($query, $tableName)
  {
      return $query->select('periods.*', $tableName.'.id AS parent_id')
          ->join($tableName, function ($join) use ($tableName) {
              $join->on('periods.start_year', '<=', $tableName . '.year')
                  ->on('periods.end_year', '>=', $tableName . '.year');
          });
  }
}
