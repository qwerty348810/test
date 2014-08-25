<?php
    $sql='SELECT * FROM regist WHERE email='.$email;
        if (($sql) > 0) {
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
        echo $email;
include_once $template_dir.$action.'.phtml';
?>