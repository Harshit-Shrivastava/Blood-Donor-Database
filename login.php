
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<div id="heading" align="center">Login</div>
<p class="ex" align="justify">
<div id="login">
<form method="POST" action="loginprocess.php">
<?php
echo "Please enter the login details <br />";
echo "<br/>Username:"."    ";?>
<input type="text" name="uid" size="32"/>
<?php
echo "<br/>Password :"." ";?>
<input type="password" name="pass" size="32"/>
<?php
session_start();
$a=rand(1,10);
$b=rand(1,10);
$c=$a+$b;
$_SESSION['sum']=''.$c;

echo '<br/><br/><br/>Please enter the result of the following in the box below';
echo "<br/><br/><br/> ".$a." + ".$b." = ";
?>
<input type="text" name="test" size="4">
<br/><br/>
<input type="submit" value="Submit">
</form>
</div>
</p>