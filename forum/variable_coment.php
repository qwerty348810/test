<?php
    
    $strSql=' INSERT INTO coment 
            (text)  
            VALUES 
            ("'.$textcoment.'")';               
        $result=mysql_query($strSql) or die(mysql_error()); 
        echo "<table class='general'>";                           
        echo "</table>";
        if ($strSql){
            echo "!!!!!!!!!!";
            echo $strSql ;
            print_r ($row);
        }                        
    mysql_close();
?>