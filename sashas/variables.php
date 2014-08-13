<?php

include_once 'db_class.php';

$template_dir="template/";

/*
$db_host='localhost';
$db_username='root';
$db_name='test';
$db_password='';

if ($_SERVER['HTTP_HOST']=='192.168.1.11') {
	$db_host=$_SERVER['HTTP_HOST'];
	$db_username='dima';
	$db_password='dima123';
}

$mysql_con=mysql_connect($db_host, $db_username, $db_password) or die (mysql_error ());
mysql_select_db($db_name,$mysql_con) or die(mysql_error());
*/

$db_connection=new database();