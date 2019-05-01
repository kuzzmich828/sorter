<?php


namespace App;

/**
 * Class SortAsc
 * @package App
 * Class for Sort array by asc
 */
final class SortAsc implements SorterInterface
{
    /**
     * @param $array
     * @return mixed
     */
    public function sort($array)
    {
        \sort($array);
        return $array;
    }
}
