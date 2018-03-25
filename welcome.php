<?php session_start();

	$profile = $_SESSION['user_profile'];
	echo "<h1>Welcome " , $profile['fname']. "</h1>";

	echo "<h3>your profile </h3>";

	echo "<h2><p>Email:" , $profile['email'] , "</p><h2>";

	echo "<h2><p>Username:" , $profile['user'] , "</p><h2>";
	echo "<h1><p> Thank You </p><h1>"
	?>

		<!DOCTYPE html>
	<html>
	<head>
		<title>Welcome</title>
		<style type="text/css">
			body{	background-color: orange;
					color: black;
					margin:5%;
					padding: 5%;
					text-align: center;
					line-height: 45px;
			}
			h1{
				font-style: italic;
				font-stretch: expanded;
			}
		</style>
	</head>
	<body>
	
	</body>
	</html>