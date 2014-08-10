<?php
    $mysql_con= "SELECT * FROM topic WHERE parent_id='".$parent_id."'" ;   
    $result = mysql_query($mysql_con) or die(mysql_error());        
 
	echo "<table class='general'>";
        while($row = mysql_fetch_assoc($result)) {
            print_r($row);
            echo '<tr><td class="color"><a href=community.php?action=variable_topic&parent_id='.$row['id'].'>'.$row['title'].'</a></td></tr>';               
        }
        echo "</table>";        
   mysql_close();
?>
