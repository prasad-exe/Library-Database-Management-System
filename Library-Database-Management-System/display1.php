<html>
<head>
<title>Deletion</title>
<meta name="viewport" content="width=device-width, initial-scale=1">

<center><h1 style="font-family:verdana; font-size:300%;">Search Section</h1></center>

<?php
$a=$_POST['fname'];
$connection = oci_connect('system','rahul',"localhost") or die("Critical Error: Could not connect to database.\n\n". oci_error());
if($connection)
{
	$dbsearch="SELECT username,book1,author,book_name FROM cv where username='$a' ";
	$stid = oci_parse($connection, $dbsearch);
	
	oci_execute($stid);
	while ($row = oci_fetch_array($stid, OCI_NUM)) {
		?>
		<center>
    <h2><font face="Britannic Bold"><u>User Details</u><br /></font></h2>
<br /><br /><font face="Times New Roman" size="4">
	
	<b>username: </b><?php echo $row[0]."<br><br>"; ?>
    <b>book_id : </b><?php echo $row[1]."<br><br>"; ?>
	<b>author: </b><?php echo $row[2]."<br><br>"; ?> 
	<b>book name : </b><?php echo $row[3]."<br><br>"; ?>
		
	<?php
	}
	oci_free_statement($stid);	
	oci_close($connection);
	
}
?>
<form name="saas" method="POST" action="main.html">
<input type="submit" value="home">
</form>
</font></center>
</div>
</body>
</html>