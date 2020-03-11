<?php


namespace App\CustomRelations\AntiquePeriod;

use App\Antique AS BaseAntique;
use App\CustomRelations\CustomRelation;

class Antique extends BaseAntique
{
    use CustomRelation, CustomRelationConf;
}
