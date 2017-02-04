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
	$bid = $_POST["bid"];
	$pwd = $_POST["pwd"];
	$q = "INSERT INTO broadcast VALUES (DEFAULT, '$bid', '$pwd')";
	$date = date('Y-m-d H:i:s');
	$p = "INSERT INTO msgs VALUES ('$bid', 'Your first announcement.' , '$date' )";
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