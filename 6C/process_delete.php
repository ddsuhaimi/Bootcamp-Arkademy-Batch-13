<html>
<head>
<link rel="stylesheet" type="text/css" href="mystyle.css">
    <title>User Record System Using PHP and MySQLI</title>
 
 
</head>
<body>
<?php 

require_once 'connections.php';

if($_POST) {
	$id = $_POST['id'];

	$sql = "DELETE FROM person WHERE  id = {$id}";
	if($connect->query($sql) === TRUE) {
		echo "<link rel='stylesheet' type='text/css href='mystyle.css'>";
		echo "<p>Record Sucessfully Remove from the Database !!!</p>";
		echo "<a href='index.php'><button type='button'>Back</button></a>";
	} else {
		echo "Error removing record : " . $connect->error;
	}

	$connect->close();
}

?>

</body>
<html>