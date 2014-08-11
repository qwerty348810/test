<?php
    $mysql_con= "SELECT * FROM topic WHERE parent_id='".$parent_id."'" ;   
    $result = mysql_query($mysql_con) or die(mysql_error());         
	echo "<table class='general'>";
        while($row = mysql_fetch_assoc($result)) {           
            echo '<tr><td class="color"><a href=community.php?action=variable_topic&parent_id='.$row['id'].'>'.$row['title'].'</a></td></tr>';               
        }
        if ($parent_id!="0"){
            echo "<input type='hidden'  name='action' value='variable_coment' />
                  <input class='b1' align='middle' type='submit' value='NEW TOPIC'/>
            <p>Coment<Br><textarea name='textcoment' cols='25' rows='3' ></textarea></p>";
        }
        echo "</table>";
        echo $parent_id;
   mysql_close();
?>
