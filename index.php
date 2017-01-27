<!DOCTYPE html>
<head lang="en">
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
<body>
	<div class="container-fluid text-center">

	<div class="row  bg-1"><div class="col-sm-12"><h2>Welcome to WordOut</h2></div></div>
	<div class="row">
		<h1>Broadcast Important Notices and Keep Your People in the Loop!</h1>
	</div>

	<div class="row">
		<div class="col-sm-1"></div>
	<div class="col-sm-4">
	<h3>Start New Broadcast</h3>
	<form method="POST" action="request.php" class="form">
		<input type="text" name="bid" class="form-control" size="32" placeholder="Enter Broadcast ID" required><br>
		<input type="password" name="pwd" class="form-control" placeholder="Password" required><br>
		<button class="btn btn-default btn-lg">Start New Broadcast</button>
	</form>
	</div>

	<div class="col-sm-2"></div>

	<div class="col-sm-4">
	<h3>Resume Broadcast</h3>
	<form method="POST" action="resume.php" class="form">
		<input type="text" name="bid" class="form-control" size="32" placeholder="Enter Broadcast ID" required><br>
		<input type="password" name="pwd" class="form-control" placeholder="Password" required><br>
		<button class="btn btn-default btn-lg" type="submit">Resume Broadcast</button>
	</form>
	</div>
	<div class="col-sm-1"></div>
	</div><br><br>
	<div class="row">
	<div class="col-sm-4"></div>
	<div class="col-sm-4">
	<h3>Checkout a Broadcast</h3>
	<form method="POST" action="view.php" class="form">
		<input type="text" name="bid" class="form-control" size="32" placeholder="Broadcast ID" required><br>
		<button class="btn btn-default btn-lg" type="submit">Submit</button>
	</form>
	</div>
	<div class="col-sm-4"></div>
	</div>
</div>

	
	

</body>