/**
  * Treehouse Extra Switch Statement Challenge.
  *
  * Getting more familiar with logical operators, conditional statements,
  * switch statements, variable declaration|assignment, and string operators.
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
$student_name = 'lil\' Jimmy,';
$student_avg = '70';
$student_grade = 12;
$output_msg;

echo "Dear $student_name" . "\n";
if ($student_avg >= 70) {
  switch($student_grade) {
    case 9:
      $output_msg = "Congratulations on completing your freshman year in High School! We’ll see you on September 1st for the start of your sophomore year!";
      break;
    case 10:
      $output_msg = "Congratulations on completing your sophomore year in High School! We’ll see you on September 1st for the start of your junior year!";
      break;
    case 11:
      $output_msg = "Congratulations on completing your junior year in High School! We’ll see you on September 1st for the start of your senior year!";
      break;
    case 12:
      $output_msg = "Congratulations! You’ve graduated High School! Don’t forget to come back and visit.";
      break;
    default:
      $output_msg = $student_name . "! You never went to scoool!";
      break;
  }
} else {
 $output_msg = "We look forward to seeing you at summer school, beginning July 1st!";
}

echo $output_msg . "\n";

//Students class average <70%:
//Dear Alena Holligan,
//We look forward to seeing you at summer school, beginning July 1st!

//Student class average >=70% and current grade 9
//Dear Alena Holligan,
//Congratulations on completing your freshman year in High School! We’ll see you on September 1st for the start of your sophomore year!

//Student class average >=70% and current grade 10
//Dear Alena Holligan,
//Congratulations on completing your sophomore year in High School! We’ll see you on September 1st for the start of your junior year!

//Student class average >=70% and current grade 11
//Dear Alena Holligan,
//Congratulations on completing your junior year in High School! We’ll see you on September 1st for the start of your senior year!

//Student class average >= 70% and current grade 12
//Dear Alena Holligan,
//Congratulations! You’ve graduated High School! Don’t forget to come back and visit.

?>
