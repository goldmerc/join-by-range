<?php


namespace App\CustomRelations\AntiquePeriod;

use App\Period AS BasePeriod;
use App\CustomRelations\CustomRelation;

class Period extends BasePeriod
{
    use CustomRelation, CustomRelationConf;
}
