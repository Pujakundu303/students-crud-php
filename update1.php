<?php

$id = $_GET['editid'];

$server_name = "localhost";
$user_name = "root";
$password = "";
$database_name = "form";

$conn = new mysqli($server_name, $user_name, $password, $database_name);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$sql = "SELECT * FROM form WHERE id=$id";
$result = $conn->query($sql);
$row = $result->fetch_assoc();

$conn->close();
?>

<html>
    <head>
        <title>Update Student</title>
        <link rel="stylesheet" href="./styles/update1.css">
    </head>
    <body>
        <div>
            <h1>Update Student</h1>
            <form action="update2.php" method="POST">
                <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                <label>Name</label>
                <input type="text" name="name" value="<?php echo $row['name']; ?>">
                <label>Phone</label>
                <input type="text" name="phone" value="<?php echo $row['phone']; ?>">
                <label>Email</label>
                <input type="email" name="email" value="<?php echo $row['email']; ?>">
                <label>City</label>
                <input type="text" name="city" value="<?php echo $row['city']; ?>">
                <label>Date of Birth</label>
                <input type="date" name="dob" value="<?php echo $row['dob']; ?>">
                <label>GPA</label>
                <input type="text" name="gpa" value="<?php echo $row['gpa']; ?>">
                <input type="submit" value="Update">
            </form>
        </div>
    </body>
</html>
