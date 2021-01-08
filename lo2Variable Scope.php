<?php 

// variable scope

// local vars

function myfunc(){
    $price = 10;
    echo $price;
}

myfunc();
echo $age;


function myFunctionTwo($age){
    echo $age;
}

myFunctionTwo(25);
echo $age;

// global variables

function sayHello(){
    global $name;
    $name = 'yoshi';
    echo "hello $name";
}

sayHello();
echo $name;

function sayBye($name){
    $name = 'mario';
    echo "bye $name";
}

sayBye($name);
echo $name;
?>
