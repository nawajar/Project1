<?php
/*
Check user login?
*/
@session_start();
if(@$_SESSION["sesID"] != session_id()){
header("Location:/project1/admin.php?error=Please login!");
}




?>



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv=Content-Type content="text/html; charset=utf-8">
<title>index</title>
<link href="/project1/menu_assets/styles.css" rel="stylesheet" type="text/css">
<style type="text/css"> 
<!-- 
body  {
	font: 100% Verdana, Arial, Helvetica, sans-serif;
	background: #666666;
	margin: 0; /* it's good practice to zero the margin and padding of the body element to account for differing browser defaults */
	padding: 0;
	text-align: center; /* this centers the container in IE 5* browsers. The text is then set to the left aligned default in the #container selector */
	color: #000000;
}
.twoColHybLtHdr #container { 
	width: 80%;  /* this will create a container 80% of the browser width */
	background: #FFFFFF;
	margin: 0 auto; /* the auto margins (in conjunction with a width) center the page */
	border: 1px solid #000000;
	text-align: left; /* this overrides the text-align: center on the body element. */
} 
.twoColHybLtHdr #header { 
	background: #DDDDDD; 
	padding: 0 10px;  /* this padding matches the left alignment of the elements in the divs that appear beneath it. If an image is used in the #header instead of text, you may want to remove the padding. */
} 
.twoColHybLtHdr #header h1 {
	margin: 0; /* zeroing the margin of the last element in the #header div will avoid margin collapse - an unexplainable space between divs. If the div has a border around it, this is not necessary as that also avoids the margin collapse */
	padding: 10px 0; /* using padding instead of margin will allow you to keep the element away from the edges of the div */
}

/* Tips for sidebar1:
1. Since we are working in relative units, it's best not to use padding on the sidebar. It will be added to the overall width for standards compliant browsers creating an unknown actual width. 
2. Since em units are used for the sidebar value, be aware that its width will vary with different default text sizes.
3. Space between the side of the div and the elements within it can be created by placing a left and right margin on those elements as seen in the ".twoColHybLtHdr #sidebar1 p" rule.
*/
.twoColHybLtHdr #sidebar1 {
	float: left; 
	width: 12em; /* since this element is floated, a width must be given */
	background: #EBEBEB; /* the background color will be displayed for the length of the content in the column, but no further */
	padding: 15px 0; /* top and bottom padding create visual space within this div  */
}
.twoColHybLtHdr #sidebar1 h3, .twoColHybLtHdr #sidebar1 p {
	margin-left: 10px; /* the left and right margin should be given to every element that will be placed in the side columns */
	margin-right: 10px;
}

/* Tips for mainContent:
1. The space between the mainContent and sidebar1 is created with the left margin on the mainContent div.  No matter how much content the sidebar1 div contains, the column space will remain. You can remove this left margin if you want the #mainContent div's text to fill the #sidebar1 space when the content in #sidebar1 ends.
2. Be aware it is possible to cause float drop (the dropping of the non-floated mainContent area below the sidebar) if an element wider than it can contain is placed within the mainContent div. WIth a hybrid layout (percentage-based overall width with em-based sidebar), it may not be possible to calculate the exact width available. If the user's text size is larger than average, you will have a wider sidebar div and thus, less room in the mainContent div. You should be aware of this limitation - especially if the client is adding content with Contribute.
3. In the Internet Explorer Conditional Comment below, the zoom property is used to give the mainContent "hasLayout." This may help avoid several IE-specific bugs.
*/
.twoColHybLtHdr #mainContent { 
	margin: 0 20px 0 13em; /* the right margin can be given in percentages or pixels. It creates the space down the right side of the page. */
} 
.twoColHybLtHdr #footer { 
	padding: 0 10px; /* this padding matches the left alignment of the elements in the divs that appear above it. */
	background:#DDDDDD;
} 
.twoColHybLtHdr #footer p {
	margin: 0; /* zeroing the margins of the first element in the footer will avoid the possibility of margin collapse - a space between divs */
	padding: 10px 0; /* padding on this element will create space, just as the the margin would have, without the margin collapse issue */
}

