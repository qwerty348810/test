<?php
    $mysql_con= "SELECT * FROM topic WHERE parent_id='".$parent_id."'" ;   
    $result = mysql_query($mysql_con) or die(mysql_error());         
	echo "<table class='general'>";
        while($row = mysql_fetch_assoc($result)) {                                   
                echo '<tr><td class="color"><a href=community.php?action=variable_topic&parent_id='.$row['id'].'>'.$row['title'].'</a></td></tr>';               
        }        
    $mysql_con2= "SELECT * FROM topic WHERE parent_id='".$parent_id."'";
    $result2 = mysql_query($mysql_con2) or die(mysql_error());
        if ($parent_id!="0"){
            echo "<p>Coment<Br><textarea name='textcoment' cols='25' rows='3' ></textarea></p>
            <input type='hidden'  name='action' value='variable_coment' />
            <input type='hidden'  name='parent_id' value='$parent_id' />
            <input class='b1' align='middle' type='submit' value='NEW TOPIC'/>";
        }    
    $mysql_con4= "SELECT * FROM messeges WHERE parent_id='".$parent_id."'";
    $result4 = mysql_query($mysql_con2) or die(mysql_error());    
        if($row['id']=="0"){
            echo "<p>Coment<Br><textarea name='messeges' cols='25' rows='3' ></textarea></p>
            <input type='hidden'  name='action' value='messeges' />
            <input type='hidden'  name='parent_id' value='$parent_id' />
            <input class='b1' align='middle' type='submit' value='NEW MESSEGES'/>";
            while($row4 = mysql_fetch_assoc($result4)) {
            echo '<tr><td class="color">'.$row4['messeges'].'</td></tr>';
            } 
        }       
        echo "</table>";
        echo $parent_id;        
    mysql_close();
?>
