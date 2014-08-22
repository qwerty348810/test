<?php 
$action='';
include 'variables.php';
if(isset($_GET['action']) && file_exists($_GET['action']).".php"){
    $action=$_GET['action'];
    include_once $action.".php";
}elseif(isset ($_GET['action']) && !file_exists($_GET['action']).".php"){
    include_once 'not_found.phtml';   
}else {
    include_once 'login.phtml';
}
?>
