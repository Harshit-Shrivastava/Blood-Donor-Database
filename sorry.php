<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html>
<head>
<title>United Blood Services</title>
<script type="text/javascript">
function loadPage(loc)
{
var xmlhttp;
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("lol").innerHTML=xmlhttp.responseText;
    }
  }
  if(loc==1)
  xmlhttp.open("GET","home.php",true);
  else if(loc==2)
  xmlhttp.open("GET","about.php",true);
  else if(loc==3)
  xmlhttp.open("GET","contact.php",true);
  else if(loc==4)
  xmlhttp.open("GET","new_user.php",true);
  else if(loc==5)
  xmlhttp.open("GET","feedback.php",true);
  else if(loc==6)
  xmlhttp.open("GET","find.php",true);
  else if(loc==7)
  xmlhttp.open("GET","login.php",true);
 
xmlhttp.send();
}

</script>

<link rel="stylesheet" type="text/css" href="style.css" />

<body>

<div id="body">
</div>

<div id="img_name">
<img src="images/blood_bank.jpg">
</div>

<div id="name">
United Blood Services
</div>

<div id="menu">
<ul>
<li><a onclick="loadPage(7);">Log In</a></li>
<li><a onclick="loadPage(6);">Find Donor</a></li>
<li><a onclick="loadPage(5);">Feedback</a></li>
<li><a onclick="loadPage(4);">New User</a></li>
<li><a onclick="loadPage(3);">Contact Us</a></li>
<li><a onclick="loadPage(2);">About Us</a></li>
<li><a onclick="loadPage(1);">Home</a></li>
</ul>
</div>

<p class="off"></p>



<div id="lol">
<div id="heading" align="center">Oops!!!Something went wrong!</div>
<p class="ex" align="center">
<?php

if($_GET['eid']==1)
echo "Could Not Login";
else if($_GET['eid']==2)
echo "Could not Create New User";

?>
</p>
</div>


</body>
</html>