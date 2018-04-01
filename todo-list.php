<?php
include 'list.php';
$order = array();
$status = 'all';
$field = 'priority';

// order just becomes an array of numbers.
if ($status == 'all') {
  $order = array_keys($list);
  // [ 0, 1, 2, 3, 4];
} else {
  forEach($list as $key => $item) {
    if ($item['complete'] == $status) {
      $order[] = $key;
      // [ 2, 4];
    }
  };

};

if ($field) {
  $sort = array();
  forEach($order as $id) {
   $sort[$id] = $list[$id][$field];
  }
  asort($sort);
  $order = array_keys($sort);
};

echo '<table align="center">';
echo '<thead>';
echo '<tr>';
echo '<th>Title</th>';
echo '<th>Priority</th>';
echo '<th>Due Date</th>';
echo '<th>Complete</th>';
echo '</tr>';

forEach($order as $id) {
   echo '<tr>';
   echo '<td>' . $list[$id]['title'] . '</td>';
   echo '<td>' . $list[$id]['priority'] . '</td>';
   echo '<td>' . $list[$id]['due'] . '</td>';
   echo '<td>';
   if ($list[$id]['complete']) {
    echo 'Yes';
   } else {
    echo 'No';
   };
   echo '</td>';
   echo '</tr>';
};

//var_dump($list);
?>
