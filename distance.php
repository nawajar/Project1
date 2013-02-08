<html>
<head>

<style>
.datagrid table { border-collapse: collapse; text-align: left; width: 100%; } .datagrid {font: normal 12px/150% Arial, Helvetica, sans-serif; background: #fff; overflow: hidden; border: 1px solid #36752D; -webkit-border-radius: 3px; -moz-border-radius: 3px; border-radius: 3px; }.datagrid table td, .datagrid table th { padding: 3px 10px; }.datagrid table thead th {background:-webkit-gradient( linear, left top, left bottom, color-stop(0.05, #3A7D07), color-stop(1, #4FA346) );background:-moz-linear-gradient( center top, #3A7D07 5%, #4FA346 100% );filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#3A7D07', endColorstr='#4FA346');background-color:#3A7D07; color:#FFFFFF; font-size: 12px; font-weight: bold; border-left: 0px solid #36752D; } .datagrid table thead th:first-child { border: none; }.datagrid table tbody td { color: #275420; border-left: 1px solid #C6FFC2;font-size: 12px;font-weight: normal; }.datagrid table tbody .alt td { background: #DFFFDE; color: #275420; }.datagrid table tbody td:first-child { border-left: none; }.datagrid table tbody tr:last-child td { border-bottom: none; }

body {
background: #ffffff;
background-image: url("images/b1.png"), url("images/b2.png");
background-repeat: repeat-x, repeat;
}


</style>
</head>
<body>

<?php


$x = (int)$_GET["px"];
$y = (int)$_GET["py"];
$ac = $_GET["ac"];

$allX = array();
$allY = array();
for($a=0; $a<=$ac-1; $a++){
$allX[$a] = (int)$_GET["x".$a];
$allY[$a] = (int)$_GET["y".$a];

}





?>

<div class="datagrid"><table>
<thead><tr><th>id</th><th>Equip</th><th><?php echo "[".$x.",".$y."]"; ?> Distance</th></thead>
<tbody>
<?php
for($b=0; $b<=$ac-1; $b++){
?>
<tr <?php if($b%2==0){echo "class = 'alt'";}?>><td><?=$b+1?></td><td>Access Point at (<?=$allX[$b]?>,<?=$allY[$b]?>)</td>
<td>
<?php

  

$sumXY = pow(abs($x - $allX[$b]),2) + pow(abs($y - $allY[$b]),2);
$rs = sqrt($sumXY);
$distance = $rs * 6;

echo $distance." (m)";


?>

</td></tr>


<?php
}
?>

</tbody>
</table></div>




</body>
</html>











