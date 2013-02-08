
<html>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>toolbar</title>
</head>

<body bgcolor="#cdcdcd" >
 <?php 
  
include ('connect.php'); 
         $xx=$_GET['x'];
$yy=$_GET['y'];    
$ii=$_GET['id'];


$sql="select * from chart_cell where  x='$xx'and y='$yy' and LocationID = '$ii' ";

$result=mysql_query($sql);

   while($row=mysql_fetch_array($result))
{ 
	$chart_cell_id=$row['chart_cell_id'];
	$cell_value=$row['cell_value'];
	     $ip = $row['ip_address'];         
	$x=$row['x'];
	$y=$row['y'];
	$xx=$_GET['x'];
    $yy=$_GET['y'];
	
	$score="";

    if($cell_value >=71) { $score= "red.gif" ; }
	else if (($cell_value>=51)&&($cell_value<=70)) { $score= "yellow.gif" ; }
	else if (($cell_value>=1)&&($cell_value<=50)) { $score= "green.gif" ; }
	
    else if ($cell_value=='up.gif') {
		$sql3="select * from equipment where ip_address='$ip' ";
        $result=mysql_query($sql3);
     while($row=mysql_fetch_array($result)){	
	 $status = $row['status'];
		 if($status=="down"){ $score= "down.gif"; }
	     else if($status=="up"){ $score= "up.gif";}
	 
	 }
		
		}
?>
<center>
<fieldset><legend>cell_of_Location</legend>
<table id="table1" border="0" width="" height="" bgcolor="#a7a7a7">
<tr ><center><td colspan="4">แสดงข้อมูล</td></center></tr>
<tr ><center><td colspan="1"><center>Name_Of_Loacation</center></td><td  bgcolor="" width="" colspan="3"><center>
  อาคารโรงอาหารกลาง
</center></td></td></center></tr>
<tr><center><td><center>Floor</center></td><td bgcolor="#c0c0c0"><center><?php echo $row['LocationID']; ?></center></td><td><center>ค่าเซล</center></td><td bgcolor="#c0c0c0"><center>  <img src='images/<?php echo $score; ?>' width='20' height='20' ?> </center></td></center></tr>

	



<tr><td colspan="4">รายละเอียด/Detail</td></tr>
<tr ><td  bgcolor="#c0c0c0" colspan="4" width="400">
<center><textarea rows="4" cols="45" wrap="physical"  style=" color:; ,background-color:#c0c0c0; ,border:thin;, margin-left: auto;, margin-right: auto;  ">
<?php echo $row['Description']; ?>
</textarea></center>
</td></tr>
<?php
  } 

?>
</table>
</fieldset> </center>
<script type="text/javascript"> 
document.all.table1.border="0"; 
</script>
<?
mysql_close ( $conn ); 
?>
</body>

</html>
