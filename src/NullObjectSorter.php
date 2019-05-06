<?php

namespace App\Sorter;

class NullObjectSorter implements SorterInterface
{
    /**
     * @param $array
     */
    public function sort($array) : array
    {
        // this is null object
        return $array;
    }
}
