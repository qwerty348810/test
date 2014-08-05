<?php 
$action=''
if (isset($_GET['action'] && file_exist($_GET['action'].'.php')){
    $action=$_GET['action'];
    include_once $action'.php';
}elseif(isset($_GET['action'] && !file_exist($_GET['action'].'.php')){
include_once 'not_found.php';
}else {
include_once 'forum.phtml';
}
?>