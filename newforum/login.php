<?php
$email=(isset($_GET['email']) ? $_GET['email'] : 0 );
$password=(isset($_GET['password']) ? $_GET['password'] : 0 );
$submitted=(isset($_GET['submitted']) ? $_GET['submitted'] : 0);
if ($submitted){
mysql_connect("localhost", "root", "") or die (mysql_error ());
mysql_select_db("test") or die(mysql_error());
    $sql="INSERT INTO regist (email,password,name,last_name,nickname,date_of_birth,sex,location)
    VALUE
    ('".$email."','".$password."','".$name."', '".$lname."', '".$nname."', '".$dmy."', '".$sex."', '".$loc."') ";    
    $res=mysql_query($sql);
    mysql_close();
    if ($sql){
        echo "Thank you for registering!!!!";            
    }
}            
include_once $template_dir.$action.'.phtml';
?>