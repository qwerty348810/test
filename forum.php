<?php 
session_start();
if(isset($_SESSION['views']))
$_SESSION['views']=$_SESSION['views']+1;
else
$_SESSION['views']=1;
echo "Views=". $_SESSION['views'];
?>
<!-- page header -->
<!DOCTYPE html>
<?php
$day_b=array(1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31);
$month=array("January","February","March","April","May","June","July","August","September","October","November","December");
$location=array("New York","Las Vegas","Washington");
$year=array(2014,2013,2012,2011,2009,2008,2007,2006,1990);
$key=$_GET["year"];
$vey=$_GET["month"];
$wey=$_GET["day_b"];
?>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="" lang="" dir="">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" >
	<meta charset="utf-8">
	<title>Forum</title>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
</head>
 <body>
 <?php
 $screen=1;
if (isset($_GET['submitted']) && $_GET['submitted']==1 ) {
 $screen=3; 
if ( empty($_GET['name'])||empty($_GET['lname'])||empty($_GET['password'])||empty($_GET['nname'])||empty($_GET['email']) ) {
 $screen=2;
	}
	}
?>
<?php if ($screen==1) { ?>    
 <form action="forum.php" method="get" >
  <table border="1" style="margin:auto;" bordercolor="#EEEEEE">
    <tr>
     <td>Email</td>
	 <td><input id="email" name="email" type="text" size="33"/></td>
    </tr>
    <tr>
     <td>Password</td>
     <td><input id="password" name="password" type="text" size="33"/></td>
    </tr>
    <tr>
     <td>Name</td>
     <td><input id="name" name="name" type="text" size="33"/></td>
    </tr>
    <tr>
     <td>Last Name</td>
     <td><input id="lname" name="lname" type="text" size="33"/></td>
    </tr>
    <tr>
     <td>Nickname</td>
	 <td><input id="niname" name="nname" type="text" size="33"/></td>
    </tr>
   <tr>
   <td>Date of birth</td>
    <td>
     <select name="day_b">
	    <?php                    
		asort($day_b);
		foreach ($day_b as $k=>$v) {						
		echo '<option value="'.$k.'">'.$v.'</option>';}
		?>
     </select>  
     <select name="month">
	    <?php                    
		asort($month);
		foreach ($month as $k=>$v) {						
	    echo '<option value="'.$k.'">'.$v.'</option>';}
		?>
     </select>
     <select name="year">
	   <?php                    
	   asort($year);
	   foreach ($year as $k=>$v) {						
	   echo '<option value="'.$k.'">'.$v.'</option>';}
	   ?>
     </select>
    </td>
   </tr>
   <tr>
    <td>Sex</td>
    <td id="sext"><input id="male" name="sex" type="radio" value="male" />Male
                  <input id="female" name="sex" type="radio" value="female" />Female
    </td>
   </tr>
   <tr>
    <td>Location</td>
    <td>
	 <select name="location">
	    <?php                    
	    asort($location);
	    foreach ($location as $k=>$v) {						
	    echo '<option value="'.$k.'">'.$v.'</option>';}
	    ?>
     </select>
    </td>
   </tr>
   <tr>
    <td id="f2">
        <input id="f1" name="f1" type="checkbox" value="check">I accept Terms of Use of the ulD community<br>
	  <input name="submitted" type="hidden" value="1"/><input id="js_button" type="submit" value="Sign Up"/>
	 </td>
   </tr>
   </table>
   <?php  } elseif ($screen==2) { ?>
	<center><h1>You have mistake please fill all fields.</h1></center>		 
                  <p align="center"><?php if (empty($_GET["name"])) { echo   "enter the name";} ?><br>
                     <?php if (empty($_GET["password"])) { echo   "enter the password";} ?><br>
                     <?php if (empty($_GET["lname"])) { echo   "enter the Last Name";} ?><br>
                     <?php if (empty($_GET["nname"])) { echo   "enter the Nickname";} ?><br>
                     <?php if (empty($_GET["email"])) { echo   "enter the email";} ?><br>
		     <?php if (empty($_GET["sex"])) { echo   "choose the sex";} ?><br>
		     <?php if (empty($_GET["f1"])) { echo   "choose I accept Terms of Use of the ulD community";} ?></p>
            <form action="forum.php">
                <div align="center">
                 <button type="submit">button for rem</button>
                </div>
            </form>
                     
   <?php }else { ?>
	<center><h1>Thanks for the registration!</h1></center>        
        <?php
 $ky=$_GET["year"];
 $vy=$_GET["month"];
 $wy=$_GET["day_b"];
 $kvw=$day_b["$wy"].$month["$vy"].$year["$ky"];
 $email=$_GET["email"];
 $password=$_GET["password"];
 $name=$_GET["name"];
 $lname=$_GET["lname"];
 $nname=$_GET["nname"];
 $sex=$_GET["sex"];
 $loc=$_GET["location"];
 mysql_connect("localhost", "root", "") or die (mysql_error ());
 mysql_select_db("test") or die(mysql_error());
  $query = "SELECT * FROM regist WHERE `email`='".$email."'";
  $sql = mysql_query($query) or die(mysql_error());
   if (mysql_num_rows($sql) > 0)
    {
      echo '<script type="text/javascript">alert("Mailbox is already Busy");</script>';
      echo 'Email busy!';
      echo '<script type="text/javascript">window.location = "forum.php";</script>';
    }
  $strSql=' INSERT INTO regist 
  (email,password,name,last_name,nickname,date_of_birth,sex,location) 
   VALUES 
  ("'.$email.'", "'.$password.'", "'.$name.'", "'.$lname.'", "'.$nname.'", "'.$kvw.'", "'.$sex.'", "'.$location["$loc"].'")';
 $result=mysql_query($strSql); 
 if ($strSql){
     echo "SENCS!!!!";
     echo "$strSql";
 }

mysql_close();
?>         
	  <table border="1" style="margin:auto;" width="400px" bordercolor="#EEEEEE">			             
	                 <tr>
					  <td align="center" >
                                          
 <?php 
 $File = "Name.txt"; 
 $Handle = fopen($File, 'w');
 
 $Data ="";
 
  if (isset($_GET["name"]) )
 { 
 $Data =$_GET["name"] ; 
 }
 fwrite($Handle, $Data); 
 fclose($Handle);
 echo "Name:".$_GET["name"];
 ?>
                      </td>
					 </tr>
		             <tr>
					  <td align="center" ><?php 
 $File = "Last Name.txt"; 
 $Handle = fopen($File, 'w');
 
 $Data ="";
 
  if (isset($_GET["lname"]) )
 { 
 $Data =$_GET["lname"] ; 
 }
 fwrite($Handle, $Data); 
 fclose($Handle);
 echo "Last Name:".$_GET["lname"];
 ?>                   
                      </td>
                     </tr>		
		             <tr>
					  <td align="center" >
<?php 
 $File = "Password.txt"; 
 $Handle = fopen($File, 'w');
 
 $Data ="";
 
  if (isset($_GET["password"]) )
 { 
 $Data =$_GET["password"] ; 
 }
 fwrite($Handle, $Data); 
 fclose($Handle);
 echo "Password:".$_GET["password"];
 ?>                  
                      </td>
					 </tr>
		             <tr>
					  <td align="center" >
<?php 
 $File = "Nickname.txt"; 
 $Handle = fopen($File, 'w');
 
 $Data ="";
 
  if (isset($_GET["nname"]) )
 { 
 $Data =$_GET["nname"] ; 
 }
 fwrite($Handle, $Data); 
 fclose($Handle);
 echo "Nickname:".$_GET["nname"];
 ?> 
                      </td>
					 </tr>		
		             <tr>
					  <td align="center" >
<?php 
 $File = "Email.txt"; 
 $Handle = fopen($File, 'w');
 
 $Data ="";
 
  if (isset($_GET["email"]) )
 { 
 $Data =$_GET["email"] ; 
 }
 fwrite($Handle, $Data); 
 fclose($Handle);
 echo "Email:".$_GET["email"];
 ?> 
                      </td>
					 </tr>
                     <tr>
					 <td align="center" >
<?php 
 $File = "Date of birth.txt"; 
 $Handle = fopen($File, 'w');
 
 $Data ="";
 
  if (isset($year["$key"])||($month["$vey"])||($day_b["$wey"]))
 { 
 $Data =$year["$key"].$month["$vey"].$day_b["$wey"]; 
 }
 fwrite($Handle, $Data); 
 fclose($Handle);
 echo "Date of birth:".$kvw;
 $File = "File.txt"; 
 $Handle = fopen($File, 'w');
 
 $Data ="";
 
  if (isset($_GET["lname"])&&($month["$vey"])&&($day_b["$wey"])&&($year["$key"])&&($_GET["email"])&&($_GET["nname"])&&($_GET["name"])&&($_GET["password"]))
 { 
 $Data =$_GET["lname"].$year["$key"].$month["$vey"].$day_b["$wey"].$_GET["email"].$_GET["nname"].$_GET["name"].$_GET["password"]; 
 }
 fwrite($Handle, $Data); 
 fclose($Handle);
 ?>
                      </td>
					 </tr>
      </table>
       <form action="RegInForum.php">
          <div align="center">
            <button type="submit">Button for rem</button>
          </div>
       </form>        
   <?php } ?> 
  </form>
 <?php
 if ($_GET['action']==login){
 $file_name=$_GET['action'];
 include_once($file_name.".php");}
 if ($_GET['action']==register){
 $file_name2=$_GET['action'];
 include_once($file_name2.".php");}
 ?>
