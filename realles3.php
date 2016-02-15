<!DOCTYPE html>
<?php 
	require("config.php");
	
	$action = isset($_POST['name']) ? $_POST['name'] : null;

	if (isset($_POST['name'])) {
		$sql = "INSERT INTO activities (description) VALUES ('$action')";
		$result = mysqli_query($conn, $sql);
	}
	
	$sql = "SELECT * FROM `activities`";

	$result = mysqli_query($conn, $sql);

	$rows = mysqli_fetch_all($result, MYSQLI_ASSOC);

	if (!empty($_GET['id'])) {
		echo $_GET['id'] . " " . $_GET['action'];
	} 
 ?>
<html>   
	<head>

		<title>To-do-list</title>
		<link rel="stylesheet" type="text/css" href="style.css">
		<link rel="icon" href="../../s.png">
	</head>
	<body>
		<div class="header">
			<h1> To do.</h1>
		</div>
		<div class="wrapper">
			<div class="list">
				<table>
					<?php foreach ($rows as $row) { ?>
					<tr>
						<td><?php echo $row['description'] ?><span></span></td>
						<td><a class="real" href="edit.php?id=<?php echo $row['id'];?>">edit</a></td>
						<td><a class="real" href="delete.php?id=<?php echo $row['id'];?>&description=<?php echo $row['description'];?>">delete</a>
					<tr>
					
					<?php } ?>
				</table>

				<form class="item-add" method="post">
					<input type="text" name="name" placeholder="Type a new item here." class="input" autocomplete="off" required>
					<input type="submit" value="Add" class="submit">
				</form>
			</div>
		</div>
	</body>
</html>