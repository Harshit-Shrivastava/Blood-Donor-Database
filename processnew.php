<?php

include('ld.php');

$email=$_POST['email'];
$name=$_POST['name'];
$dob=$_POST['dob'];
$passwd=$_POST['pass'];
$blood_group=$_POST['bg'];
$address=$_POST['a1']." ".$_POST['a2'];
$locality=$_POST['loc'];
$city=$_POST['city'];
$state=$_POST['state'];
$country=$_POST['country'];
$contact_no=$_POST['cno'];

$passfinal=md5($passwd);
$conn=mysqli_connect($dbhost,$dbusername,$dbpasswd,$dbname) or die("failed to connect");


$query="insert into user(Name,DOB,Blood_Group,Nearest_Locality,Address,City,State,Country,Phone_Number,Email_id,password)
values('$name','$dob','$blood_group','$locality','$address','$city','$state','$country','$contact_no','$email','".$passfinal."')";


//echo $query;
session_start();
$res=mysqli_query($conn,$query);

if(mysql_affected_rows()!=0)
{
	$_SESSION['name']=''.$name;
	$_SESSION['email']=$email;
	header("Location: logged.php");
}
else
{
	$url="sorry.php?eid=2";
	header("Location: sorry.php");
}
?>
