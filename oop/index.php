<?php
include_once 'classA.php';
include_once 'classB.php';


$arr=array(5,2,1,2,3,4,5,6,7,3);
$arr2=array(1,1,1,1,1,1,1,1,1,1);

$a_class=new Aclass();


//$result=$a_class->summ(5, 7);


for  ($i=0; $i<count($arr);$i++) {
	$result[]=$a_class->summ($arr[$i], $arr2[$i]);
}


print_r($result);