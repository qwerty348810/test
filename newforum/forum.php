<?php
$parent_id=(isset($_GET['parent_id']) ? ($_GET['parent_id']): 0);
$sql="SELECT * FROM topic WHERE parent_id=".$parent;
$result=mysql_query($sql,$mysql_con);

$topics=array();
while ($row=mysql_fetch_assoc($result)){
    array_push($topics,$row);
}
$forum_topic='forum';
if($parent_id){
    $forum_topic='messages';
}
include_once $template_dir.$action.'.phtml';
?>