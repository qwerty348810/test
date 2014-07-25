<?php
 session_start();
 ?>
<!DOCTYPE html>
<?php
$_GET['reg']=$reg;
$_GET['enter']=$enter;

?>
<html>   
<head>       
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" >
	<meta charset="utf-8">
	<title>Forum</title>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
</head>
<body> 



<form action="RegInForum2.php" method="post" name="forma">
    <h1 align="center"> ¬ход на форум </h1>
     <div align="center">
    ¬ведите Email:<br />
    <input type="text" size="20" id="email2" name="email" maxlength="20" /><br />
    ¬ведите Password:<br />
    <input type="text" size="20" id="password" name="password" maxlength="20" /><br />
     </div>
     <div align="center">
    <input name="submit" type="hidden" value="1"/>     
†   <input id="js_button" type="submit" name="enter" value="¬ход"/><br />   
     </div>
   <?php
    $email = $_POST['email'];
    $password = $_POST['password'];
    mysql_query("SET NAMES 'utf-8'");
    mysql_connect("localhost", "root", "") or die (mysql_error ());
    mysql_select_db("test") or die(mysql_error());
    $sql = "SELECT * FROM regist WHERE `email`='".$email."'";
    $result=mysql_query($sql);
      
      
    $query_result_data=array();
      while ($row = mysql_fetch_assoc($result)) {
 		/* adding to array row from table */
      	$query_result_data[]=$row;
      }
      if (count($query_result_data)){
          echo "Email busy";
      }
    ?>
</form>
    <form action="forum.php" method="post" name="forma2">
        <div align="center">
†   <input id="js_button2" type="submit" name="reg" value="–егистраци€ на форуме"/><br />   
     </div>  
    </form>
      
 <script type="text/javascript">

$( document ).ready(function() {
    $( "#js_button" ).click(function() {
        var lname=$('#password').val();
        if (lname.length<1) {
                alert("please fill password field");
                jQuery("#password").css("background-color", "red");
        }
     });
});
$( document ).ready(function() {
 $( "#js_button" ).click(function() {
        var lname=$('#email2').val();
        if (lname.length<1) {
                alert("please fill email field");
                jQuery("#email2").css("background-color", "red");
        }
     });
}); 
</script>
</body>
</html>