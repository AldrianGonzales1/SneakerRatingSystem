<?php
// Connect to the database
$db = mysqli_connect("localhost", "root", "", "php123");

// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the shoe ID from the form
    $temp = $_POST['temp'];

    // Delete the record from the 'registered' table
    //database variable  = $post_variable
    $query = "DELETE FROM Shoe WHERE ShoeID = $temp";
    mysqli_query($db, $query);

    // Display a success message
    //echo "Information Deleted";
    include('view_shoes.php');
}
?>

