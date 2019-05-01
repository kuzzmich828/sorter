# Design Pattern Strategy

# Installation
- `$ composer install`
- `git clone https://github.com/kuzzmich828/sorter.git`

# Execute
Sort ASC
--------------
```php
$array = ['a','g','b'];
$sorter = new SortStrategy(new SortAsc());
$sorted_array = $sorter->sort($array);
```
Sort DESC
--------------
```php
$array = ['a','g','b'];
$sorter = new SortStrategy(new SortDesc());
$sorted_array = $sorter->sort($array);
```
Change sort strategy
--------------------
```php
...
$sorted_array = $sorter->setMethod(new SortDesc());
$sorted_array = $sorter->sort($array);
```