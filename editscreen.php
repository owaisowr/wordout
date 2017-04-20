<?php 
	include("dbh.php");
	session_start();
?>
<!DOCTYPE html>
<html>
<head lang="en">
	<title>Add a Notice</title>
	<meta name="theme-color" content="#000">
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
<body onload="window.location='#edit';">
<?php
	$bid = $_SESSION['bid'];
	$sql = "SELECT bid, msg, date FROM msgs WHERE bid ='$bid'";
	$retval = $conn->query($sql);
	   
   if(! $retval ) {
      die('Could not get data.');
   }else{
	   echo '<nav class="navbar navbar-inverse">
			  <div class="container-fluid">
			    <div class="navbar-header">
			      <a class="navbar-brand" href="#">'.$bid.'</a>
			    </div>
			    <ul class="nav navbar-nav">
			      <li class="active"><a href="index.php">Home</a></li>
			      
				  <li class="dropdown">
			        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Options
			        <span class="caret"></span></a>
			        <ul class="dropdown-menu">
			          <li><a href="delete.php">Clear Notices</a></li>
				      <li><a href="logout.php">Logout</a></li>
			        </ul>
			      </li>
			    </ul>
			  </div>
			</nav>';
	   while($row = $retval->fetch_assoc()) {
		     echo "<div class='panel panel-info'>
  <div class='panel-body'>{$row['msg']}</div>
  <div class='panel-footer'>{$row['date']}</div>
</div>";
	   }
}

?>
<div class="container-fluid text-center">
<div class="row">
<div class="col-sm-12">
	<form action="add.php" method="POST" id="edit">
	<textarea type="text" name="notice" placeholder="Add notice"></textarea><br>
	<button type="submit">Add</button>
	</form>
</div></div></div>
<div>&nbsp;</div>
<div>&nbsp;</div>
<div>&nbsp;</div>
</body>
</html>