<?php
    $mysql_con= "SELECT * FROM topic " ;   
    $result = mysql_query($mysql_con) or die(mysql_error());        
 
	echo "<table class='general'>";
        while($row = mysql_fetch_assoc($result)) {
            print_r($row);
            echo '<tr><td class="color">'.$row['title'].'</td></tr>';               
        }
        echo "</table>";
        
        $strSql=' INSERT INTO topic 
            (text)  
            VALUES 
            ("'.$texttopic.'")';
                
        $res=mysql_query($strSql); 
        
        print_r($texttopic);

    mysql_close();
 ?>