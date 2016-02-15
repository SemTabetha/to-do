<?php
	
	require("config.php");

	$id = $_GET['id'];
	
	$sql = "SELECT * FROM activities WHERE id = $id";
	
	$result = $conn->query($sql);
	
	$row = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Edit</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="header">
			<h1>Edit:</h1>
		</div>
	
	<div class="wrapper">
		<div class="list">
			<table>
				<tr>
					<td class="del">
						<form action="update.php" method="post">
							
							<input type="hidden" name="id" value="<?php echo $row['id']; ?>"><br>
							
							<label for="title">Item:</label>
							
							<input name="desc" minlength="1" placeholder="<?php echo $row['description']; ?>">
							<input type="submit" name="submit" value="save">
						</form>		
					</td>
				</tr>
			</table>
		
			<div class="goback">
				<a class="del" href="realles3.php">Go Back</a>
			</div>
		</form>
		<br>
		</div>
</body>
</html>