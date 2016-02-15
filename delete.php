<?php
	require("config.php");

	// prepare id from the url querystring to find the record
	$id = $_GET['id'];
	$description = $_GET['description'];
	// prepare delete instruction
	$sql = "DELETE FROM activities WHERE id = $id";
	
	// execute delete instruction
	$conn->query($sql);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Delete</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="header">
			<h1>You have deleted:</h1>
		</div>
	
	<div class="wrapper">
		<div class="list">
				<table>
					<tr>
						<td class="del"><?php echo $description ?></td>
					</tr>
				</table>
		<form method="post">
			<div>
				<input type="hidden" name="id" value="<?=$id?>">
			</div>
			
			<div class="goback">
				<a class="del" href="realles3.php">Go Back</a>
			</div>
		</form>
		<br>
		</div>
</body>
</html>
