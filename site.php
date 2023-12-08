<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>


  <form action="site.php" method="post">

    What was your grade?
    <input type="text" name="grade"><br><br>

    <input type="submit">
  </form>


  <?php
  $servername = "localhost";
  $username = "username";
  $password = "password";

  // Create connection
  $conn = new mysqli($servername, $username, $password);

  // Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  echo "Connected successfully";
  ?>




</body>

</html>