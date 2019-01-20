<?php
	

		require "connection.php";

		$sql = "INSERT INTO users(fullname, email, password) VALUES (:fullname, :email, :password)";

		$pdo_statement = $pdo_conn->prepare( $sql );

		$result = $pdo_statement->execute( array(':fullname'=>$_POST['fullname'], ':email'=>$_POST['email'], ':password'=>$_POST['confirmPass']));

		if(! empty($result))
		{
			header('location:index.php');
		}
	
?>

<!DOCTYPE html>
<html>
<head>
	<title>CRUD using PDO</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-8" style="padding-top: 30px;">
				<form action="#" method="POST">
					<div class="form-group">
						<input type="text" name="fullname" placeholder="Full Name" class="form-control">
					</div>
					<div class="form-group">
						<input type="email" name="email" placeholder="Email" class="form-control">
					</div>
					<div class="form-group">
						<input type="password" name="createPass" placeholder="Create Password" class="form-control">
					</div>
					<div class="form-group">
						<input type="password" name="confirmPass" placeholder="Confirm Password" class="form-control">
					</div>
					<div class="form-group">
						<input type="submit" name="register" value="Register" class="btn btn-primary">
					</div>
				</form>
			</div>
		</div>
	</div>
</body>
</html>