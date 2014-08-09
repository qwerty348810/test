<?php
$mysql_con= "SELECT * FROM topic " ;
    $sql = mysql_query($mysql_con) or die(mysql_error());        
            $strSql=' INSERT INTO topic 
            (title)  
            VALUES 
            ("'.$texttopic.'")';
            $result=mysql_query($strSql);
            $strSql2='SELECT * FROM topic WHERE title';
            $rs=mysql_query($strSql2);
            while($row = mysql_fetch_array($rs)) {
                echo "<table><tr><td>'".$title."'</td></tr></table>";               
	}
        
    mysql_close();
?>