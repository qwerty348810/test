

<?php
$A=array("Belarus"," Russia","Ukraine","Kazakhstan","Austria","Japan","Canada");
$B=array(1,2,3,4,5,6,7,8,9,10);
$C=array("January"=>1,"February"=>2,"March"=>3,"April"=>4,"May"=>5,"June"=>6,"July"=>7,"August"=>8,"September"=>9,"October"=>10,"November"=>11,"December"=>12);
?>
<table border="1" style="width:300px">
<tr>
  <td>я</td>
  <td>очень</td> 
  <td>сильно</td>
</tr>
<tr>
  <td>люблю</td>
 
 
<?

foreach ($A as $k=>$v){
    foreach($B as $kk=>$vv){
	 foreach($C as $kkk=>$vvv){
	//echo "<br>";
 
	 echo "<td>".$v." ".$vv." ".$kkk."</td>";
}
}
}
		 
?>
  <td>!!!</td>
</tr>
</table> 