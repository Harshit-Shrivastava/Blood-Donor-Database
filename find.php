<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<div id="heading" align="center">People Having the same Blood Group as You:</div>
<p class="ex" align="justify">
<div id="log">
<ol>
<?php
session_start();
if(!isset($_SESSION['loggedin']) && !isset($_SESSION['name']))
{
	echo "<b>Please Log In or Register to Continue</b>";
}
else
{
	include('ld.php');
	$conn=mysql_connect($dbhost,$dbusername,$dbpasswd) or die("failed to connect");
	mysql_select_db("ieee",$conn);
	$query="select * from user where Email_id='".$_SESSION['email']."'";
	//echo $query;
	
	$res=mysql_query($query,$conn) or die("failed to execute query 1");
	
	$row=mysql_fetch_array($res);
	
	//extract($row);
	//echo "Blood Group is ".$row['Blood_Group'];
	$sql="select * from user where Blood_Group='".$row['Blood_Group']."' and Name<>'".$_SESSION['name']."'";
	//echo $sql;
	$res2=mysql_query($sql,$conn) or die("Failed to Execute Query 2");
	while($row2=mysql_fetch_array($res2))
	{
		//extract($row2);
		echo "<li>Name: ".$row2['Name']."<br>Phone Number: ".$row2['Phone_Number']."</li>";
	}
	echo "</ol>";
}

?>
</div>
</p>
</body>
</html>
