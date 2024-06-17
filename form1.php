<html>
	<head>
		<title>Register</title>
		<link rel="stylesheet" href="./styles/form.css">
	</head>
	<body>
		<div>
			<h1>Add Student</h1>
			<form action="form2.php" method="POST">
				<label for="name">Full Name</label>
				<input type="text" name="name" placeholder="Enter Your Name">
				<label for="phone">Phone Number</label>
				<input type="text" name="phone" placeholder="Enter Your Phone">
				<label for="email">Email Address</label>
				<input type="email" name="email" placeholder="Enter Your Email">
				<label for="city">City</label>
				<input type="text" name="city" placeholder="Enter Your City">
				<label for="dob">Date of Birth</label>
				<input type="date" name="dob">
				<label for="gpa">GPA</label>
				<input type="text" name="gpa">

				<input type="submit" value="Submit">
			</form>
		</div>
	</body>

</html>

