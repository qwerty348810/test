<?php

$sql="SELECT * FROM topic WHERE parent_id=0";

$result=mysql_query($sql,$mysql_con);

$topics=array();

while ($row = mysql_fetch_assoc($result)) {
 	array_push($topics, $row);
}



include_once $action.'.phtml';