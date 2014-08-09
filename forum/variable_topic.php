<?php
    $mysql_con= "SELECT * FROM topic WHERE parent_id='0'" ;   
    $result = mysql_query($mysql_con) or die(mysql_error());        
 
	echo "<table class='general'>";
        while($row = mysql_fetch_assoc($result)) {
            print_r($row);
            echo '<a href='.'community.php?action='.$row['id'].'><tr><td class="color">'.$row['title'].'</td></tr></a>';               
        }
        echo "</table>";       
   mysql_close();
 ?>
