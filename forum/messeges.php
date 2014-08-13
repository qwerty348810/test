<?php
    $mysql_messeges= "SELECT * FROM messeges WHERE parent_id='".$parent_id."'";
    $result_messeges = mysql_query($mysql_messeges) or die(mysql_error()); 
        echo "<table class='general'>";
        echo "<p>Write a message<Br><textarea name='messeges' cols='25' rows='3' ></textarea></p>
        <input type='hidden'  name='action' value='messegessend' />
        <input type='hidden'  name='parent_id' value='$parent_id' />
        <input class='b2' align='middle' type='submit' value='NEW MESSEGE'/>";
        while($row = mysql_fetch_assoc($result_messeges)) {
            echo '<tr><td class="color_forum">'.$row['messeges'].'</td></tr>';            
        }                      
?>