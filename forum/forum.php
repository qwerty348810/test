<?php 
session_start();
?>
<?php 
 $action='';
 if (isset($_GET['action']) && file_exists($_GET['action'].".php")){
   $action=$_GET['action']; 
   include_once '$action.".php"';
 } else {  
     include_once 'forum.php';
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
<?php include_once 'conf.php'; ?>     
<?php include_once 'conf1.php';?>

     
 </body>
</html>
