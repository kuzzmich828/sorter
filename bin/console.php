#!/usr/bin/env php
<?php
/**
 * Usings with PHP 7.0
 */
use \App\{SortStrategy, SortAsc, SortDesc, NullObjectSorter};

require_once __DIR__ . '/../vendor/autoload.php';

$stringArray = ['a','v','b','z'];
$intArray = [3,1,5,8];

$sorter = new SortStrategy(new SortAsc());
$result = $sorter->sort($intArray);
print_r($result);
$result = $sorter->sort($stringArray);
print_r($result);

$sorter->setMethod(new SortDesc());
$result = $sorter->sort($intArray);
print_r($result);
$result = $sorter->sort($stringArray);
print_r($result);

$sorter->setMethod(new NullObjectSorter());
$result = $sorter->sort($intArray);
print_r($result);
