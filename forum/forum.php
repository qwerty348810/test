<?php 
error_reporting(E_ALL);
ini_set('display_errors', 1);
session_start();


if(isset($_SESSION['views'])){
$_SESSION['views']=$_SESSION['views']+1;
}
else {
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
$day_b=array(1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31);
$month=array("January","February","March","April","May","June","July","August","September","October","November","December");
$location=array("New York","Las Vegas","Washington");
$year=array(2014,2013,2012,2011,2009,2008,2007,2006,1990);
$submit=( isset($_GET['submitted']) ? $_GET['submitted'] : '' );
$yearf=( isset($_GET['year']) ? $_GET['year'] : '' );
$monthf=( isset($_GET['month']) ? $_GET['month'] : '' );
$dayf=( isset($_GET['day_b']) ? $_GET['day_b'] : '' );
$dmy=$day_b["$dayf"].$month["$monthf"].$year["$yearf"];
$email=( isset($_GET['email']) ? $_GET['email'] : '' );
$password=( isset($_GET['password']) ? $_GET['password'] : '' );
$name=( isset($_GET['name']) ? $_GET['name'] : '' );
$lname=( isset($_GET['lname']) ? $_GET['lname'] : '' );
$nname=( isset($_GET['nname']) ? $_GET['nname'] : '' );
$sex=( isset($_GET['sex']) ? $_GET['sex'] : '' );
$loc=( isset($_GET['location']) ? $_GET['location'] : '' );
$action=( isset($_GET['action']) ? $_GET['action'] : '' );
$f1=( isset($_GET['f1']) ? $_GET['f1'] : '' );
?>          
<?php
    $screen=1;
if (isset($submit) && $submit==1 ) {
    $screen=3; 
if ( empty($name)||empty($lname)||empty($password)||empty($nname)||empty($email) ) {
    $screen=2;
}
}
?>
<?php 
$action='';
 
if (isset($_GET['action']) && file_exists($_GET['action'].".php")) {
	$action=$_GET['action'];	 
	include_once $action.'.php';
}elseif (isset($_GET['action']) && !file_exists($_GET['action'].".php")) {
	include_once 'not_found.phtml';
}else {
	include_once 'login.phtml';
}
?>
 
 
    </body>
</html>