
<html>
<head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta charset="utf-8">
	<title>Forum</title>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<title>Connect to Base </title>
</head>
<body>
  <?php
         $host = "localhost";
 $db_name = "test";
 $connect = mysql_connect("","test","");
 if (!$connect) {
    exit(mysql_error());
    echo" No Connect to Base!!!";
 }
 else {
     mysql_select_db("test",$connect);
     echo "Connect to Base!!!";
     
 }
     
 
 
 mysql_query("SET NAMES 'utf-8'");
        $result=mysql_query("SELECT * FROM registr");
        if(!$result)  {
            echo "No connect to Base";
            exit(mysql_error());
        }
        if (mysql_num_rows($result)>0) {
        $profiles=mysql_fetch_array($result);
        }
        else {
            exit("Base is empty");
        }
        do {
        printf ( " <p>Email:%s</p>
        <p>Password:%s</p>
        <p>Name:%s</p>
        <p>Last Name:%s</p>
        <p>Nikname:%s</p>
        <p>Day-B:%s</p>
        <p>Sex:%s</p>
        <p>Location:%s</p><br>",$profiles['email'],$profiles['password'],$profiles['name'],$profiles['last_name'],$profiles['nickname'],$profiles['date_of_birth'],$profiles['sex'],$profiles['location']  ) ;  
        }
        while ($profiles=mysql_fetch_array($result));
        ?>
        
</body>


</html>