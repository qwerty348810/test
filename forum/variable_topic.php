<?php
$mysql_con= "SELECT * FROM topic " ;
    $sql = mysql_query($mysql_con) or die(mysql_error());        
            $strSql=' INSERT INTO topic 
            (title)  
            VALUES 
            ("'.$texttopic.'")';
            $result=mysql_query($strSql); 
        if ($strSql){
            echo "!!!!!!!!!!";
            echo "<table class='general'><tr><td class='left'>.$textopic.</td></tr></table>";
        }            
            echo $texttopic;
    mysql_close();
?>