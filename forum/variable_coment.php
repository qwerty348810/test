<?php       
    $mysql_con3=' INSERT INTO coment 
        (text,parent_id)  
        VALUES 
        ("'.$textcoment.'","'.$parent_id.'")';               
    $result3=mysql_query($mysql_con3) or die(mysql_error());               
        echo $parent_id ;
        print_r ($row);
    mysql_close();
?>