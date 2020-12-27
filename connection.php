<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
<!-- Google Fonts -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
<!-- Bootstrap core CSS -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
<!-- Material Design Bootstrap -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet">

	<title></title>
</head>
<body>
<?php

$conn =	mysqli_connect("localhost", "root", "", "mysql");

if (!$conn) {
	die("failed");
}
echo "<h1 style= 'color: green'>connected</h1>";

if(isset($_REQUEST['submit'])){
	$sql = "DELETE FROM contact WHERE id = {$_REQUEST['id']}";
	if(mysqli_query($conn, $sql)) {
     echo "<h1 style='color: red'>{$_REQUEST['id']} has been deleted</h1>";
	}
	else {
		echo "unable to delete";
	}

}

$sql = "SELECT * FROM contact";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {

echo "<table class='table'>
<thead class='blue white-text'>
<tr>
<th scope='col'>Id</th>
<th>Name</th>
<th>Email</th>
<th>Mobile</th>
<th>subject</th>
<th>message</th>
<th>Action</th>
 </thead>   </tr> <tbody>";

$i=0;
while($row = mysqli_fetch_array($result)) {

echo "<tr>";
echo"<td>" . $row['Id'] . "</td>";
echo"<td>" . $row['Name']. "</td>";
echo"<td>" . $row['Email']. "</td>";
echo "<td>" .$row['mobile']. "</td>";
echo "<td>" .$row['subject']. "</td>";
echo "<td>" .$row['message']. "</td>";
echo '<td><form action="" method="post"><input type="hidden" name="id" value=' . $row['Id'] . '> <input type="submit" class="btn btn-sm btn-danger" name="submit" value="Delete"></form></td>';
echo "</tr>";
$i++;
}
echo "</table> </tbody>";
}
else{
    echo "No result found";
}
?>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/js/mdb.min.js"></script>
</body>
</html>