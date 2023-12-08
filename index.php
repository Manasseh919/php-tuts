<?php
/* connect to db */

$conn = mysqli_connect('localhost', 'manasseh', 'test1234', 'ninja_pizza');


//check connection
if(!$conn) {
    echo "connection error; ". mysqli_connect_error();
}

//write query for all pizzas
$sql = 'SELECT title, ingredients, id * FROM pizzas';

//make query and get result
$result = mysqli_query($conn, $sql);

//fetch the resulting row as an array
$pizzas = mysqli_fetch_all($result, MYSQLI_ASSOC);

print_r($pizzas);

?>


<!DOCTYPE html>
<html lang="en">

<?php include('templates/header.php'); ?>
<?php include('templates/footer.php'); ?>



</html>