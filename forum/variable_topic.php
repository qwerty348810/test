<?php
    $mysql_con= "SELECT * FROM topic WHERE parent_id='".$parent_id."'" ;   
    $result = mysql_query($mysql_con) or die(mysql_error());        
 
	echo "<table class='general'>";
        while($row = mysql_fetch_assoc($result)) {
            print_r($row);
            echo '<a href=community.php?action=variable_topic&id='.$row['id'].'><tr><td class="color">'.$row['title'].'</td></tr></a>';               
        }
        echo "</table>";        
   mysql_close();
?>
