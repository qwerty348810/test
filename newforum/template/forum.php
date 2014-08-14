<?php

$parent_id=(isset($_GET['parent_id']) ? $_GET['parent_id'] : 0);

$sql="SELECT * FROM topic WHERE parent_id=".$parent_id;

$result=mysql_query($sql,$this->link);

$topics=array();

while ($row = mysql_fetch_assoc($result)) {
 	array_push($topics, $row);
}

$forum_action='forum';

if ($parent_id) 
	$forum_action='messages';

include_once $template_dir.$action.'.phtml';

?>