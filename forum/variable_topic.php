<?php
$mysql_con= "SELECT * FROM topic " ;
    $sql = mysql_query($mysql_con) or die(mysql_error());        
            
            
            $strSql2='SELECT * FROM topic WHERE title';
            $rs=mysql_query($strSql2);
<<<<<<< HEAD
            while($row = mysql_fetch_assoc($rs)) {
                print_r($row);                               
                echo "<table><tr><td>'".$title."'</td></tr></table>";               
	}       
        print_r($row);
=======
            while($row = mysql_fetch_assoc($result)) {
                print_r($row);
                
                echo "<table><tr><td>'".$title."'</td></tr></table>";               
		}
         
        
>>>>>>> fa1c6d942fa7b4e132f1db64af39d28888a34f7d
    mysql_close();
?>
