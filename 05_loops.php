<?php

// Loops

// for ($i=0; $i < 10; $i++) { 
//   echo '<span>Number</span> ' . $i + 1 . '<br>' ;
// }

// $x = 1;
// while ($x <= 10) {
//   echo '<span>Number</span> ' . $x . '<br>' ;
//   $x++;
// }

$posts = ['The New York Times', 'The Washington Posts','Bloomberg'];

// for ($x=0; $x < count($posts); $x++) { 
//   echo $posts[$x] . '<br>';
// }

foreach ($posts as $index => $post) {
  echo "$index - $post <br>";
}

?>