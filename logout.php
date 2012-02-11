<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html>
<head>
<script type="text/javascript">

function initialload()
{
	//alert('called');
	document.getElementById("log").style.cursor=pointer;
}

function validateData()
{
alert('called');
/*var xmlhttp;
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
  xmlhttp.open("GET","loginprocess.php",true);*/
 
xmlhttp.send();
}

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
<title>United Blood Services</title>


<link rel="stylesheet" type="text/css" href="style.css" />

<body onload="initialload();">

<div id="body">
</div>
<!-- Place this tag where you want the +1 button to render -->
<div id="gtag">
<g:plusone annotation="inline"></g:plusone>

<!-- Place this render call where appropriate -->
<script type="text/javascript">
  (function() {
    var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
    po.src = 'https://apis.google.com/js/plusone.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
  })();
</script>
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

<div id="heading" align="center">Successfully Logged-out</div>
<?php
session_start();
session_destroy();
?>
<p class="ex" align="justify">

You were successfully logged out from the United Blood Services.
Please log-in again to avail full use of the United Blood Services.

</p>
</div>
<div id="foot">
<br/>
<center>
2012 (c) United Blood Services
</br>
</center>
</div>

</body>
</html>