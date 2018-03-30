<?php
// multi-dimensional Arrays with new syntax [ ] in place of array( );
$list[] = [
 'title' => 'laundry',
 'priority' => 2,
 'due' => '',
 'complete' => true
];

$list[] = [
  'title' => 'clean out refridgerator',
  'priority' => 3,
  'due' => '07/30/2018',
  'complete' => false
];

$contacts = array(
  [
    'name'  => 'Alena Holligan',
    'email' => 'alena.holligan@teamtreehouse.com',
  ],
  [
    'name'  => 'Dave McFarland',
    'email' => 'dave.mcfarland@teamtreehouse.com',
  ],
  [
    'name'  => 'Treasure Porth',
    'email' => 'treasure.porth@teamtreehouse.com',
  ],
  [
    'name'  => 'Andrew Chalkley',
    'email' => 'andrew.chalkley@teamtreehouse.com',
  ]
);

//
//echo "<ul>\n";
////$contacts[0] will return 'Alena Holligan' in our simple array of names.
//echo "<li>" . $contacts[0]["name"] . " : " . $contacts[0]["email"] . "</li>\n";
//echo "<li>" . $contacts[1]["name"] . " : " . $contacts[1]["email"] . "</li>\n";
//echo "<li>" . $contacts[2]["name"] . " : " . $contacts[2]["email"] . "</li>\n";
//echo "<li>" . $contacts[3]["name"] . " : " . $contacts[3]["email"] . "</li>\n";
//echo "</ul>\n";
//

echo "<ul>\n";
//$contacts[0] will return 'Alena Holligan' in our simple array of names.
echo "<li>$contacts[0]['name'] : $contacts[0]['email']</li>\n";
//echo "<li>" . $contacts[1]["name"] . " : " . $contacts[1]["email"] . "</li>\n";
//echo "<li>" . $contacts[2]["name"] . " : " . $contacts[2]["email"] . "</li>\n";
//echo "<li>" . $contacts[3]["name"] . " : " . $contacts[3]["email"] . "</li>\n";
echo "</ul>\n";


?>
