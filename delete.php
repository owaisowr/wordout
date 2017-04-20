<?php 
	include("dbh.php");
	session_start();
?>
<?php
	$bid = $_SESSION['bid'];
	function __autoload($Bid) {
  		require_once $Bid . '.php';
	}
	$cls = new Bid($bid, NULL, NULL);
	$q = $cls->clearmsgs();
	$delval = $conn->query($q);
	if (! $delval) {
		die('Could not clear messages!');
	}
	else {
		header("location: editscreen.php");
	}
?>