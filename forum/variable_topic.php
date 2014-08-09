<?php
	$sql= "SELECT * FROM topic " ;
    	$result = mysql_query($mysql_con) or die(mysql_error());        
 
	echo "<table>";
            while($row = mysql_fetch_assoc($result)) {
                print_r($row);
                
                 echo '<tr><td>'.$row['News'].'</td></tr>';               
		}
	echo "</table>";



    mysql_close();
?>
