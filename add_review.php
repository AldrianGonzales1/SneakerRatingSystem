

<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    $title = $_POST['tit'];
    $ShoeID = $_POST['ShoeName'];
    $review_description = $_POST['descrip'];
    $rating = $_POST['ratings'];




require_once('database.php');
$query = 'INSERT INTO Reviews
    (title, ShoeID, review_description, rating)
    VALUES
   (:tit, :shoe, :descrip, :ratings)';
$statement = $db->prepare($query);
$statement->bindValue(':tit', $title);
$statement->bindValue(':shoe', $ShoeID);
$statement->bindValue(':descrip', $review_description);
$statement->bindValue(':ratings', $rating);
$statement->execute();
$statement->closeCursor();
// Display the Product List page
}
include('products.php');
?>