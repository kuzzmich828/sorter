<?php


namespace App\Sorter;

final class SortAsc implements SorterInterface
{
    /**
     * @param $array
     * @return mixed
     */
    public function sort($array) : array
    {
        \sort($array);
        return $array;
    }
}
