<?php 

// index arrays

$peopleOne = ['shaun', 'crystal', 'ryu'];
// echo $peopleOne[1];

$peopleTwo = ('ken', 'chun-li');
// echo $peopleTwo[1]

$ages [20, 30, 40, 50];
//  print_r($ages);

$ages[1] = 25;
// print_r($ages);

$ages[1] = 60;
// print_r($ages);

array_push($ages, 70);
// print_r($ages);

// echo count($ages);

$peopleThree = array_merge($peopleOne, $peopleTwo);
// print_r($peopleThree);

// associative arrays (key & value pairs)

$ninjasOne = ['shaun' => 'black', 'mario' => 'orange', 'luigi' => 'brown'];
// echo $ninjasOne['mario'];
print_r($ninjasOne);

$ninjasTwo = array('bowser'=>'green', 'peach'=>'yellow');
// print_r($ninjasTwo);

$ninjasTwo['peach'] = 'pink';
// print_r($ninjasTwo);

// echo count($ninjasOne);

$ninjasThree = array_merge($ninjasOne, $ninjasTwo);
print_r($ninjasThree);
?>

<!DOCTYPE html>
<html>
<head>
   <title> Your First PHP File </title>
</head>
<body>


</body>
</html>