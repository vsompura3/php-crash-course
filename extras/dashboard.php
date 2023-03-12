<?php

session_start();

if (isset($_SESSION['username'])) {
  echo "<h1>Welcome, " . $_SESSION['username']. ".</h1>";
  echo '<a href="logout.php">Log Out</a>';
} else {
  echo "<h1>Welcome, Guest.</h1>";
  echo '<a href="/php-crash-course/13_sessions.php">HOME</a>';
}

?>

<style>
  *{
    font-family: Arial, Helvetica, sans-serif;
  }

  h1{
    font-size: 3rem;
    text-shadow: 0rem .5rem 2rem rgba(0, 0, 0, 0.9);
  }

  a{
    display: inline-block;
    text-decoration: none;
    font-size: 1.25rem;
    background-color: #000;
    color: #fff;
    padding: .5em 1em;
    border: 2px solid #000;
    border-radius: .25em;
    transition: background-color 250ms ease;
  }

  a:hover{
    background-color: #fff;
    color: #000;
  }

</style>