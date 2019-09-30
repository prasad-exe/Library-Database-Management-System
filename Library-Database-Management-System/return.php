<html>
<head>
<title>Deletion</title>
<body>
<?php
$a = $_POST['fname'];
$connection = oci_connect('system','rahul',"localhost") or die("Critical Error: Could not connect to database.\n\n". oci_error());
if($connection)
{
	$dbupdate="DELETE from library WHERE username= '$a'  ";
	$result = oci_parse($connection,$dbupdate);
	if($result)
	{
		echo "Deleted";
	}
	oci_execute($result);
}

?>
<form name="saas" method="POST" action="main.html">
<input type="submit" value="home">
</form>

</body>
</html>