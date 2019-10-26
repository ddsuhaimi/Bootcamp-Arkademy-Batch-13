<?php 

require_once 'connections.php';

if($_GET['id']) {
	$id = $_GET['id'];

	$sql = "SELECT * FROM person WHERE id = {$id}";
	$result = $connect->query($sql);

	$data = $result->fetch_assoc();

	$connect->close();

?>

<!DOCTYPE html>
<html>
<head>
	<title>Edit Users</title>
<link rel="stylesheet" type="text/css" href="mystyle.css">
	</head>
<body>

<fieldset>
	<legend>Edit Users</legend>

	<form action="update.php" method="post">
		<table cellspacing="0" cellpadding="0">
			<tr>
				<th>Name</th>
				<td><input type="text" name="name" placeholder="Name" value="<?php echo $data['name'] ?>" /></td>
			</tr>		
			<tr>
				<th>Age</th>
				<td><input type="text" name="age" placeholder="Age" value="<?php echo $data['age'] ?>" /></td>
			</tr>
			<tr>
				<input type="hidden" name="id" value="<?php echo $data['id']?>" />
				
				<td ><button id="someTable" type="submit">Save Changes</button>&nbsp;&nbsp;
				<a href="index.php"><button type="button">Back</button></a></td>
			</tr>
		</table>
	</form>

</fieldset>

</body>
</html>

<?php
}
?>