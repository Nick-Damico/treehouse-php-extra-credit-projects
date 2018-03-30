<?php

$learn = array(
  'conditionals',
  'arrarys',
  'loops'
);

// Accessing item in Array
$learn[2];

// Will list out items in an array.
//echo implode("\n", $learn);

// example of array.
$info = array('coffee', 'brown', 'caffeine');

// Using list()
list($coffee, , ,) = $info;

// Using range()
$alpha = range(10, 20);

// Removing first item of array
array_shift( $learn );

// Remove from end of array
array_pop( $learn );

$colors = array("red", "green", "blue", "yellow");

// Add to front of array
array_unshift($colors, 'pink');

// Add to end of array
array_push($colors, 'black');

// add to front with array_splice
array_splice($colors, 0, 0, 'orange');

// add to end with array_splice
array_splice($colors, -1, 1, 'tan');

$colors[] = 'teal';
var_dump($colors);


// Remove specific item of array
// Warning, unset() leaves holes in the array,
// it does not restructure the array to file in where
// the removed array positions, if you remove array_item[2].
// The array will have no index number of 2 any longer
unset($learn[1], $learn[0]);

// array_values re-indexes the array
$learn = array_values($learn);

?>
