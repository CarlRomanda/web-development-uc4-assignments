<?php 

// multi - dimensional arrays

$blogs = [
    ['title'=>'mario party', 'author'=>'mario', 'content'=>'lorem', 'likes'=>30],
    ['title'=>'mario kart cheats', 'author'=>'toad', 'content'=>'lorem', 'likes'=>25],
    ['title'=>'zelda hidden chests', 'author'=>'link', 'content'=>'lorem', 'likes'=>58]
];

// print_r($blogs[1][1]);
// echo $blogs[2]['author'];
// echo count($blogs);

$blogs[] = ['title'=> 'castle party', 'author'=>'peach', 'content'=> 'content'=> 'lorem', 'like'=> 100];

// print_r($blogs);
$popped = array_pop($blogs);
print_r($popped);

?>

<!DOCTYPE html>
<html>
<head>
   <title> Your First PHP File </title>
</head>
<body>


</body>
</html>