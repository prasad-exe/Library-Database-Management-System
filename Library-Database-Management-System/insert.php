<html>
<head>
<title>insertion</title>
</head>
<body>
<?php
$a=$_POST['uname'];
$b=$_POST['b1'];

$connection= oci_connect('system','rahul',"localhost")or die("critical error:could not connect to database.\n\n".oci_error());
if($connection)
{
	$dbins="insert into library(username,book1)
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
<form name="saas" method="POST" action="main.html">
<input type="submit" value="home">
</form>
</body>
</html>