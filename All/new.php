<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="" lang="" dir="">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" >
        <meta charset="utf-8">
        <link rel="stylesheet" href="css/style.css" type="text/css"/>
        <title>Forum</title>
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    </head>
    <body>
<form action="new.php" method="get">
	<div align="center">
		<div>
		    <h3>Email:<input type="text" size="20"  name="email" maxlength="20"  /></h3>
                </div>
		<div>
                    <h3>Password:<input type="text" size="20"  name="password" maxlength="20" /></h3>
                </div>
	</div>
	<div align="center">
		<div>
                    <input name="submit" type="hidden" value="1" />
                </div>
	</div>
</form>
    </body>

<?php
$email=(isset($_GET['email']) ? $_GET['email'] : 0 );
$password=(isset($_GET['password']) ? $_GET['password'] : 0 );
mysql_connect("localhost", "root", "") or die (mysql_error ());
mysql_select_db("test") or die(mysql_error());
$sql="INSERT INTO regist (email,password) VALUE('".$email."','".$password."') ";
$res=mysql_query($sql);
mysql_close();
?>
</html>