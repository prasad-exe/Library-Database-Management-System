<html>
<head>
<title>insertion</title>
</head>
<body>
<?php
$a=$_POST['fname'];
$b=$_POST['pass'];

$connection= oci_connect('system','rahul',"localhost")or die("critical error:could not connect to database.\n\n".oci_error());
if($connection)
{
	$dbins="insert into login(username,password)
	values( '$a','$b')";
	$result1=oci_parse($connection,$dbins);
	if(oci_execute($result1))
	{
		echo "new row is created";
	}
	else
	{
		echo "error-not inserted";
	}
}

?>
</body>
</html>