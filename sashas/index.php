<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
session_start();

/*HEADER*/
include_once 'template/header.phtml';
/*HEADER*/

include_once 'variables.php';

$action="forum";

if (isset($_GET['action']))
    $action=$_GET['action'];

include_once $action.'.php';

/*FOOTER*/
include_once 'template/footer.phtml';
/*FOOTER*/
?>
