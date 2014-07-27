<!DOCTYPE html>
<html>
<head>
<title>Wae to go</title>
</head>
<body>  
  Email<input name="email" type="text" size="30"/>
       <input type="submit" value="Go"/>
 </body>
 <form action="www.php" method="get"> 
<?php
mysql_connect("localhost", "root", "") or die (mysql_error ());
mysql_select_db("test") or die(mysql_error());
//$strSQL = "INSERT INTO registr(";
//$strSQL = $strSQL . "email) ";
//$strSQL = $strSQL . "VALUES(";
//$strSQL = $strSQL . "'$link')";
 $strSql=" INSERT INTO registr 
  (email,password,name,last_name,nickname) 
   VALUES 
  ('".$email."','".$password."','".$name."','".$lname."','".$nname."')";
 echo "$strSql";
 $result=mysql_query($strSql);
 if ($strSql){
     echo "SENCS!!!!";
 }         
  mysql_close();
?>     
 </form>
  <h1> Way to go in</h1>   
  
  


</html>
