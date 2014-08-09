<?php
<<<<<<< HEAD
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
=======
	$sql= "SELECT * FROM topic " ;
    	$result = mysql_query($mysql_con) or die(mysql_error());        
 
	echo "<table>";
            while($row = mysql_fetch_assoc($result)) {
                print_r($row);
                
                 echo '<tr><td>'.$row['News'].'</td></tr>';               
		}
	echo "</table>";


>>>>>>> b3113ca6eeeafd0f466e58b89bff2712d976e1e0

    mysql_close();
 ?>
