<?php 
$server_name="localhost";
$user_name="root";
$password="";
$database_name="form";

$conn= new mysqli($server_name,$user_name,$password,$database_name);

if($conn->connect_error){
    die("Connection fail".$conn->connect_error);
}

$sql = "SELECT * FROM form";
$result = $conn->query($sql);

$conn->close();
?>


<html>
	<head>
		<title>Homepage</title>
		<link rel="stylesheet" href="./styles/home.css">
	</head>
	<body>
		<h1 align="center">Students List</h1>
		<table>
			<tr>
				<th>Full Name</th>
				<th>Phone Number</th>
				<th>Email Address</th>
				<th>City</th>
				<th>Date of Birth</th>
				<th>GPA</th>
				<th>Edit</th>
			
				<th>Delete</th>
			
			</tr>
			
		<?php 
		if ($result->num_rows > 0) {
			while($row = $result->fetch_assoc())
			{ 
				$id=$row["id"];
				echo "<tr>";
					echo "<td>". $row["name"]."</td>";
					echo "<td>". $row["phone"]."</td>";
					echo "<td>". $row["email"]."</td>";
					echo "<td>". $row["city"]."</td>";
					echo "<td>". $row["dob"]."</td>";
					echo "<td>". $row["gpa"]."</td>";
					echo "<td class='c'><b>"."<a href='update1.php?editid=$id'>Edit</a>"."</b></td>";
				
					echo "<td class='b'><b>"."<a href='del.php?delid=$id'>Delete</a>"."</td></b>";
					
					echo "</tr>";
			}
		}
		else echo "0 results";
		?>
			
		</table>
		
	</body>
</html>

