<?php
$mysql_con= "SELECT * FROM topic " ;
    $sql = mysql_query($mysql_con) or die(mysql_error());        
            $strSql=' INSERT INTO topic 
            (text)  
            VALUES 
            ("'.$text.'")';
            $result=mysql_query($strSql); 
        if ($strSql){
            echo "!!!!!!!!!!";            
        }            
            echo $textcoment;
    mysql_close();
?>