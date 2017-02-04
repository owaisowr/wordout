<?php 
	include("dbh.php");
	session_start();
?>
<html>
<head>
	<title>Add a Notice</title>
</head>
<body>
<?php

$bid = $_SESSION['bid'];

$sql = "SELECT bid, msg, date FROM msgs WHERE bid ='$bid'";
	   $retval = $conn->query($sql);
	   
	   if(! $retval ) {
	      die('Could not get data.');
	   }
	   
	   while($row = $retval->fetch_assoc()) {
		      echo "bid :{$row['bid']}  <br> ".
		         "msg : {$row['msg']} <br> ".
		         "date : {$row['date']} <br> ".
		         "--------------------------------<br>";
	   }

?>
<form action="add.php" method="POST">
	<input type="text" name="notice" size="500" placeholder="Add notice"><br>
	<button type="submit">Add</button>
</form>
</body>
</html>