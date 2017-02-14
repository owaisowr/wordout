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
   }else{
	   echo '<div class="container-fluid text-center">
	   		 <div class="row  bg-1">
	   		 <div class="col-sm-8"><h2>'.$bid.'</h2></div>
	   		 <div class="col-sm-4"><a href="logout.php">LOGOUT</a></div>
	   		 </div></div>';
	   while($row = $retval->fetch_assoc()) {
		     echo "<div class='container-fluid'>
		     	   <div class='row'>
		     	   <div class='col-sm-2'></div>
		     	   <div class='col-sm-4'>{$row['bid']}</div>
		     	   <div class='col-sm-6'>{$row['msg']}<br>{$row['date']}</div>
		     	   </div></div><br>";
	   }
}

?>

<form action="add.php" method="POST">
	<textarea type="text" name="notice" placeholder="Add notice"></textarea><br>
	<button type="submit">Add</button>
</form>
</body>
</html>