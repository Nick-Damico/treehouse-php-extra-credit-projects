<?php

$player_1 = 0;
$player_2 = 0;
$rounds   = 0;

/*
To Win
player must reach a score of 11
player must be a minimum of 2 points higher than opponent
WHILE those conditions are NOT met, a single player will receive 1 point at the end of each round.
*/

while (abs($player_1 - $player_2) < 2 || ($player_1 < 11 && $player_2)) {
  $round++;
  echo "<h2>Round $round</h2>\n";
  if (rand(0,1)) {
    $player_1++;
  } else {
    $player_2++;
  }
  echo "Player1 = $player_1<br />\n";
  echo "Player2 = $player_2</br />\n";
}


?>
