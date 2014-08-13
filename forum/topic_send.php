<?php       
    $mysql_topic=' INSERT INTO topic 
        (title,parent_id)  
        VALUES 
        ("'.$texttopic.'","'.$parent_id.'")';               
    $result_topic=mysql_query($mysql_topic) or die(mysql_error());                              
    mysql_close();
    echo "</table>";
    echo "<table class='general'>";
    echo "<tr><td class='color'><a href='index.php'>General Page</a></td></tr>";
    echo "</table>";
?>