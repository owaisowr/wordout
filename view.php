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
	$sql = "SELECT bid, msg, date FROM msgs";
	   mysql_select_db('wordout');
	   $retval = mysql_query( $sql, $conn );
	   
	   if(! $retval ) {
	      die('Could not get data: ' . mysql_error());
	   }
	   
	   while($row = mysql_fetch_array($retval, MYSQL_ASSOC)) {
	      if ($bid == $row['bid']){
		      echo "bid :{$row['bid']}  <br> ".
		         "msg : {$row['msg']} <br> ".
		         "date : {$row['date']} <br> ".
		         "--------------------------------<br>";
		  }
	   }
   
?>

</body>
</html>