<?php
	require "connection.php";

	$pdo_statement = $pdo_conn->prepare("SELECT *FROM users ORDER BY id DESC");
	$pdo_statement->execute();
	$result = $pdo_statement->fetchAll();
	// print_r($result);
?>

<!DOCTYPE html>
<html>
<head>
	<title>READ Operation</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<table class="table">
					<thead>
						<th class="table-header">Full Name</th>
						<th class="table-header">Email</th>
						<th class="table-header">Password</th>
					</thead>
					<tbody>
						<?php 
							foreach($result as $row){

						?>

					<tr>
						<td><?php echo ($row["fullname"]); ?></td>
						<td><?php echo ($row["email"]); ?></td>
						<td><?php echo ($row["password"]); ?></td>
					</tr>
					<?php
						}
					?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</body>
</html>