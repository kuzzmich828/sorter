<?php

namespace App\Sorter;
/**
 * Class SortDesc
 * @package App
 * Class for Sort array by desc
 */
final class SortDesc implements SorterInterface
{
    /**
     * @param $array
     * @return mixed
     */
    public function sort($array) : array
    {
        \rsort($array);
        return $array;
    }
}
