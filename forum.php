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
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta charset="utf-8">
	<title>New page</title>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
</head>
 <body>
 <?php 
 $screen=1;
if (isset($_GET['submitted']) && $_GET['submitted']==1 ) {
 $screen=3; 
if ( empty($_GET['name'])||empty($_GET['lname'])||empty($_GET['password'])||empty($_GET['nname'])||empty($_GET['email'])||empty($_GET['sex'])||empty($_GET['f1']) ) {
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
	 <td><input name="password" type="text" size="33"/></td>
    </tr>
    <tr>
     <td>Name</td>
	 <td><input name="name" type="text" size="33"/></td>
    </tr>
    <tr>
     <td>Last Name</td>
	 <td><input name="lname" type="text" size="33"/></td>
    </tr>
    <tr>
     <td>Nickname</td>
	 <td><input name="nname" type="text" size="33"/></td>
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
    <td><input name="sex" type="radio" />Male
	    <input name="sex" type="radio" />Female
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
    <td>
	  <input name="f1" type="checkbox">I accept Terms of Use of the ulD community<br>
	  <input name="submitted" type="hidden" value="1"/><input type="submit" value="Sign Up"/>
	<input id="js_button" type="button" value="click me for javascript" />
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
   <?php }else { ?>
	<center><h1>Thanks for the registration!</h1></center>
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
 
  if (isset($year["$key"]))
 { 
 $Data =$year["$key"].$month["$vey"].$day_b["$wey"]; 
 }
 fwrite($Handle, $Data); 
 fclose($Handle);
 echo "Date of birth:".$year["$key"].$month["$vey"].$day_b["$wey"];
 ?>
                      </td>
					 </tr>
      </table> 	  
   <?php } ?>    
  </form>
<script type="text/javascript">

$( document ).ready(function() { //when page is loaded.

//#1 - vivesti soobschenie
//alert('hello');


// $('#email') - dostup k polu
//#2 - vivesti znachenie polya
//alert( $('#email').val() );

//#3 
$( "#js_button" ).click(function() {
  alert( "Handler for .click() called." );
  alert( $('#email').val() );
});

});


</script>


 </body>
</html>
