<?php 
	include("dbh.php");
	session_start();
?>
<html>
<head>
	<title>Start a Broadcast - WordOut</title>
</head>
<body>
<?php 
	function __autoload($Bid) {
  		require_once $Bid . '.php';
	}
	$bid = $_POST["bid"];
	$pwd = $_POST["pwd"];
	$cls = new Bid($bid, $pwd, "First announcement");
	$q = $cls->insertnewbid();
	$p = $cls->insertfirstmsg();
	$insertq = $conn->query($q);
	if (!$insertq) {
		die("Broadcast already exists.");
	}else {
		$insertp = $conn->query($p);
		$_SESSION['bid'] = $bid;
		$_SESSION['pwd'] = $pwd;
		header('Location:editscreen.php');
	}
?>
</body>
</html>