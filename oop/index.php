<?php
include_once 'classA.php';
include_once 'classB.php';
include_once 'PC.php';

$electronics= new Electronics();
$tv= new TV();
$pc=new PC();


echo $electronics->getParameters();