#!/usr/bin/env php
<?php

use \App\Sorter\{Sorter, SortAsc, SortDesc, NullObjectSorter};

require_once __DIR__ . '/../vendor/autoload.php';

$stringArray = ['a','v','b','z'];
$intArray = [3,1,5,8];

$sorter = new Sorter(new SortAsc());
$result = $sorter->sort($intArray);
print_r($result);
$result = $sorter->sort($stringArray);
print_r($result);

$sorter->setSortingMethod(new SortDesc());
$result = $sorter->sort($intArray);
print_r($result);
$result = $sorter->sort($stringArray);
print_r($result);

$sorter->setSortingMethod(new NullObjectSorter());
$result = $sorter->sort($intArray);
print_r($result);
