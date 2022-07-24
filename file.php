<?php
		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "shose";
		$name=$_POST['name'];
		$telephone=$_POST['telephone'];
		$email1 = $_POST['email1'];
		$email2 =$_POST['email2'];
		$placeholder = $_POST['placeholder'];
		

		$conn = mysqli_connect($servername, $username, $password, $dbname);
	if (!$conn) {
	  die("Connection failed: " . mysqli_connect_error());
	}
	if (empty($email2)) {
		$sql = "INSERT INTO lilit (name, telephone, email1,email2,placeholder ) VALUES ('$name','$telephone','$email1','$email2','$placeholder')";

		if (mysqli_query($conn, $sql)) {
		  echo "New record created successfully";
		}
		 else {
		  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}
	} else {
		$sql = "INSERT INTO lilit(email2) VALUES ('$email2')";
		if (mysqli_query($conn, $sql)) {
		  echo "New record created successfully";
		}
		 else {
		  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}
	}

	
mysqli_close($conn);
?>