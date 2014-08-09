<?php
$mysql_con= "SELECT * FROM topic " ;
    $sql = mysql_query($mysql_con) or die(mysql_error());        
            
            
            $strSql2='SELECT * FROM topic WHERE title';
            $rs=mysql_query($strSql2);
            while($row = mysql_fetch_assoc($rs)) {
                print_r($row);                               
                echo "<table><tr><td>'".$title."'</td></tr></table>";               
	}       
        print_r($row);
    mysql_close();
?>