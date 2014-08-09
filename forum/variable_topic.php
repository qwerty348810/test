<?php
    $mysql_con= "SELECT * FROM topic WHERE parent_id='".$rows['id']."'" ;   
    $result = mysql_query($mysql_con) or die(mysql_error());        
 
	echo "<table class='general'>";
        while($row = mysql_fetch_assoc($result)) {
            print_r($row);
            echo '<a href=community.php?'.$_GET['parent_id'].'><tr><td class="color">'.$row['title'].'</td></tr></a>';               
        }
        echo "</table>";
        echo $_GET['parent_id'];
   mysql_close();
 ?>
