<?php
$messages_added='';
if(isset($_POST['parent_id'])){
    $post_parent_id=$_POST['parent_id'];
    $post_messages_text=$_POST['post_messages_text'];
    $db_connection->save($sql);
    $messages_added="<center>Messages Added!Thanks</center>";
}
$parent_id=(isset($_GET['parent_id']) ? ($_GET['parent_id']) : 0);
$sql="INSERT messages (messages,parent_id) VALUES ("'.messages.'","'.parent_id.'")";
$result=mysql($sql,$this->link);

$messages=array();

while($row=mysql_fetch_assoc($result)){
    array_push($messages,$row);
}
include_once $template.$action.'.phtml';


?>