<?php
    
    $strSql=' INSERT INTO coment 
            (text)  
            VALUES 
            ("'.$textcoment.'")';
                
        $result=mysql_query($strSql); 
        if ($strSql){
            echo "!!!!!!!!!!";
            echo $strSql ;
        }                        
    mysql_close();
?>