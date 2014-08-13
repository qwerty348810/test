<?php
    $msql_messegessend=' INSERT INTO messeges 
        (messeges,parent_id)  
        VALUES 
        ("'.$messeges.'","'.$parent_id.'")';               
    $result_messegessend=mysql_query($msql_messegessend) or die(mysql_error());                             
    mysql_close();
?>  