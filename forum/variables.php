<?php
$day_b=array(1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31);
$month=array("January","February","March","April","May","June","July","August","September","October","November","December");
$location=array("New York","Las Vegas","Washington");
$year=array(2014,2013,2012,2011,2009,2008,2007,2006,1990);
$submit=( isset($_GET['submitted']) ? $_GET['submitted'] : '' );
$yearf=( isset($_GET['year']) ? $_GET['year'] : '' );
$monthf=( isset($_GET['month']) ? $_GET['month'] : '' );
$dayf=( isset($_GET['day_b']) ? $_GET['day_b'] : '' );
$dmy=( isset($_GET['$dayf']) ? $_GET['$dayf'] : '' ).( isset($_GET['$monthf']) ? $_GET['$monthf'] : '' ).( isset($_GET['yearf']) ? $_GET['yearf'] : '' );
$email=( isset($_GET['email']) ? $_GET['email'] : '' );
$password=( isset($_GET['password']) ? $_GET['password'] : '' );
$name=( isset($_GET['name']) ? $_GET['name'] : '' );
$lname=( isset($_GET['lname']) ? $_GET['lname'] : '' );
$nname=( isset($_GET['nname']) ? $_GET['nname'] : '' );
$sex=( isset($_GET['sex']) ? $_GET['sex'] : '' );
$loc=( isset($_GET['location']) ? $_GET['location'] : '' );
$action=( isset($_GET['action']) ? $_GET['action'] : '' );
$f1=( isset($_GET['f1']) ? $_GET['f1'] : '' );
 
$db_host='localhost';
$db_username='root';
$db_name='test';
$db_password='';

$mysql_con=mysql_connect($db_host, $db_username, $db_password) or die (mysql_error ());
$mysql_sel=mysql_select_db($db_name) or die(mysql_error());

if ($_SERVER['HTTP_HOST']=='192.168.1.11') {
	$db_host=$_SERVER['HTTP_HOST'];
	$db_username='dima';
	$db_password='dima123';
}
$display="<a href='index.php?action=community'>Enter to Forum</a>";
?>                   