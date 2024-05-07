<?php
require('database.php');


$rev = filter_input(INPUT_GET, 'rev',
                            FILTER_VALIDATE_INT);
if ($rev == NULL || $rev == FALSE) {
    $rev = 1;
}





// Get name for selected shoe



// Get all shoes
$queryAllRev = 'SELECT * FROM Reviews
                       ORDER BY review_id';
$statement2 = $db->prepare($queryAllRev);
$statement2->execute();
$Reviews = $statement2->fetchAll();
$statement2->closeCursor();


?>

<!DOCTYPE html>
<html>
<head>
    

    <title>Sneaker Review</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
 
</head>
<body>
<main>
<center>


<header>
<h1>Remove A Review</h1>
</header>
</center>
    <main>
   <h2>Remove Review</h2>
   <form action="delete_review.php" method="post"
      id="delete_data">
     <label>Enter Review ID:</label>
      <input type="text" name="temp"><br>

      <input class="btn btn-primary" type="submit" value="Remove Shoes"><br>
   <form action="delete_data.php" method="post"
      id="delete_shoes">
   </form>
   <p><a href="admin_view_review.php">View Review List</a></p>
</main>
<center>
  </footer>
</center>
</body>
</html>