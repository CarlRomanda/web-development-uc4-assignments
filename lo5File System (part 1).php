<?php

// file system part 1

// $quotes = readfile ('readmee.txt');
// echo $quotes;

$file = 'readme.txt';

if(file_exist($file)){

    // // read file
    // echo readfile($file) . '<br />';

    // // copy file
    // copy($file, 'quotes.txt') . '<br />';

    // // absolute path
    // echo realpath($file) . '<br />'

    // // file size
    // echo filesize($file) . '<br />'

    // // rename file
    // rename($file, 'text.txt');

} else {
    echo 'file does not exist';
}

// make directory
    mkdir('quotes')
?>
