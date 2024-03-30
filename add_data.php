<?php
// Get the product data

$shoe_brand = filter_input(INPUT_POST, 'shoe_brand');
$shoe_name = filter_input(INPUT_POST, 'shoe_name');
$descrip = filter_input(INPUT_POST, 'descrip');
// Validate inputs
/*
if ( $shoe_brand == null|| $shoe_date == null || $shoe_name == null || $descrip == null
                 || $descrip == false ) {
   $error = "Invalid product data. Check all fields and try again.";
   include('database_error.php');
} else {
   require_once('database.php');
*/
require_once('database.php');
$query = 'INSERT INTO Shoe
    (ShoeBrand, ShoeName, Description)
    VALUES
   (:shoe_brand, :shoe_name, :descrip)';
$statement = $db->prepare($query);
$statement->bindValue(':shoe_brand', $shoe_brand);
$statement->bindValue(':shoe_name', $shoe_name);
$statement->bindValue(':descrip', $descrip);
$statement->execute();
$statement->closeCursor();
// Display the Product List page
include('view_shoes.php');

?>