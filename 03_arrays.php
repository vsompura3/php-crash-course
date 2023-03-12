<?php
  // Simple Array
  $numbers = [1,2,3,4,5];
  $characters = array('Joel','Ellie','Sam','Tess','Tommy');
  // print_r($numbers);
  // var_dump($characters);

  // Associative Array
  $colors = [
    1 => 'red',
    4 => 'blue',
    6 => 'green',
  ];

  // var_dump($colors);

  $person = [
    'fName' => 'Vaibhav',
    'lName' => 'Sompura',
    'email' => 'vsompura3@gmail.com',
  ];

  // var_dump($person); 
  // echo $person['fName'];

  $people = [
    [
      'fName' => 'Vaibhav',
      'lName' => 'Sompura',
      'email' => 'vsompura3@gmail.com',
    ], 
    [
      'fName' => 'Vidhi',
      'lName' => 'Sompura',
      'email' => 'vidhisompura31@gmail.com',
    ], 
    [
      'fName' => 'Shivam',
      'lName' => 'Jaiswal',
      'email' => 'sjaiswal@gmail.com',
    ]
  ];

  echo $people[1]['fName'];
  echo $people[1]['lName'];

  var_dump(json_encode($people))

?>