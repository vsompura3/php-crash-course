<?php

/* --- $_GET & $_POST Superglobals -- */
// We can pass data through urls and forms using the $_GET and $_POST superglobals.

if(isset($_POST['submit'])){
  echo $_POST['name'];
  echo '<br>';
  echo $_POST['age'];
}


?>
<br>
<a href="<?php echo $_SERVER['PHP_SELF'];?>?name=Vaibhav&age=23">CLICK</a>

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