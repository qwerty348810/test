<?php
$action='';

include_once 'variables.php';

if (isset ($_GET['parent_id'])){
    $parent_id=$_GET['parent_id'];
}else {
    $parent_id="0";
}

include_once 'community.phtml';
?>