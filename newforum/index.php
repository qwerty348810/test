<?php
eror_reporting(E_ALL);
ini_set('display',1);
session_start();

include_once 'template/header.phtml';

include_once 'variables.php';

$action="";

if(isset($_GET['action'])){
    $action=$_GET['action'];
}
include_once $action.'.php';

include_once 'template/footer.phtml';
?>