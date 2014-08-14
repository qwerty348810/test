<?php
error_reporting(E_ALL);
ini_set('display_errors',1);
session_start();

include_once 'template/header.phtml';

include_once 'variables.php';

$action='forum';

if(isset($_GET['action'])){
    $action=$_GET['action'];
}

include_once $action.'.php';

include_once 'template/footer.phtml';
?>