<script type="text/javascript">

$( document ).ready(function() {
    $( "#js_button" ).click(function() {
        var lname=$('#niname').val();
        if (lname.length<1) {
                alert("please fill niname field");
                jQuery("#niname").css("background-color", "red");
        }
     });
});
$( document ).ready(function() {
    $( "#js_button" ).click(function() {
        var lname=$('#email').val();
        if (lname.length<1) {
                alert("please fill email field");
                jQuery("#email").css("background-color", "red");
        }
     });
});
$( document ).ready(function() {
    $( "#js_button" ).click(function() {
        var lname=$('#name').val();
        if (lname.length<1) {
                alert("please fill name field");
                jQuery("#name").css("background-color", "red");
        }
     });
});

$( document ).ready(function() {
    $( "#js_button" ).click(function() {
        var lname=$('#lname').val();
        if (lname.length<1) {
                alert("please fill lname field");
                jQuery("#lname").css("background-color", "red");
        }
     });
});
$( document ).ready(function() {
    $( "#js_button" ).click(function() {
        var password=$('#password').val();
        if (password.length<1) {
                alert("please fill password field");
                jQuery("#password").css("background-color", "red");
        }
     });
});
 
$( document ).ready(function() {
    $( "#js_button" ).click(function() {
    var sex=$('#sex').val();
if (sex.value="") { alert("please fill sex field"); 
jQuery("#sext").css("color", "red");
}
});
});

/*var f1=$('#f1').val(); 
$( document ).ready(function() {
     $( "#js_button" ).click(function() {
 	var f1=jQuery('#f1').attr("checked");{
if (f1==false) { alert("please fill f1 field");
jQuery("#f2").css("color", "red"); }
}
});*/



</script>
 </body>
</html>
