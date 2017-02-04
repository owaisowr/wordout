<?php 
	include("dbh.php");
	session_start();
?>
<html>
<head>
	<title>Add a notice - WordOut</title>
</head>
<body>
<?php 
	$bid = $_SESSION["bid"];
	$notice = $_POST["notice"];
	$date = date('Y-m-d H:i:s');
	$p = "INSERT INTO msgs VALUES ('$bid', '$notice' , '$date' )";
	$insertp = $conn->query($p);
	if (!$insertp) {
		die("Couldn't add the notice. Try again!");
	}else {
		header('Location:editscreen.php');
	}
?>
</body>
</html>