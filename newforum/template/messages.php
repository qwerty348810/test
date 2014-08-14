<?php
$message_added="";

if (isset($_POST['parent_id'])) {
	$post_parent_id=$_POST['parent_id'];
	$post_message_text=$_POST['message_text'];
	
	$sql="INSERT INTO messages (messages, parent_id) VALUES ('".$post_message_text."',".$post_parent_id.") ";
	$db_connection->save($sql);
	/*mysql_query($sql,$mysql_con);*/
	$message_added="<center>Message Added! Thanks</center>";
	 
}

$parent_id=(isset($_GET['parent_id']) ? $_GET['parent_id'] : 0);
 
$sql="SELECT * FROM messages WHERE parent_id=".$parent_id;

/* $result=mysql_query($sql,$mysql_con); */

$result=$db_connection->query($sql);

$messages=array();

while ($row = mysql_fetch_assoc($result)) {
	array_push($messages, $row);
}

include_once $template_dir.$action.'.phtml';
?>