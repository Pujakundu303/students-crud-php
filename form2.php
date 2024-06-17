<?php 

$name=$_POST['name'];
$phone=$_POST['phone'];
$email=$_POST['email'];
$city=$_POST['city'];
$dob=$_POST['dob'];
$gpa=$_POST['gpa'];

$server_name="localhost";
$user_name="root";
$password="";
$database_name="form";

$conn= new mysqli($server_name,$user_name,$password,$database_name);

if($conn->connect_error){
    die("Connection fail".$conn->connect_error);
}




$sq="INSERT INTO form( id, name, phone, email, city, dob, gpa) 
VALUES ( NULL, '$name', '$phone', '$email', '$city', '$dob', '$gpa')";

$result=$conn->query($sq);

if($result){

    header('location:home.php');
}
else{
    echo "Data not inserted";
}


$conn->close();

?>