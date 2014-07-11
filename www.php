<!DOCTYPE html>
<html>
<head>
<title> Wae to go</title>
</head>
<body>  
  Email<input name="link" type="text" size="30"/>
       <input type="submit" value="Go"/>
 </body>
<?php
mysql_connect("localhost", "root", "") or die (mysql_error ());
mysql_select_db("test") or die(mysql_error());
//$strSQL = "INSERT INTO registr(";
//$strSQL = $strSQL . "email) ";
//$strSQL = $strSQL . "VALUES(";
//$strSQL = $strSQL . "'$link')";
$strSql=" INSERT INTO `test`.`registr` 
  ('email')VALUES('$link')";
$result=mysql_query($strSql);
if ($result) {
    echo "SENCS!!!";
}

mysql_close();
?>
  <h1> Way to go</h1>   
  
  


</html>
