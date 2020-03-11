<?php


namespace App\CustomRelations\AntiquePeriod;


trait CustomRelationConf
{
    /**
     * The related tables
     *
     * @var array
     */
    protected $tables = [
        'antiques',
        'periods'
    ];

    /**
     * The custom join which relates the tables
     *
     * @param \Illuminate\Database\Query\JoinClause $join
     */
    public function customJoin($join)
    {
        $join->on('periods.start_year', '<=', 'antiques.year')
            ->on('periods.end_year', '>=', 'antiques.year');
    }
}
