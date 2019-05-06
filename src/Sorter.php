<?php

namespace App\Sorter;
/**
 * Class SortStrategy
 * @package App
 * Class for implements pattern strategy
 */
final class Sorter extends AbstractSorter
{

    /**
     * @var SorterInterface
     */
    private $strategy;

    /**
     * SortStrategy constructor.
     * @param SorterInterface $strategy
     */
    public function __construct(SorterInterface $strategy)
    {
        $this->strategy = $strategy;
    }

    /**
     * @param SorterInterface $strategy
     */
    public function setMethod(SorterInterface $strategy)
    {
        $this->strategy = $strategy;
    }

    /**
     * @param $array
     * @return mixed
     */
    public function sort($array)
    {
        if ($this->validate($array)) {
            return $this->strategy->sort($array);
        }
    }
}
