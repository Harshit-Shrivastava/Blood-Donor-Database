<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<div id="heading" align="center">My Profile</div>
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
	echo "Name: ".$row['Name']."<br />Blood Group: ".$row['Blood_Group']."<br />Date Of Birth: ".$row['DOB']
	,"<br />Contact Details: ".$row['Phone_Number']."<br />Address: ".$row['Address']."<br />City: ".$row['City']
	."<br />State: ".$row['State'];
}

?>
</div>
</p>
</body>
</html>
