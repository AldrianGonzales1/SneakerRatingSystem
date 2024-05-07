

<?php

require_once('database.php');
if(!isset($Shoe_id)) {
    $shoe_id = filter_input(INPUT_GET, 'shoe_id',
                            FILTER_VALIDATE_INT);
if ($shoe_id == NULL || $shoe_id == FALSE) {
    $shoe_id = 1;
    
        }

    }


// Get name for selected shoe
$queryShoe = 'SELECT * FROM Shoe
                  WHERE ShoeID = :shoe_id';
$statement1 = $db->prepare($queryShoe);
$statement1->bindValue(':shoe_id', $shoe_id);
$statement1->execute();
$Shoe = $statement1->fetch();
$ShoeName= $Shoe['ShoeName'];
$statement1->closeCursor();

// Get all shoes
$queryAllShoe = 'SELECT * FROM Shoe
                       ORDER BY ShoeID';
$statement2 = $db->prepare($queryAllShoe);
$statement2->execute();
$Shoe = $statement2->fetchAll();
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
 <style>
    body{
        background-color: lightblue;
}

 </style>
 <header>
 </header>
<body>
    <center>
    <p>Select your shoe </p>
    <form action="add_review.php" method="post">
             <select name="ShoeName">
    <?php foreach ($Shoe as $Shoes) : ?>
        <option value="<?php echo $Shoes['ShoeID']; ?>">
            <?php echo $Shoes['ShoeName']; ?>
        </option>
    <?php endforeach; ?>
</select>
<br><br>

        <label for="name">Review title:</label><br><br>
        <input type="text" id="tit" name="tit" required><br>
        <br><br><br>
        <label for="content">Comment:</label><br>
        <textarea id="descrip" name="descrip" rows="3" required></textarea><br>
         <br><br><br>

        <label for="rating">Rating:</label>
        <input type="number" id="ratings" name="ratings" min="1" max="5" required><br>
        <br><br><br><br>

<br>
        
        <input type="submit" value="Submit Review">
        <form action="add_review.php" method="post"
      id="add_review_form">
</form>
</div>
<center>


</body>
</html>

