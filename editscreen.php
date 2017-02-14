<?php 
	include("dbh.php");
	session_start();
?>
<!DOCTYPE html>
<html>
<head lang="en">
	<title>Add a Notice</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>WordOut</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<style>
	.bg-1 { 
    background-color: #1abc9c; /* Green */
    color: #ffffff;
	}
	</style>
	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<?php

$bid = $_SESSION['bid'];

$sql = "SELECT bid, msg, date FROM msgs WHERE bid ='$bid'";
	   $retval = $conn->query($sql);
	   
	   if(! $retval ) {
	      die('Could not get data.');
	   }
	   echo '<div class="container-fluid text-center">
	   <div class="row  bg-1"><div class="col-sm-12"><h2>'.$bid.'</h2></div></div></div>';
	   while($row = $retval->fetch_assoc()) {
		      echo "bid :{$row['bid']}  <br> ".
		         "msg : {$row['msg']} <br> ".
		         "date : {$row['date']} <br> ".
		         "<hr>";
	   }

?>
<form action="add.php" method="POST">
	<input type="text" name="notice" size="500" placeholder="Add notice"><br>
	<button type="submit">Add</button>
</form>
</body>
</html>