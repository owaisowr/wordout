<?php 
	include("dbh.php");
	session_start();
?>

<?php
	$bid = $_POST['bid'];
	$pwd = $_POST['pwd'];
	$sql = "SELECT bid,pwd FROM broadcast";
	mysql_select_db('wordout');
	$retval = mysql_query( $sql, $conn );
	   
	if(! $retval ) {
	   die('Could not get data: ' . mysql_error());
	}
	   
	while($row = mysql_fetch_array($retval, MYSQL_ASSOC)) {
	   if ($bid == $row['bid'] && $pwd == $row['pwd']) {
	   		$_SESSION['bid'] = $bid;
	   		$_SESSION['pwd'] = $pwd;
	   		header("Location:editscreen.php");
	   }
	   else{
	   	continue;
	   }
   }
   echo "No broadcast found.";

?>