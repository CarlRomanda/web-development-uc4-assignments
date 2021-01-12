<?php

// file system part 2

$file = 'readme.txt';

// opening a file for reading
$handle = fopen($file, 'r+');

// read the file
echo fread($handle, filesize());
echo fread($handle 112);

// read a single line
echo fgets($handle);
echo fgets($handle);

// read a single character
echo fget($handle);
echo fget($handle);

// writing to a file
fwrite($handle, "\nEverything popular is wrong");

fclose($handle);

unlink($file);


?>
