<?php

// store each exercise in a string variable
$exercise1 = 'Display "Hello World!"';
$exercise2 = 'Convert Pounds to Kilograms';
$exercise3 = 'Convert Kilograms to Pounds';
$exercise4 = 'Convert Miles to Kilometers';
$exercise5 = 'Convert Kilometers to Miles';
$exercise6 = 'Month long string of the day';
$exercise7 = 'String of the day with levels';

// create a variable containing the day of the week
$day_of_week = date('N');
// use an if statement to test for the day of the week
// if ($day_of_week == 1) {
//   echo $exercise1;
// } elseif ($day_of_week == 2) {
//   echo $exercise2;
// } elseif ($day_of_week == 3) {
//   echo $exercise3;
// } elseif ($day_of_week == 4) {
//   echo $exercise4;
// } elseif ($day_of_week == 5) {
//   echo $exercise5;
// } elseif ($day_of_week == 6) {
//   echo $exercise6;
// } else {
//   echo $exercise7;
// }
$day_str;
$exercise_todo;
// Convert original example code to a switch statement.
switch ($day_of_week) {
  case 1:
    $day_str = 'Monday';
    $exercise_todo = $exercise1;
    break;
  case 2:
    $day_str = 'Tuesday';
    $exercise_todo = $exercise2;
    break;
  case 3:
    $day_str = 'Wednesday';
    $exercise_todo = $exercise3;
    break;
  case 4:
    $day_str = 'Thursday';
    $exercise_todo = $exercise4;
    break;
  case 5:
    $day_str = 'Friday';
    $exercise_todo = $exercise5;
    break;
  case 6:
    $day_str = 'Saturday';
    $exercise_todo = $exercise6;
    break;
  case 7:
    $day_str = 'Sunday';
    $exercise_todo = $exercise7;
    break;
}

$output_msg = "It's $day_str, that means practice PHP exercise \"";
$output_msg .= $exercise_todo. "\".\n";

echo $output_msg;

?>
