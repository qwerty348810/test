<?php
$textcoment=( isset($_GET['textcoment']) ? $_GET['textcoment'] : '' );
$messeges=( isset($_GET['textmesseges']) ? $_GET['textmesseges'] : '' );
$row=( isset($_GET['row']) ? $_GET['row'] : '' );
$action=( isset($_GET['action']) ? $_GET['action'] : '' );
$id=( isset($_GET['id']) ? $_GET['id'] : '' );
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
$mysql_sel=mysql_select_db($db_name) or die(mysql_error());
$mysql_con2=mysql_connect($db_host, $db_username, $db_password) or die (mysql_error ());
$mysql_sel2=mysql_select_db($db_name) or die(mysql_error());
$mysql_con3=mysql_connect($db_host, $db_username, $db_password) or die (mysql_error ());
$mysql_sel3=mysql_select_db($db_name) or die(mysql_error());
$mysql_con4=mysql_connect($db_host, $db_username, $db_password) or die (mysql_error ());
$mysql_sel4=mysql_select_db($db_name) or die(mysql_error());
$mysql_con5=mysql_connect($db_host, $db_username, $db_password) or die (mysql_error ());
$mysql_sel5=mysql_select_db($db_name) or die(mysql_error());

?>                   
