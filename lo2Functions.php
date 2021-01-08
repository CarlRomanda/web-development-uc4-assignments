<?php 

// functions

function sayHello($name = 'shaun', $time = 'morning'){
    echo "good $time $name";
}

sayHello('mario');
sayHello('yoshi', 'night');

function formatProduct($product){
    echo "{$product['name']} costs £($product['price']} to buy <br />";
    return "{$product['name']} costs £($product['price']} to buy <br />";
}

$formatted = formatProduct(['name'=>'gold star', 'price'=> 20]);
echo $formatted;

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php Tutorial</title>
</head>
<body>
    
</body>
</html>