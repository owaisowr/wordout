<?php 
	include("dbh.php");
	session_start();
?>
<!DOCTYPE html>
<html>
<head lang="en">
	<title>View Broadcast - WordOut</title>
	<meta charset="utf-8">
	<meta name="theme-color" content="#000">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>WordOut</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<style>
	.bg-1 { 
    background-color: #1abc9c; /* Green */
    color: #ffffff;
	}
	.link {
		text-align: left;
		background-color: white;
	}
	.l {
		padding-top: 25px;
	}
	</style>
	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<?php
	$bid = $_POST['bid'];
	$sql = "SELECT bid, msg, date FROM msgs WHERE bid = '$bid'";
	   $retval = $conn->query($sql);
	   if( $retval->num_rows == 0 ) {
	      echo "No data found.";
	   }else {
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
				      <li><a href="logout.php">Logout</a></li>
			        </ul>
			      </li>
			    </ul>
			  </div>
			</nav>';
		   while($row = $retval->fetch_assoc()) {
			     echo "<div class='container-fluid text-center'>
			     	   <div class='row'>
			     	   <div class='col-sm-12'>{$row['msg']}<br>{$row['date']}</div>
			     	   </div></div><br>";
		   }
		}
?>

</body>
</html>