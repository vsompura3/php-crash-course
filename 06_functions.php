<?php

$PI = 3.14;

// Functions
  function registerUser($email){
    global $PI;
    echo $PI;
    echo "<br><p>$email's Registered...</p>";
  }

  registerUser('John');

  $multiply = fn($a,$b) => $a * $b;

  echo $multiply(4,5);

?>

<style>
  p{
    font-family: Arial, Helvetica, sans-serif;
    font-weight: bold;
  }
</style>