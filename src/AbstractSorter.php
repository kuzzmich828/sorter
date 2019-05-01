<?php

namespace App;

/**
 * Class AbstractSorter
 * @package App
 */
abstract class AbstractSorter implements SorterInterface
{
    /**
     * @param $arg
     * @return bool
     */
    public function validate($arg)
    {
        if (!is_array($arg)) {
            throw new \InvalidArgumentException('Argument must be array');
        }
        return true;
    }
}
