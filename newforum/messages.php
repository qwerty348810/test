<?php
$message_added='';

if(isset($_POST['parent_id'])){
    $post_parent_id=$_POST['parent_id'];
    $post_messages_text=$_POST['messages_text'];
    $sql="INSERT INTO messages (messages,parent_id) VALUE ('".$post_messages_text."','".$post_parent_id."')";
    $db_connection->save($sql);
    $messages_added="<center>Messages Added!Thanks</center>";
}
$parent_id=(isset($_GET['parent_id']) ? ($_GET['parent_id']): 0);
$sql="SELECT * FROM messages WHERE parent_id=".$parent_id;
$result=mysql_query($sql);
$message=array();
while ($row=mysql_fetch_assoc($result)){
    array_push($message,$row);
}
include_once $template_dir.$action.'.phtml';
?>