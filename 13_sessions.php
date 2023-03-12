<?php

/* ------------ Sessions ------------ */

/*
  Sessions are a way to store information (in variables) to be used across multiple pages.
  Unlike cookies, sessions are stored on the server.
*/

session_start();

if(isset($_POST['submit'])){
  $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_SPECIAL_CHARS);
  $password = $_POST['password'];

  if ($username == 'John' && $password == 'password') {
    $_SESSION['username'] = $username;
    header('Location: /php-crash-course/extras/dashboard.php');
  } else {
    echo "Incorrect Login";
  }
}


?>

<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
  <fieldset>
    <label for="username">Username:</label>
    <input type="text" name="username" id="username">
  </fieldset>
  <fieldset>
    <label for="password">Password:</label>
    <input type="password" name="password" id="password">
  </fieldset>
  <button name="submit">Submit</button>
</form>

<style>
  *{
    font-family: Arial, Helvetica, sans-serif;
  }
  form {
    display: grid;
    gap: .5em;
    margin-top: 1em;
  }
  fieldset{
    display: grid;
    grid-template-columns: 25% auto;
    align-items: center;
  }
  button{
    padding: .5em 1em;
    font-size: 1.25rem;
  }
  label{
    font-size: 1.25rem;
  }
  input{
    padding: .5em 1em;
  }
</style>

