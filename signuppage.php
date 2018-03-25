<?php session_start(); ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Signup</title>
	<style type="text/css">
		input{ 	padding: 1%;
				margin: 2%;
				width: 50%;
		}
		button{ padding: 1%;
				width: 10%;
				color: white;
				background-color: orange;
				text-decoration: bold; 
		}
		body{ 	background-color: orange;
				text-align: center;
		}
		form{	background-color: black;
				color: white;
				margin:2%;
				padding: 2%; 
				width:auto;
		}
	</style>
</head>
	<body>
		<form class="" method="post">
		
		<h1> Registration Page</h1>
		<label> Fullname</label>
		<br>
		<input type="text" name="fname" placeholder="Enter Fullname">
		<br>
		<label> Username</label>
		<br>
		<input type="text" name="user" placeholder="Enter Username">
		<br>
		<label> Email Address</label>
		<br>
		<input type="email" name="email" placeholder="Enter Email Address">
		<br>
		<label> Password </label>
		<br>
		<input type="password" name="pass" placeholder="Enter Password">
		<br>
		<label> Confirm Password </label>
		<br>
		<input type="password" name="cpass" placeholder="Re-Enter Password">
		<br>
		<br>
		<label> Date Of Birth </label>
		<br>
		<input type="date" name="bday">
		<br>
		<br>
		<button type="submit" name="create">Create</button>

		<?php

			if( isset($_POST['create'])) {
				$fname 	= $_POST['fname'];
				$user 	= $_POST['user'];
				$email 	= $_POST['email'];
				$pass 	= $_POST['pass'];
				$cpass 	= $_POST['cpass'];
				$bday 	= $_POST['bday'];
				$profile = array(
					'fname' => 'balogun ololade',
					'email' => 'balogunolayimika@gmail.com',
					'user'	=> 'lollman'
				);

				if ( $user == $profile['user'] && $fname == $profile['fname'] && $email == $profile['email'] ){
					$_SESSION['user_profile'] = $profile;
					header('location: welcome.php');
				}
			}

			?>
		</form>
	</body>
</html>