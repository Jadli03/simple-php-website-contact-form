<?php 
	//  creating connection and checking it 
	$con = mysqli_connect('localhost','root');
	if($con)
		echo "connection established";
	else
		die("Connection failed: " . mysqli_connect_error());

	//selecting database 
	mysqli_select_db($con, "usermsg");

	//gettting data from form 
	$email = $_POST['email'];
	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$subject = $_POST['subject'];

	//query to fire to store messages or feedback of users
	$query = "insert into usersmessage (email, firstname, lastname, subject) values ('$email', '$firstname', '$lastname', '$subject')";
	

	//checking the result of query 
	 $result = mysqli_query($con,$query);
	if($result)
	{
		echo "<script> ";
			echo "alert('message send successfully');";
			echo 'window.location.href="./index.php"';
			echo "</script>";
	}
	else {
		echo "<script> alert('message send failed') </script>";
	}
	die();

 ?>