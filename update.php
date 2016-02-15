<?php

	require("config.php");

	$id = $_POST['id'];
	$desc = $_POST['desc'];

	$sql = "UPDATE activities SET description = '$desc' WHERE id = $id";
	
	$conn->query($sql);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Update</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="header">
			<h1>You have updated:</h1>
		</div>
	
	<div class="wrapper">
		<div class="list">
			<table>
				<tr>
						<td class="del"><?php echo $desc ?></td>
				</tr>
			</table>
		
			<div class="goback">
				<a class="del" href="realles3.php">Go Back</a>
			</div>
		
		<br>
		</div>
</body>
</html>