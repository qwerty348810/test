<?php


/*HEADER*/
include_once 'header.phtml';
/*HEADER*/

include_once 'variables.php';

$action="forum";

if (isset($_GET['action']))
	$action=$_GET['action'];


include_once $action.'.php';

/*FOOTER*/
include_once 'footer.phtml';
/*FOOTER*/
?>