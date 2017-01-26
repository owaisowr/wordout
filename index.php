<head>
	<title>WordOut</title>
</head>
<body>
	<h1>Welcome to WordOut</h2>
	<h3>Start New Broadcast</h3>
	<form method="POST" action="request.php">
		<input type="text" name="bid" size="32" placeholder="Enter Broadcast ID"><br>
		<input type="password" name="pwd" placeholder="Password"><br>
		<button>Start New Broadcast</button>
	</form><br><br>

	<h3>Checkout a Broadcast</h3>
	<form method="POST" action="view.php">
		<input type="text" name="bid" size="32" placeholder="Broadcast ID"><br>
		<button>Submit</button>
	</form><br><br>

	<h3>Resume Broadcast</h3>
	<form method="POST" action="resume.php">
		<input type="text" name="bid" size="32" placeholder="Enter Broadcast ID"><br>
		<input type="password" name="pwd" placeholder="Password"><br>
		<button>Resume Broadcast</button>
	</form><br><br>
	<hr>

</body>