<?php

// connect to database
$conn = mysqli_connect('location', 'shaun', 'test1234', 'ninja_pizzas');

// check connection 
if($conn){
    echo 'Connection error: ' . mysqli_connect_error();
}

// write querry for all pizzas
$sql = 'SELECT title, ingredients, id FROM pizzas ORDER BY created_at';

// make query & get result
$result = mysqli_query($conn, $sql);

// fetch the resulting rows as an array
$pizas = mysqli_fetch_all($result, MYSQLI_ASSOC);

// free result from memory
mysqli_free_result($result);

// close connection
mysqli_closs($conn);

?>

<!DOCTYPE html>
<html>

    <?php include('templates/header.php'); ?>

    <h4 class="center grey-text">Pizzas!</h4>

    <div class="container">
        <div class="row">
        
            <?php foreach($pizzas as $pizzas){ ?>
            
                <div class="col m6 md3">
                    <div class="card z-depth-0">
                        <div class="card-content center">
                            <h6><?php echo htmlspecialchars($pizzas['title']); ?></h6> 
                            <div><?php echo htmlspecialchars($pizzas['ingredients']); ?></div> 
                        </div>
                        <div class="card-action right-align">
                            <a href="#" class="brand-text">more info</a>
                        </div>
                    </div>
                </div>
            <?php } ?>
        
        </div>
    </div>
<?php include('templates/footer.php'); ?>

</html>