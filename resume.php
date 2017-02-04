<?php 
	include("dbh.php");
	session_start();
?>

<?php
	$bid = $_POST['bid'];
	$pwd = $_POST['pwd'];
	$sql = "SELECT bid,pwd FROM broadcast WHERE bid = '$bid' AND pwd = '$pwd'";
	$retval = $conn->query($sql);
	   
	if(! $retval ) {
	   die('Could not get data.');
	}
	   
	while($row = $retval->fetch_assoc()) {
	   		$_SESSION['bid'] = $bid;
	   		$_SESSION['pwd'] = $pwd;
	   		header("Location:editscreen.php");
   }
   echo "No broadcast found.";

?>