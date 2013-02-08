<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="refresh" content="10">
<meta http-equiv="Content-Type" content="text/html; charset=windows-874" />
<title>index</title>
<link href="/project1/menu_assets/styles.css" rel="stylesheet" type="text/css">

<link rel="stylesheet" type="text/css" href="css/table-general.css" />
<script src="Scripts/AC_RunActiveContent.js" type="text/javascript"></script>
</head>

<body class="" bgcolor="white">

  <?
	// include config for connect database
    include("config.php");
	// get connection
	$objConnect = mysql_connect($dbhost,$dbUser,$dbPass) or die("Error Connect to Database");
	//select database
	$objDB = mysql_select_db($dbName);
	//query for get record
	$strSQL = "SELECT * FROM equipment WHERE Ip_address = ";
	$strSQL .= "'".$_GET["ip_add"]."'";
	$strSQL .= "ORDER BY Equipment_id ASC";
	//set UTF-8 fixed thai language problem
	 mysql_query("SET NAMES UTF8");
	 //do run query
	$objQuery = mysql_query($strSQL) or die ("Error Query [".$strSQL."]");
	//get number of rows
	$num = mysql_num_rows($objQuery);
	
	while($objResult = mysql_fetch_array($objQuery)){
	$ip = $objResult["Ip_address"];
	$oid = $objResult["OID_member"];
	$cc = $objResult["Community"];
	
	}
	
    ?> 

<table  class="general" border='1'>
	<tr class="head">
	<td><b>ID</b></td>
	<td><b>MAC Address</b></td>
	</tr>
	<?
    
	
	$str = shell_exec("snmpwalk -v 1 -c $cc $ip $oid ");
	//$a = "SNMPv2-SMI::mib-2.17.4.3.1.1.0.22.234.90.168.158 = Hex-STRING: 00 16 EA 5A A8 9E SNMPv2-SMI::mib-2.10.2.7.11.18.0.22.234.190.1.124 = Hex-STRING: 0A 1B EC 5G AE 7F";	
	$array=explode('SNMPv2-SMI',$str);
	array_shift($array);
	$ar2 = array();
		foreach($array as $value){
		$str=strchr($value,'Hex-STRING: ');
		if(!empty($str))
		{
		$ar2[]=str_ireplace('Hex-STRING: ','',$str);
		}
		}
	$rr = count($ar2);
	$idex = 0;
	for($i=0;$i<$rr;$i++)
	 {
	 
	              if(count($ar2[$i]) != "")
		         {
				if(!empty($ar2[$i]))
				{
                $mac_address = explode(' ', $ar2[$i]);
				
				$mac =  $mac_address[0]."-".$mac_address[1]."-".$mac_address[2]."-".$mac_address[3]."-".$mac_address[4]."-".$mac_address[5];
				echo "<tr><td>".++$idex."</td><td>".$mac."</td></tr>";
				}
				
				
				}
	 
	 
	 }
	
	
	
	//close database connection
	mysql_close($objConnect);
	?>
	
   
    </table>
   <?
   echo "Online ".$idex;
   
   ?>
  




