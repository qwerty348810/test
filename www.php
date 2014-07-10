<!DOCTYPE html>
<html>
<head>
<title> Wae to go</title>
</head>
<body>
 

  <form action="www.php method="post">
  Email<input name="link" type="text" size="30"/>
       <input type="submit" value="Go"/>
 </body>
</form> 
<?php
mysql_connect("localhost", "root", "") or die (mysql_error ());
mysql_select_db("test") or die(mysql_error());
//$strSQL = "INSERT INTO registr(";
//$strSQL = $strSQL . "email) ";
//$strSQL = $strSQL . "VALUES(";
//$strSQL = $strSQL . "'$link')";
$strSql=" INSERT INTO registr 
  (email,password,name,last_name,nickname,date_of_birth,sex,location) 
   VALUES 
  ('test@gmail.com',123,'test name', 'last name test', 'nickname test', 11,'sex?','Vitebsk' )";

mysql_query($strSQL) or die (mysql_error());
mysql_close();
?>
  <h1> Way to go</h1>   
  
  


</html>
