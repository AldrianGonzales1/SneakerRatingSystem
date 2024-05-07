<?php
// Connect to the database
$db = mysqli_connect("localhost", "root", "", "php123");

// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the shoe ID from the form
    $temp = $_POST['temp'];

    
    $query = "DELETE FROM Reviews WHERE review_id = $temp";
    mysqli_query($db, $query);

    include('admin_view_review.php');
}
?>

