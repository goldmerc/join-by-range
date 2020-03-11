<?php


namespace App\CustomRelations;


use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;

trait CustomRelation
{
    /**
     * The parent table in the relationship.
     *
     * @var string
     */
    protected $parentTable = "";

    /**
     * Set the default foreign key name for the model.
     *
     * @return string
     */
    public function getForeignKeyForParent()
    {
        return rtrim($this->parentTable, 's') . '_id';
    }

    /**
     * Get a new query builder for the model's table.
     *
     * This is used for most relationship queries
     *
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function newQuery()
    {
        return parent::newQuery()
            ->fromSub($this->getRelationshipTableQuery(), $this->getTable());
    }

    /**
     * Get a new query builder with no relationships loaded.
     *
     * This is used for most whereHas style relationship queries
     *
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function newQueryWithoutRelationships()
    {
        return parent::newQueryWithoutRelationships()
            ->fromSub($this->getRelationshipTableQuery(), $this->getTable());
    }

    /**
     * Get a new query builder for the relationship table
     *
     * @return \Illuminate\Database\Query\Builder
     */
    public function getRelationshipTableQuery()
    {
        // Which of the related $tables is the parent table?
        $this->parentTable = Arr::first(array_diff($this->tables, array($this->getTable())));

        return DB::table($this->getTable())->select($this->getTable() . '.*', $this->parentTable . '.id AS ' . $this->getForeignKeyForParent())
            ->join($this->parentTable, function ($join) {
                $this->customJoin($join);
            });
    }
}
