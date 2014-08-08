<?php
$mysql_con= "SELECT * FROM topic " ;
    $sql = mysql_query($mysql_con) or die(mysql_error());        
            $strSql=' INSERT INTO topic 
            (id_topic,text)  
            VALUES 
            ("'.$topic1.'", "'.$texttopic.'")';
            $result=mysql_query($strSql); 
        if ($strSql){
            echo "!!!!!!!!!!";            
        }
            echo $topic1;
            echo $texttopic;
    mysql_close();
?>