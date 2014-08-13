<?php       
    $mysql_con3=' INSERT INTO topic 
        (title,parent_id)  
        VALUES 
        ("'.$textcoment.'","'.$parent_id.'")';               
    $result3=mysql_query($mysql_con3) or die(mysql_error());                              
    mysql_close();
?>