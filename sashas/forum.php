<?php

$parent_id=(isset($_GET['parent_id']) ? $_GET['parent_id'] : 0);

$sql="SELECT * FROM topic WHERE parent_id=".$parent_id;

$result=mysql_query($sql,$mysql_con);

$topics=array();

while ($row = mysql_fetch_assoc($result)) {
 	array_push($topics, $row);
}

$action='forum';

include_once $action.'.phtml';