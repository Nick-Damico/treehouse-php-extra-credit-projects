<?php
$display_name = "Nicholas D'Amico";
$year = date("Y");
date_default_timezone_set('America/New_York');
$current_date = Date("M j, h:m a");
$time_of_day = Date("a");
$hour_day = Date("h");

if ($time_of_day == "am") {
  $welcome_msg = "Good Morning!";
} elseif ($hour_day <= 5) {
  $welcome_msg = "Good Afternoon!";
} else {
  $welcome_msg = "Good Evening.";
}
?>

<!DOCTYPE html>
<html>
  <head>
  	<meta charset=utf-8>
  	<title>PHP by: <?php echo $display_name; ?></title>
  	<link href="css/style.css" rel="stylesheet" />
  </head>

  <body>
    <div id="wrap">
        <section class="sidebar text-center">
          <div class="avatar">
            <img src="img/logo.png" alt="Alt For Image">
          </div>
          <h1><?php echo $display_name; ?></h1>
          <p>Contact:<br />
          <a href="mailto:">EMAIL</a></p>
          <hr />
          <ul class="social">
            <li><a href=""><span class="icon twitter"></span></a></li>
          </ul>
          <hr />
          <p>Today: <?php echo $current_date; ?></p>
          <p>

          </p>
        </section>
        <section class="main">
          <i><?php echo $welcome_msg; ?> Welcome to</i>
          <h1>My First PHP Page</h1>

          <h2>Unit Conversion</h2>
            <?php include 'inc/units.php'; ?>
          <hr />

          <h2>Daily Exercise</h2>
            <?php include 'inc/exercise.php'; ?>
        </section>
    </div>
    <section class="footer text-center">
      &copy;
      <?php
        echo $year;
        echo " $display_name.";
        echo " Last modified: ";
        echo  date ("F d Y", getlastmod());
      ?>
    </section>
  </body>
</html>
