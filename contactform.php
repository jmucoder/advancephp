<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
include('header1.php');    echo "<br><br><br><br>";

$name = filter_input(INPUT_POST, 'name');
$email = filter_input(INPUT_POST, 'email');
$mobile = filter_input(INPUT_POST, 'mobile');
$subject = filter_input(INPUT_POST, 'subject');
$message = filter_input(INPUT_POST, 'message');

$conn =	mysqli_connect("localhost", "root", "", "mysql");

if (!$conn) {
	die("failed");
}

$sql = "INSERT INTO contact(Name, Email, mobile, subject, message) VALUES('$name', '$email', '$mobile', '$subject', '$message' )";

	if(mysqli_query($conn, $sql)){
		
		echo "<div class='jumbotron text-center'>
  <h1 style='color: green' class='display-3'>Thank You! $name</h1>
  <p class='lead'><strong>Our team will get in touch with you soon</strong></p>
  <hr>
 
  <p class='lead'>
    <a class='btn btn-primary btn-sm' href='index.php'' role='button'>Continue to homepage</a>
  </p>
</div>";
	}

include('footer.php');

	?>


</body>
</html>