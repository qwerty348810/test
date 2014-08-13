<?php
    $mysql_messages= "SELECT * FROM messages WHERE parent_id='".$parent_id."'";
    $result_messages = mysql_query($mysql_messages) or die(mysql_error()); 
        echo "<table class='general'>";
        echo '<tr><td class="color">MESSAGES</td></tr>';
        echo "<p>Write a message<Br><textarea name='messages' cols='25' rows='3' ></textarea></p>
        <input type='hidden'  name='action' value='messagessend' />
        <input type='hidden'  name='parent_id' value='$parent_id' />
        <input class='b2' align='middle' type='submit' value='NEW MESSAGE'/>";
        while($row = mysql_fetch_assoc($result_messages)) {
            echo '<tr><td class="color_forum">'.$row['messages'].'</td></tr>';            
        }                      
?>