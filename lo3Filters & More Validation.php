<?php

if(isset($_POST['submit'])){
    // check email
    if(empty($_POST['email'])){
        echo 'An email is required <br />';
    } else{ 
        $email = $_POST['email'];
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            echo 'email must be a valid email address';
        }
    }

    // check title
    if(empty($_POST['title'])){
        echo 'An title is required <br />';
    } else{ 
        $title = $_POST['title'];
        if(!preg_match('/^[a_zA_Z\s]+$/', $title)){
            echo 'Title must be letters and spaces only';
        }
    }

    // check ingredients
    if(empty($_POST['ingredients'])){
        echo 'An ingredients is required <br />';
    } else{ 
        $ingredients = $_POST['ingredients'];
        if(!preg_match('/^([a_zA_Z\s]+)(,\s*[a_zA_Z\s]*)*$/', $ingredients)){
            echo 'Ingredients must be a comma seperated list';
        }
    }
}   
// end of POST Check
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