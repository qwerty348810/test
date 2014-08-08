<?php
$mysql_con= "SELECT * FROM topic " ;
    $sql = mysql_query($mysql_con) or die(mysql_error());        
            $strSql=' INSERT INTO topic 
            (id_topic,text)  
            VALUES 
            ("'.$topic2.'", "'.$text.'")';
            $result=mysql_query($strSql); 
        if ($strSql){
            echo "!!!!!!!!!!";            
        }
            echo $topic2;
            echo $text;
    mysql_close();
?>