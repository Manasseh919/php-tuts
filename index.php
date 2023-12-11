<?php
/* connect to db */

$conn = mysqli_connect('localhost', 'manasseh', 'test1234', 'ninja-pizza');


//check connection
if (!$conn) {
    echo "Connection error: " . mysqli_connect_error();
}



// Write query for all pizzas
$sql = 'SELECT title, ingredients, id FROM pizza ORDER BY created_at';

// Make query and get result
$result = mysqli_query($conn, $sql);

//fetch the resulting row as an array
$pizzas = mysqli_fetch_all($result, MYSQLI_ASSOC);

//free the result from memory
mysqli_free_result($result);

mysqli_close($conn);

// print_r($pizzas);

?>


<!DOCTYPE html>
<html lang="en">

<?php include('templates/header.php'); ?>

<h4 class="center grey-text">
    Pizzas!
</h4>
<div class="container">
    <div class="row">
        <?php foreach($pizzas as $pizzas){ ?>
                <div class="col s6 md3">
                    <div class="card z-depth-0">
                        <div class="card-content center">
                            <h6><?php echo htmlspecialchars($pizzas['title']);?></h6>
                            <div><?php echo htmlspecialchars($pizzas['ingredients']);?></div>
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