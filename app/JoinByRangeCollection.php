<?php


namespace App;

use \Illuminate\Database\Eloquent\Collection;

class JoinByRangeCollection extends Collection
{
    public function loadPeriods()
    {
        // Get a dictionary of periods grouped by parent_id
        $dictionary = \App\Period::joinByYear('antiques')
            ->whereIn('antiques.id', $this->modelKeys())
            ->get()
            ->groupBy('parent_id');

        // Match the periods with the items
        foreach ($this->items as $item) {
            $item->setAttribute('periods', new \Illuminate\Database\Eloquent\Collection(
                $dictionary[$item->id]
            ));
        }

        return $this;
    }
}
