<?php

/* --- Sanitizing the inputs -- */

if(isset($_POST['submit'])){
  echo htmlspecialchars($_POST['name']);
  echo '<br>';
  echo htmlspecialchars($_POST['age']);
  echo '<br>';
  echo filter_input(INPUT_POST, 'name', FILTER_SANITIZE_SPECIAL_CHARS);
}


?>

<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
  <fieldset>
    <label for="name">Name:</label>
    <input type="text" name="name" id="name">
  </fieldset>
  <fieldset>
    <label for="age">Age:</label>
    <input type="text" name="age" id="age">
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
    grid-template-columns: 15% auto;
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