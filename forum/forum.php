<?php
    $mysql_con= "SELECT * FROM topic WHERE parent_id='".$parent_id."'" ;   
    $result = mysql_query($mysql_con) or die(mysql_error());
    $action="forum";
    $text="SPECIAL FORUMS";
    if($parent_id!="0"){
        $action="messeges";
        $text="TOPIC";
    }
    echo "<table class='general'>";
    echo '<tr><td class="color_forum">'.$text.'</td></tr>';
        while($row = mysql_fetch_assoc($result)) {            
            echo '<tr><td class="color"><a href=community.php?action='.$action.'&parent_id='.$row['id'].'>'.$row['title'].'</a></td></tr>';        
        }
    if ($action!="forum"){
            echo "<p>Title theme<Br><textarea name='texttopic' cols='25' rows='1' ></textarea></p>
            <input type='hidden'  name='action' value='topic' />
            <input type='hidden'  name='parent_id' value='$parent_id' />
            <input class='b1' align='middle' type='submit' value='NEW TOPIC'/>";
    } 
    echo "</table>";    
    mysql_close();
?>
