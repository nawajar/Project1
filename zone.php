<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv=Content-Type content="text/html; charset=utf-8">
<title>โรงอาหารกลาง</title>
<link href="/project1/menu_assets/styles.css" rel="stylesheet" type="text/css">
<style type="text/css"> 
<!-- 
#chart{
		background: url(images/zone_1.jpg) no-repeat left top;
		border-collapse:collapse;
}
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
.style11 {color: #00BF00}
.style13 {font-size: medium}
.style14 {
	color: #2A1F00;
	font-size: medium;
}
.style16 {color: #007F00; }
.style20 {color: #00DF55}
.style21 {color: #FFFF00}
.style22 {color: #FF0000}
.style24 {
	color: #2A3F55;
	font-size: large;
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
<script language="javascript" src="function.js"></script>
<script language="JavaScript" type="text/javascript">
<!--
function CngTxt(id,txt,txt1){
 //var obj=document.getElementById(id);
var input1 = document.getElementById('Txt');       
var input2 = document.getElementById('Txt1'); 

 if (txt,txt1){
	// obj.innerHTML=txt; 
	input1.innerHTML=txt;
	input2.innerHTML=txt1;
	 }
 else {  
	 obj.innerHTML='x : 0 and y : 0'; }
} 

//-->
</script>
<script language="JavaScript">
	   var HttPRequest = false;

	   function doCallAjax(Sort) {
		  HttPRequest = false;
		  if (window.XMLHttpRequest) { // Mozilla, Safari,...
			 HttPRequest = new XMLHttpRequest();
			 if (HttPRequest.overrideMimeType) {
				HttPRequest.overrideMimeType('text/html');
			 }
		  } else if (window.ActiveXObject) { // IE
			 try {
				HttPRequest = new ActiveXObject("Msxml2.XMLHTTP");
			 } catch (e) {
				try {
				   HttPRequest = new ActiveXObject("Microsoft.XMLHTTP");
				} catch (e) {}
			 }
		  } 
		  
		  if (!HttPRequest) {
			 alert('Cannot create XMLHTTP instance');
			 return false;
		  }
	
			var url = 'table2.php';
			var pmeters = 'mySort='+Sort;
			HttPRequest.open('POST',url,true);

			HttPRequest.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
			HttPRequest.setRequestHeader("Content-length", pmeters.length);
			HttPRequest.setRequestHeader("Connection", "close");
			HttPRequest.send(pmeters);
			
			
			HttPRequest.onreadystatechange = function()
			{

				 if(HttPRequest.readyState == 3)  // Loading Request
				  {
				   document.getElementById("mySpan").innerHTML = "Now is Loading...";
				  }

				 if(HttPRequest.readyState == 4) // Return Request
				  {
				   document.getElementById("mySpan").innerHTML = HttPRequest.responseText;
				  }
				
			}

	   }
	</script>
</head>

<body class="twoColHybLtHdr">

<div id="container">
  <div id="header">
    <h1 align="left"><span class="style3"> &nbsp;&nbsp; &nbsp;<img src="fselogocolor.png" width="128" height="122" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;</span><img src="images/haeder.png" width="492" height="117" /><br />
    </h1>
    <div align="center"></div>
  </div>
  <div id="sidebar1">
    <h3><img src="images/zone.png" alt="zone" width="180" height="26" align="left" /><br />
        <img src="images/iconcontrol/onebit_24.png" width="30" height="32" />	<a href="zone.php?id=1" class="style14">โรงอาหาร</a><br />
  <img src="images/iconcontrol/onebit_24.png" alt="" width="30" height="32" /> <a href="zone_.php?id=2" class="style14">อาคารเรียนรวม</a><br />
          <br />
            <img src="images/mrtg.png" width="180" height="24" /><br />
              <img src="images/iconcontrol/activity_monitor.png" width="29" height="34" /> <a href="mrtg.php?locate=1" class="style14">โรงอาหาร</a><br />
    <img src="images/iconcontrol/activity_monitor.png" alt="" width="29" height="34" /> <a href="mrtg.php?locate=2" class="style14">อาคารเรียนรวม<br />
    </a><br />
    <img src="images/สถานะอุปกรณ์.png" width="180" height="24" /><br />
    <img src="images/iconcontrol/admin.png" width="30" height="32" /> <a href="online.php?locate=1" class="style14">โรงอาหาร</a><br />
    <img src="images/iconcontrol/admin.png" alt="" width="30" height="32" /> <a href="online.php?locate=2" class="style14">อาคารเรียนรวม</a><br />
    </h3>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p align="left">
      <!-- end #sidebar1 -->
    </p>
    <p align="left">&nbsp;</p>
    <p align="left">&nbsp;</p>
    <p align="left">&nbsp;</p>
    <p align="left">&nbsp;</p>
    <p align="left">&nbsp;</p>
  </div>
  <div id='cssmenu'>
	<ul>
	   <li class='active '><a href='index.php'><span>Home</span></a></li>
	   <li><a href='admin.php'><span>Manage</span></a></li>
	   <li><a href='logout.php'><span>Logout</span></a></li>
	   <li><a href='contact.php'><span>Contact</span></a></li>
	</ul>
	</div>
  <div id="mainContent">
    <h1 align="left" class="style11">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="images/อาคาร10.png" width="380" height="175" /></h1> 

    <?php

 
function color($a,$b,$pointX,$pointY)
 {
 $X = $pointX;
 $Y = $pointY;

  $s = count($X)-1;
  $surRoundLeft = -3;
  $surRoundRight = 3;
 	
  $stackX = array();
  $stackY = array();
  $stackXC = array();
  $stackYC = array();
  $t = 0;
  $u = 0;
  for($j=0; $j<=$s; $j++){
 		
 		$diffX[$j] = $X[$j] - $a;
 		$diffY[$j] = $Y[$j] - $b;
 		 
 		if(($diffX[$j] >= $surRoundLeft && $diffX[$j] <= $surRoundRight && $diffY[$j] >= $surRoundLeft &&  $diffY[$j] <= $surRoundRight) && ($X!=0 && $Y!=0))
 		{
 			
 		 if($X[$j] != $a || $Y[$j] != $b){
         
 		$stackX[$t] = $a;
        $stackY[$t] = $b;
        $t++;
 		 	
 		 	
 		  }else{
 		  $stackXC[$u] = $a;
          $stackYC[$u] = $b;
 		  $u++;
 		  
 		  
 		  }
 			
 			
 		}	
 		
 		
 	 }
   
   $rn = count($stackX)-1; 	
   $status = "";	 
   $disX = array();
   $disY = array();
  
   //$dis[12][0] = -1;
   //$dis[13][0] = -1;
   //$dis[14][0] = -1;
   if($_GET["id"]==1){
   for($t=0; $t<=18; $t++){

	   for($u=0; $u<=18; $u++){
        
		if((($t >=12 && $t <=18) && ($u >= 0 && $u <= 2)) || (($t >=0 && $t <=2) && ($u >= 16 && $u <= 18)) || (($t >=11 && $t <=18) && ($u >= 16 && $u <= 18))   ){
         $dis[$t][$u] = -1;
		}

	   }


       }
   }
   
   if(@$dis[$a][$b] == -1){

	   $status = "none.gif";
    
   }else if (in_array($a, $stackX, true) && in_array($b, $stackY, true) && !in_array($a, $stackXC, true) && !in_array($b, $stackYC, true)) 
   	{
     //echo "*";
     $status = "green.gif";
    }else if (in_array($a, $stackXC, true) &&in_array($b, $stackYC, true)){
    	//echo "+";
    	$status = "01.gif";
    }else if($X == 0 && $Y ==0){
	
	$status = "red.gif";
	}else{
    	
    	//echo ".";
		
         $status = "yellow.gif";
		
    	
    }
	
	if(!$X == 0 && !$Y ==0){
	
	$allac = count($X);
	$urlx = http_build_query($X, 'x', '&amp;');
	$urly = http_build_query($Y, 'y', '&amp;');
	}
	
	
	
   	
   ?>
     <img src='images/<?php echo $status; ?>' onmouseover="CngTxt('Txt','<?php echo $a;?>','<?php echo $b; ?>')"
 onmouseout="CngTxt('Txt')"
 width='20' height='20' onClick="NewWindow('distance.php?<?php    
 echo "px=".$a."&amp;py=".$b."&amp;ac=".$allac."&amp;".$urlx."&amp;".$urly;
 
 ?>','','450','300','yes');return false" >
   <?php
 }



?>
	 
	 
	 

    	<FONT SIZE="5" COLOR="">ค่าพิกัดเซล</FONT> <table>
 <tr><td rowspan='2'>&nbsp;</td>
 <td><IMG SRC="images/x.jpg" WIDTH="20" HEIGHT="20" BORDER="0" ALT="x">=</td><td><span id="Txt"Style="font-size:15pt;"></span></td></tr>
 <tr><td><IMG SRC="images/y.jpg" WIDTH="20" HEIGHT="20" BORDER="0" ALT="y">=</td><td><span id="Txt1"Style="font-size:15pt;"></span></td></tr>
 </table>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1 Cell : 36 ตารางเมตร&nbsp; <!--  <div id="Txt" style="width:100px;height:50px;border:solid black 1px;" >x : 0 </div>
 <div id="Txt1" style="width:100px;height:50px;border:solid black 1px;" >Y: 0</div> -->
 <table  id="chart"width='647'height='550' >
 <tr><tdheight='50' colspan='2'></td>
 <tr><td width='50'height='50'></td><td width="602" > 
 <table   width='500'height='500' >


  <?php
  function updateGraph($param)
{
include("config.php");

$X = array();
$Y = array();
  $objConnect = mysql_connect($dbhost,$dbUser,$dbPass) or die("Error Connect to Database");
	$selectDB = $dbName;
  $objDB = mysql_select_db($selectDB);
  $strSQL = "SELECT * FROM chart_cell WHERE cell_value = 'AP' AND Location_id = '".$_GET["id"]."' ";
  $objQuery = mysql_query($strSQL) or die ("Error Query [".$strSQL."]");
  $numRows =  mysql_num_rows($objQuery);
	
   if($numRows == 0){
    mysql_close($objConnect);
    return 0;
    }   
	
  $i=0;
  while($data=mysql_fetch_array($objQuery)){

   $X[$i] = $data["x"];
   $Y[$i] = $data["y"];
   
   $i++;

   }
 
   mysql_close($objConnect);

 if($param == 1){
 return $X;
 }else if($param == 2){
 return $Y;
 }


}
  
  
  /////////////////////////////////////////////
  $cell_id=1;
  $pX = updateGraph(1);
  $pY = updateGraph(2);
  for($y=0;$y<=18;)
  {
    echo"<tr>";
	 for($x=0;$x<=18;$x++)
	  {
      echo"<td width='25'height='' >";

    $cell_id=$cell_id+1;
	

	color($x,$y,$pX,$pY);
    
  echo"</td>";
	  }
	   
	  echo"</tr>";
 $y++;
   
	  }
	  
	?>
	</table>
	 </td></tr>
	</table> 
    	
    	
    	
    	
    	<span class="style24">แผนผังแสดงจุดติดตั้งของอุปกรณ์และค่าความเข้มของสัญญาณ  <strong>Access Point</strong></span><br />
   	การแสดงค่าของสัญญาณจะมีหน่วยเป็น (-db)จะแบ่งออกเป็นสามช่วงด้วยกัน ดังนี้<br />
      ช่วงที่ 1 ตั้งแต่ (-0 db) ถึง (-50 db)     <span class="style20">( สีเขียว)</span>     สัญญาณอยุในระดับที่ดี <br />
      ช่วงที่ 2 ตั้งแต่ (-51 db) ถึง (-70 db)   <span class="style21">(สีเหลือง) </span>    สัญญาณอยุในระดับปานกลาง <br />
     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;    <span class="style22">(สีแดง)  </span>     ไม่มีอุปกรณ์ติดตั้ง 
     <p>
      <!-- end #mainContent -->
     </p>
    <p>&nbsp;</p>
  </div>
<!-- This clearing element should immediately follow the #mainContent div in order to force the #container div to contain all child floats --><br class="clearfloat" />
	<div id="footer">
    <div id="footer2">
      <center class="style16">
      </center>
      <!-- end #footer -->
    </div>
    </div>
<!-- end #container --></div>
</body>
</html>
