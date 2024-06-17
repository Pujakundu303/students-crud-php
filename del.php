<?php
$id = $_GET['delid'];

$server_name = "localhost";
$user_name = "root";
$password = "";
$database_name = "form";

$conn = new mysqli($server_name, $user_name, $password, $database_name);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "DELETE FROM form WHERE id=$id";
$result=$conn->query($sql);
if ($result) {
    header("Location:home.php"); //return to a specific file/location
} else {
    echo "Error deleting record: " . $conn->error;
}

$conn->close();


exit();
?>
