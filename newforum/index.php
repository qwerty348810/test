<?php
error reporning (E_ALL);
ini_set ('display error',1);
session start ();
include_once 'template/header.phtml';

include_once 'variables.php';

$action="forum";

if(isset($_GET['action'])){
    $action=$_get['action'];
}

include_once 'footer.phtml';
?>