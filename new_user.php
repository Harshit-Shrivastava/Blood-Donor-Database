<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">


<div id="heading" align="center">New User Registration</div>
<p class="ex">
<form method="post" action="processnew.php">
<div id="log">
<div id="loginbox">

<?php
echo "Please enter the following details<br />";
echo "<br/>E-mail ";?><font color="red">*</font><?php echo "<br/>";
?>
<font size="0.85px">
<?php
echo "(email will be used as username)<br/><br/>";
?>
</font>

<?php
echo "Name ";
?>

<font color="red">*</font>
<?php 
echo " <br/><br/>";
echo "Password ";
?>

<font color="red">*</font>

<?php echo " <br/><br>";
echo "Confirm Password ";
?>

<font color="red">*</font>

<?php 
echo " <br/><br/><br/>";
echo "Date of birth ";
?>

<font color="red">*</font>

<?php 
echo " <br/><br/>";
echo "Blood Group ";
?>

<font color="red">*</font>

<?php 
echo " <br/><br/>";
?>
<br/>
<?php
echo "Address Field 1 ";
?>

<font color="red">*</font>

<?php 
echo " <br/><br/>";
echo "Address Field 2 ";
?>

<font color="red">*</font>

<?php 
echo " <br/><br/>";
echo "Locality ";
?>

<font color="red">*</font>

<?php 
echo " <br/><br/>";
echo "City ";
?>

<font color="red">*</font>

<?php echo " <br/><br/><br/>";
echo "State ";
?>

<font color="red">*</font>

<?php 
echo " <br/><br/>";
echo "Country ";
?>

<font color="red">*</font>
<br/>
<?php echo " <br/>";
echo "Contact Number ";
?>

<font color="red">*</font>

<?php echo " <br/><br/>";
echo "Please enter the result of ";
?>

<font color="red">*</font>

<?php 
session_start();
echo "  ";
$a=rand(1,10);
$b=rand(1,10);
$c=$a+$b;
echo " ".$a."  +  ".$b." = <br/><br/>";
//echo ''.$c;
$_session['sum']=''.$c;
?>
<font color="D13E19">
Note:</font>
<?php echo "Fields marked with ";?><font color="red">*</font><?php echo " are compulsary";
?>


</div>


<div id="loginbox">
<br/><br/>
: <input type="text" name="email" size="20" method="post"/>
<br/><br/>
: <input type="text" name="name" size="20" method="post"/>
<br/><br/>
: <input type="password" name="pass" size="32" method="post"/>
<br/><br/>
: <input type="password" name="cpass" size="32" method="post"/>
<br/><br/><br/>
: <input type="text" name="dob" size="8" method="post"/>(dd-mm-yyyy)
: <br/><br/>
: <select name="bg">
<option>A+</option>
<option>A-</option>
<option>B+</option>
<option>B-</option>
<option>O+</option>
<option>O-</option>
<option>AB+</option>
<option>AB-</option>
</select>
<br/><br/><br/>
: <input type="text" name="a1" size="20" method="post"/>
<br/><br/>
: <input type="text" name="a2" size="20" method="post"/>
<br/><br/>
: <input type="text" name="loc" size="20" method="post"/>
<br/><br/>
: <input type="text" name="city" size="20" method="post"/>
<br/><br/>
: <input type="text" name="state" size="20" method="post"/>
<br/><br/>
: <input type="text" name="country" size="20" method="post"/>
<br/><br/>
: <input type="text" name="cno" size="20" method="post"/>
<br/><br/>
: <input type="text" name="usum" size="20" method="post"/>
<br><br/><input type="submit" value="Create User">

</form>
</div>
<p class="off"></p>
</div>

</p>
</body>
</html>
