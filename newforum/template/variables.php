<?php
$texttopic=( isset($_GET['texttopic']) ? $_GET['texttopic'] : '' );
$messages=( isset($_GET['messages']) ? $_GET['messages'] : '' );
$row=( isset($_GET['row']) ? $_GET['row'] : '' );
$action=( isset($_GET['action']) ? $_GET['action'] : '' );
$id=( isset($_GET['id']) ? $_GET['id'] : '' );

include_once 'db_class.php';

$template_dir="template/";

$db_connection=new database();
?>