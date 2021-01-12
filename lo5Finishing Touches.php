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

// explode(',', $pizzas[0]['ingredients'])
?>

<!DOCTYPE html>
<html>

    <?php include('templates/header.php'); ?>

    <h4 class="center grey-text">Pizzas!</h4>

    <div class="container">
        <div class="row">
        
        <?php foreach($pizzas as $pizzas): ?>
        
            <div class="col m6 md3">
                <div class="card z-depth-0">
                   <img src="img/pizza.png" class="pizza">
                    <div class="card-content center">
                        <h6><?php echo htmlspecialchars($pizzas['title']); ?></h6> 
                        <ul>
                            <?php foreach(explode(',', $pizzas[0]['ingredients']) as $ing){ ?>
                            <li><?php echo htmlspecialchars($ing); ?></li>
                            <?php } ?>
                        </ul>
                    </div>
                    <div class="card-action right-align">
                        <a class="brand-text" href="details.php?id=<?php echo $pizza['id']?>">
                        more info</a>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
        </div>
    </div>
    <?php include('templates/footer.php'); ?>

</html>







