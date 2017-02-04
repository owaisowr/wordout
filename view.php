<?php 
	include("dbh.php");
	session_start();
?>
<html>
<head>
	<title>View Broadcast - WordOut</title>
</head>
<body>
<?php
	$bid = $_POST['bid'];
	$sql = "SELECT bid, msg, date FROM msgs WHERE bid = '$bid'";
	   $retval = $conn->query($sql);
	   if( $retval->num_rows == 0 ) {
	      echo "No data found.";
	   }else {
	   		while($row = $retval->fetch_assoc()) {
		      echo "bid :{$row['bid']}  <br> ".
		         "msg : {$row['msg']} <br> ".
		         "date : {$row['date']} <br> ".
		         "<hr>";
	   		}
		}
?>

</body>
</html>