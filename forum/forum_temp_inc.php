 
<?php                    
     asort($day_b);
     foreach ($day_b as $k=>$v) {						
     echo '<option value="'.$k.'">'.$v.'</option>';}
?>
<?php           
    mysql_connect($db_host, $db_username, $db_password) or die (mysql_error ());
    mysql_select_db($db_name) or die(mysql_error());
        $query = "SELECT * FROM regist WHERE `email`='".$email."'";
        $sql = mysql_query($query) or die(mysql_error());
            if (mysql_num_rows($sql) < 0) {
                echo '<script type="text/javascript">alert("Mailbox is already Busy");</script>';
                echo 'Email busy!';
                echo '<script type="text/javascript">window.location = "forum.php";</script>';
            }
                $strSql=' INSERT INTO regist 
                (email,password,name,last_name,nickname,date_of_birth,sex,location)  
                VALUES 
                ("'.$email.'", "'.$password.'", "'.$name.'", "'.$lname.'", "'.$nname.'", "'.$dmy.'", "'.$sex.'", "'.$loc.'")';
                $result=mysql_query($strSql); 
            if ($strSql){
                echo "SENCS!!!!";
                echo "$strSql";
            }
    mysql_close();
?>               