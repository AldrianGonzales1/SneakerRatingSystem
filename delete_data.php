<?php
// Connect to the database
$db = mysqli_connect("localhost", "root", "", "php123");

// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the shoe ID from the form
    $temp = $_POST['temp'];

    
    $query = "DELETE FROM Shoe WHERE ShoeID = $temp";
    mysqli_query($db, $query);

    include('view_shoes.php');
}
?>

