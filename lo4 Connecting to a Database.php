<?php

// connect to database
$conn = mysqli_connect('location', 'shaun', 'test1234', 'ninja_pizzas');

// check connection 
if($conn){
    echo 'Connection error: ' . mysqli_connect_error();
}

?>

<!DOCTYPE html>
<html>

    <?php include('templates/header.php'); ?>
    <?php include('templates/footer.php'); ?>

</html>