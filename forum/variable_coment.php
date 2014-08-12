<?php       
    $mysql_con3=' INSERT INTO coment 
        (text,parent_id)  
        VALUES 
        ("'.$textcoment.'","'.$parent_id.'")';               
    $result3=mysql_query($mysql_con3) or die(mysql_error()); 
        if ($strSql){
            echo "!!!!!!!!!!";
            echo $strSql ;
            print_r ($row);
        }                        
    mysql_close();
?>