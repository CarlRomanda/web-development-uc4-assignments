<?php

    if(isset($_GET['submit'])){
        echo $_GET['email'];
        echo $_GET['title'];
        echo $_GET['ingredients'];
}

    if(isset($_POST['submit'])){
        echo $_POST['email'];
        echo $_POST['title'];
        echo $_POST['ingredients'];
}
?>

<!DOCTYPE html>
<html>

    <?php include('templates/header.php');?>

    <section class="container grey-text">
        <h4 class="center">Add a Pizza</h4>
        <form class="white" action="" methods="">
            <label>Your Email:</label>
            <input type="text">email</input>
            <label>Pizza Title</label>
            <input type="text">title</input>
            <label>Ingredients</label>
            <input type="text">ingredients</input>
            <div class="center">
                <input type="submit" name="name" value="submit" class="btn brand z-depth-0">
            </div>
        </form>
    </section>

    <?php include('templates/footer.php');?>

</html>







<!-- header -->
<head>
    <title>Ninja Pizza</title>
     <!-- Compiled and minified CSS -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <style type="text/css">
        .brand{
            background: #cbb09c !important;
        }
        .brand-text{
            color: #cbb09c !important;
        }
        form{
            max-width: 460px;
            margin: 20px auto;
            padding: 20px;
        }
    </style>
</head>
    <body class="grey lighten-4">
        <nav class="white z-depth-0">
            <div class="container">
                <a href="#" class="brand-logo brand-text">Ninja Pizzas</a>
                    <ul id="nav-mobile" class="rigth hide-on-small-and-down"> 
                    <li><a href="#" class="btn brand z-depth-0">Add a Pizza</a></li>
                </ul>
            </div>
        </nav>




<!-- footer -->
<footer class="section">
    <div class="center grey-text">copyright 2019 Ninja Pizzas</div>
    </footer>
</body>