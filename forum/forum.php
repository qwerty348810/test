<?php 
session_start();
if(isset($_SESSION['views'])){
$_SESSION['views']=$_SESSION['views']+1;
}
else {
$_SESSION['views']=1;
}
?>

<!-- page header -->
<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="" lang="" dir="">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" >
	<meta charset="utf-8">
	<title>Forum</title>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
</head>
 <body>
 <?php
 $action=$_GET['action'];
 if (isset($action)&&file_exists($action)){
 include_once($action.".php");}
 else{
    include_once'forum.php'; 
 }
 ?>
 <?php  include_once 'conf.php'; ?>
 </body>
</html>
