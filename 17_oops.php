<?php 

// OOP in PHP
/* 
  From PHP5 onwards you can write php in either in a procedural
  or object oriented way. OOP consists of classes that can hold
  "properties" and "methods". Objects can be created from classes.
*/

class User{

  // Access Modifiers: public, private, protected
  /* 
    public : can be accessed from anywhere.
    private: can only be accessed from inside of the class.
    protected: can only be accessed from inside of the class and by inheriting classes.
  */

  // Properties are attributes that belong to a class
  public $name;
  public $email;
  public $password;

  // Constructor is a function that runs when an object is instanciated
  public function __construct($name, $email, $password){
    $this->name = $name;
    $this->email = $email;
    $this->password = $password;
  }

  // Methods are functions that belong to a class
  function setName($name){
    $this->name = $name;
  }

  function getName(){
    return $this->name;
  }
}

// Instanciate an object
$user1 = new User('Vaibhav', 'vsompura3@gmail.com', 'bb8ANDr2d2');
$user2 = new User('Vidhi','vidhi31@gmail.com', 'Krishna@123');

// $user1->setName('Vaibhav');
// $user2->setName('John');
// var_dump($user1);
// var_dump($user2);
// echo $user1->getName();
// echo $user2->getName();

// Inheritance
class Employee extends User{
  public $title;

  public function __construct($name, $email, $password, $title) {
    parent::__construct($name,$email,$password);
    $this->title = $title;
  }

  public function getTitle(){
    return $this->title;
  }
}

$emp1 = new Employee('Shivam','shivjais69@gmail.com','s@mj@is','Developer');
echo $emp1->getTitle();

?>

<style>
  *{
    font-family: Arial, Helvetica, sans-serif;
    font-weight: 500;
    text-align: justify;
  }
  p{
    color: firebrick;
    line-height: 1;
    margin: 0;
    padding: 0;
  }
</style>