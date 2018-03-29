/**
  * Treehouse Extra Credit Challenge reverse Unit conversions tool.
  *
  * First extra credit challenge of Treehouse's PHP intro course where
  * the student is tasked with reverse the in lab conversion tool to
  * convert kg to lb, and km to miles. And output a message with the
  * information to the console using echo.
  *
  * @source Nick D'Amico, PHP student at Treehouse
  *
  * @param string $myArgument With a *description* of this argument, these may also
  *    span multiple lines.
  *
  * @return type (a PHP Programmer ;)
  *
  * @author Nicholas D'Amico
  */

<?php

// Unit weight conversions;
$kg_to_lbs = 2.2;
$lb_to_kg = 0.453592;
$mile_to_km = 1.60934;

$weight_total_kg = 63;

echo "Hi, I'm Nick.\n";
echo "I weigh ";
echo $weight_total_kg;
echo "kg...\n";
echo "What?! Not familiar with Kilograms?\n";
echo "Well, then I weigh ";
echo $weight_total_kg * $kg_to_lbs;
echo "lbs.\n";
echo "\n\n";

// Unit distance coversions;
$mile_to_km = 1.60934;
$km_to_mile = 0.621371;

$distance_work_km = 56;

echo "I live in Gatlinburg, TN but work\n";
echo "in Knoxville TN which is ";
echo $distance_work_km;
echo "km from home.\n";
echo "What?! You aren't familiar with km either?\n";
echo "Well thats ";
echo $distance_work_km * $km_to_mile;
echo " miles from home.\n";

 ?>
