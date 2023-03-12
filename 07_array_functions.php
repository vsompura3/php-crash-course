<?php

// Array functions
$characters = array('Joel','Ellie','Sam','Tess');

// get array size
echo count($characters);
echo '<br>';

// search in array
var_dump(in_array('Joel', $characters));

// Add to array
$characters[] = "Tommy";
array_push($characters,'Sarah','Marlene');
array_unshift($characters,'The Last of Us');
print_r($characters);

echo '<br><br><hr>';

// Remove from array
array_pop($characters);
array_shift($characters);
unset($characters[4]);
print_r($characters);

// Split into chunks
$chunkedCharacters = array_chunk($characters,2);
print_r($chunkedCharacters);

echo '<br><br><hr>';

$arr1 = [1,2,3];
$arr2 = [4,5,6];

$arr3 = array_merge($arr1,$arr2);
$arr4 = [...$arr1, ...$arr2];
print_r($arr3);
echo '<br>';
print_r($arr4);

echo '<br><br><hr>';

$a = ['green','red','yellow'];
$b = ['avocado','apple','banana'];
$c = array_combine($a,$b);
print_r($c);
echo '<br><br><hr>';

$numbers = range(1,20);
print_r($numbers);
$newNumbers = array_map(function($number){
  return "Number  $number";
},$numbers);

print_r($newNumbers)



?>