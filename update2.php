<?php
$id = $_POST['id'];
$name = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$city = $_POST['city'];
$dob = $_POST['dob'];
$gpa = $_POST['gpa'];

$server_name = "localhost";
$user_name = "root";
$password = "";
$database_name = "form";

$conn = new mysqli($server_name, $user_name, $password, $database_name);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "UPDATE form SET name='$name', phone='$phone', email='$email', city='$city', dob='$dob', gpa='$gpa' WHERE id=$id";

$result=$conn->query($sql);

if ($result) {
    header("Location:home.php");
} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();


exit();
?>
