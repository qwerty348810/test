<?php
    $mysql_con= "SELECT * FROM topic WHERE parent_id='".$parent_id."'" ;   
    $result = mysql_query($mysql_con) or die(mysql_error());
    $action="forum";
    if($parent_id!="0"){
        $action="messeges";
    }
	echo "<table class='general'>";
        while($row = mysql_fetch_assoc($result)) {                                   
            echo '<tr><td class="color"><a href=community.php?action='.$action.'&parent_id='.$row['id'].'>'.$row['title'].'</a></td></tr>';        
        }
    if ($action!="forum"){
            echo "<p>Title theme<Br><textarea name='textcoment' cols='25' rows='1' ></textarea></p>
            <input type='hidden'  name='action' value='topic' />
            <input type='hidden'  name='parent_id' value='$parent_id' />
            <input class='b1' align='middle' type='submit' value='NEW TOPIC'/>";
    }                    
        echo "</table>";
    mysql_close();
?>
