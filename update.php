<?php
	require "connection.php";

	if(!empty($_POST["update"]))
	{
		$pdo_statement = $pdo_conn->prepare("update users set fullname='". $_POST['fullname']."',username='".$_POST['username']."',email='" . $_POST['email']."', password='".$_POST['confirmPass']."' WHERE id=" .$_GET["id"]);

	$result = $pdo_statement->execute();
	if($result)
	{
		header('location:index.php');
	}
	}

	$pdo_statement = $pdo_conn->prepare("SELECT *FROM users where id=" . $_GET["id"]);
	$pdo_statement->execute();
	$result = $pdo_statement->fetchAll();

?>

<!DOCTYPE html>
<html>
<head>
	<title>Edit Record</title>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-8" style="padding-top: 30px;">
				<form action="#" method="POST">
					<div class="form-group">
						<label class="badge badge-light">Fullname</label>
						<input type="text" name="fullname"  class="form-control" value="<?php echo $result[0]['fullname']; ?>">
					</div>
					<div class="form-group">
						<label class="badge badge-light">Username</label>
						<input type="text" name="username"  class="form-control" value="<?php echo $result[0]['username']; ?>">
					</div>
					<div class="form-group">
						<label class="badge badge-light">Email</label>
						<input type="email" name="email"  class="form-control" value="<?php echo $result[0]['email']; ?>">
					</div>
					<div class="form-group">
						<label class="badge badge-light">Password</label>
						<input type="text" name="confirmPass"  class="form-control" value="<?php echo $result[0]['password']; ?>">
					</div>
					
					<div class="form-group">
						<input type="submit" name="update" value="Updates" class="btn btn-primary">
					</div>
				</form>
			</div>
		</div>
	</div>
</body>
</html>