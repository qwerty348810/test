<?php include_once 'variables.php'; ?>
<?php   
    $mysql_con= "SELECT * FROM regist WHERE `email`='".$email."'";
    $sql = mysql_query($mysql_con) or die(mysql_error());
        if (mysql_num_rows($sql) > 0) {
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
            echo "Thank you for registering!!!!";            
        }
    mysql_close();
?>               