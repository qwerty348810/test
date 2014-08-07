<?php 
error_reporting(E_ALL);
ini_set('display_errors', 1);
session_start();
if(isset($_SESSION['views'])){
    $_SESSION['views']=$_SESSION['views']+1;
}else {
$_SESSION['views']=1;
    echo "Views=". $_SESSION['views'];
}
?>
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
$action='';

include_once 'variables.php';

if (isset($_GET['action']) && file_exists($_GET['action'].".php")) {
	$action=$_GET['action'];	 
	include_once $action.'.php';
}elseif (isset($_GET['action']) && !file_exists($_GET['action'].".php")) {
	include_once 'not_found.phtml';
}else {
	include_once 'community.php';
}
?>
        
    </body>
</html>