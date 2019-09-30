<html>
<head>
<title>Update2</title>
</head>
<body>
<h1><center>Updation</center></h1>
<?php
$a = $_POST['fname'];
$b=$_POST['b1'];

$connection = oci_connect('system','rahul',"localhost") or die("Critical Error: Could not connect to database.\n\n". oci_error());
if($connection)
{
	$dbupdate="UPDATE library SET book1 = '$b' WHERE username='$a' ";
	$result = oci_parse($connection,$dbupdate);
	if($result)
	{
		echo "Updated";
	}
	oci_execute($result);
	}

?>
<form name="saas" method="POST" action="main.html">
<input type="submit" value="home">
</form>
</body>
</html>