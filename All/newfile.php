<?php      
    mysql_connect("localhost", "root", "") or die (mysql_error ());
    mysql_select_db("test") or die(mysql_error());
        $strSql=' INSERT INTO regist 
            (email,password)  
            VALUES 
            ("'.$email.'", "'.$password.'")';
            $result=mysql_query($strSql); 
        if ($strSql){
            echo "SENCS!!!!";
            echo "$strSql";
            echo "$mail";
            }
    mysql_close();
?>