<?php
function delete_data($shoe_id, $shoe_name, $shoe_date, $descrip) {
    global $db;
    $query = 'DELETE FROM Shoe
    (ShoeID, ShoeBrand, ShoeName, Description)
    VALUES
   (:shoe_id, :shoe_brand, :shoe_name, :descrip)';
$statement = $db->prepare($query);
$statement->bindValue(':shoe_id', $shoe_id);
$statement->bindValue(':shoe_brand', $shoe_brand);
$statement->bindValue(':shoe_name', $shoe_name);
$statement->bindValue(':descrip', $descrip);
$statement->execute();
$statement->closeCursor();



function add_data($shoe_id, $shoe_name, $shoe_date, $descrip) {
    global $db;
    $query = 'INSERT INTO Shoe
    (ShoeID, ShoeBrand, ShoeName, Description)
    VALUES
   (:shoe_id, :shoe_brand, :shoe_name, :descrip)';
$statement = $db->prepare($query);
$statement->bindValue(':shoe_id', $shoe_id);
$statement->bindValue(':shoe_brand', $shoe_brand);
$statement->bindValue(':shoe_name', $shoe_name);
$statement->bindValue(':descrip', $descrip);
$statement->execute();
$statement->closeCursor();

?>