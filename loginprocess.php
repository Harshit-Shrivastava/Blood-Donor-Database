<?php
session_start();

	//Retrieving variable values from the previous page
	$uid=$_POST["uid"];
	$pass=$_POST["pass"];
	$test=$_POST["test"];
	$sum=$_SESSION['sum'];
	$pwd=md5($pass);
	if($test==$sum)
	{
		//Database connectivity
		$con=mysql_connect("localhost","root","");
		mysql_select_db("ieee",$con);
		$query="select * from user";
		$result=mysql_query($query,$con);
	
		while($row=mysql_fetch_array($result))
		{
			if(($row['Email_id']==$uid)&&($row['password']==$pwd))
			{
				$_SESSION['name']=$row['Name'];
				$_SESSION['loggedin']=1;
				$_SESSION['email']=$uid;
				//$query2="select Email_id from user where Name='".$uid."'";
				//$res2=mysql_query($query2,$con);
				//$row2=mysql_fetch_array($res2);
				//$_SESSION['email']=$row['Email_id'];
				header('Location:logged.php');
				break;
			}
			else
			{
				//echo ''.$uid."<br/>".$pwd;
				header('Location:sorry.php');
			}
		}
		mysql_close($con);
	}
	else
	{
		//echo 'Lol';
		header("Location: sorry.php?eid=1");
	}
?>
	