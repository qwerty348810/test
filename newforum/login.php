<?php
        $strSql=' INSERT INTO regist 
            (email,password,name,last_name,nickname,sex)  
            VALUES 
            ("'.$email.'", "'.$password.'", "'.$name.'", "'.$lname.'", "'.$nname.'","'.$sex.'")';
            $result=mysql_query($strSql); 
        if ($strSql){
            echo "Thank you for registering!!!!";            
        }
      echo $email,$password,$name,$lname,$nname,$dmy,$sex,$loc;  
      echo $_GET['email'],$_GET['password'],$_GET['name'],$_GET['lname'],$_GET['nname'],$_GET['dmy'],$_GET['sex'],$_GET['loc'];
include_once $template_dir.$action.'.phtml';
?>