<?php       
    $mysql_topic=' INSERT INTO topic 
        (title,parent_id)  
        VALUES 
        ("'.$textcoment.'","'.$parent_id.'")';               
    $result_topic=mysql_query($mysql_topic) or die(mysql_error());                              
    mysql_close();
?>