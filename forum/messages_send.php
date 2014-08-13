<?php
    $msql_messages_send=' INSERT INTO messages 
        (messages,parent_id)  
        VALUES 
        ("'.$messages.'","'.$parent_id.'")';               
    $result_messeges_send=mysql_query($msql_messages_send) or die(mysql_error());                             
    mysql_close();
    echo "</table>";
    echo "<table class='general'>";
    echo "<tr><td class='color'><a href='index.php'>General Page</a></td></tr>";
    echo "</table>";
?>  