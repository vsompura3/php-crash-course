<?php

$age = 23;

if ($age >= 18) {
  echo 'Eligible to vote';
} else{
  echo 'Not eligible to vote';
}

$posts = ['First Post'];

$firstPost =  !empty($posts) ? $posts[0] : 'No Posts';
$secondPost = !empty($posts) ?? null;

echo $firstPost;
echo $secondPost;

?>