/* Miscellaneous classes for reuse */
.fltrt { /* this class can be used to float an element right in your page. The floated element must precede the element it should be next to on the page. */
	float: right;
	margin-left: 8px;
}
.fltlft { /* this class can be used to float an element left in your page */
	float: left;
	margin-right: 8px;
}
.clearfloat { /* this class should be placed on a div or break element and should be the final element before the close of a container that should fully contain a float */
	clear:both;
    height:0;
    font-size: 1px;
    line-height: 0px;
}
.style3 {font-size: 36%}
.style5 {font-size: 40%}
.style10 {font-size: 25px}
.style11 {color: #00BF00}
.style13 {font-size: medium}
.style14 {
	color: #2A1F00;
	font-size: medium;
}
.style17 {	color: #FF0000;
	font-size: medium;
}
.style18 {color: #2A1F00}
.style19 {	color: #2A3F55;
	font-size: medium;
}
--> 
</style><!--[if IE]>
<style type="text/css"> 
/* place css fixes for all versions of IE in this conditional comment */
.twoColHybLtHdr #sidebar1 { padding-top: 30px; }
.twoColHybLtHdr #mainContent { zoom: 1; padding-top: 15px; }
/* the above proprietary zoom property gives IE the hasLayout it may need to avoid several bugs */
</style>
<![endif]-->
<script src="Scripts/AC_RunActiveContent.js" type="text/javascript"></script>
<link href="/project1/menu_assets/styles.css" rel="stylesheet" type="text/css">
<style type="text/css">
<!--
.style20 {color: #2A1F00; font-size: medium; font-weight: bold; }
-->
</style>
</head>

<body class="twoColHybLtHdr">

<div id="container">
  <div id="header">
<h1 align="left"><span class="style3">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span class="style3"><img src="fselogocolor.png" width="128" height="122" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><img src="images/haeder.png" width="492" height="117" /><br />
    </h1>
    <div align="center"></div>
  </div>
  <div id="sidebar1">
    <h3><img src="images/zone.png" alt="zone" width="180" height="24" align="left" /><br />
      <img src="images/iconcontrol/onebit_24.png" width="30" height="32" /> <a href="zone.php?id=1" class="style14">โรงอาหาร</a><br />
      <img src="images/iconcontrol/onebit_24.png" alt="" width="30" height="32" /> <a href="zone_.php?id=2" class="style14">อาคารเรียนรวม</a><br />
      <br />
    <img src="images/mrtg.png" width="180" height="22" /><img src="images/iconcontrol/activity_monitor.png" width="23" height="29" /> <a href="mrtg.php?locate=1" class="style14">โรงอาหาร</a><br />
    <img src="images/iconcontrol/activity_monitor.png" width="23" height="29" /> <a href="mrtg.php?locate=2" class="style14">อาคารเรียนรวม</a></h3>
    <h3><img src="images/สถานะอุปกรณ์.png" alt="" width="179" height="21" /><img src="images/iconcontrol/admin.png" alt="" width="26" height="28" /> <a href="online.php?locate=1" class="style14">โรงอาหาร</a>	<br />
      <img src="images/iconcontrol/admin.png" alt="" width="26" height="28" />&nbsp;<a href="online.php?locate=2" class="style14">อาคารเรียนรวม</a><a href="mrtg.php?locate=2" class="style14"><br />
      <br />
      </a><img src="images/Addequipment.jpg" width="183" height="28" /><a href="#" class="style14"><img src="images/iconcontrol/onebit_09.png" width="27" height="28" /></a><a href="/project1/equipment.php?locate=1" class="style14">โรงอาหาร</a><br />
      <a href="#" class="style14"><img src="images/iconcontrol/onebit_09.png" alt="" width="27" height="28" /></a><a href="/project1/equipment.php?locate=2" class="style14">อาคารเรียนรวม</a><br />
      <br />
      <img src="images/ติดตามพฤติกรรมผู้ใช้งาน.png" width="184" height="30" /><img src="images/ติดตาผู้ใช้งาน.png" width="26" height="28" /> <a href="#" class="style14">โรงอาหาร</a><br />
       <img src="images/ติดตาผู้ใช้งาน.png" alt="" width="26" height="28" /> <a href="#" class="style14">อาคารเรียนรวม</a><br />
    </h3>
    <p><img src="images/administrator.png" width="169" height="27" /><img src="images/iconcontrol/add_admin.png" width="27" height="26" /> <a href="name_admin.php" class="style20">ผู้ดูแลระบบ</a><br />
      <img src="images/iconcontrol/add_admin.png" alt="" width="27" height="26" /> <a href="add_admin.php" class="style14"><strong>เพิ่มผู้ดูแลระบบ</strong></a></p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
	
	
    <!-- end #sidebar1 --></div>
  <div id='cssmenu'>
	<ul>
	   <li class='active '><a href='index.php'><span>Home</span></a></li>
	   <li><a href='admin.php'><span>Manage</span></a></li>
	   <li><a href='logout.php'><span>Logout</span></a></li>
	   <li><a href='contact.php'><span>Contact</span></a></li>
	</ul>
	</div>
	
	
  <div id="mainContent">
    
      &nbsp;&nbsp;&nbsp;&nbsp;
      <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <strong><span class="style19">Administrator Page</span></strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br />
&nbsp;&nbsp;&nbsp;<br />
        </h1>
      </p>
    <p class="style11">&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;</p>
    <p>
      <!-- end #mainContent -->
    </p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
  </div>
<!-- This clearing element should immediately follow the #mainContent div in order to force the #container div to contain all child floats --><br class="clearfloat" />
	<div id="footer">
    <p>Footer
      <!-- end #footer -->
    </p>
  </div>
<!-- end #container --></div>
</body>
</html>
