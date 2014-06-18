<!DOCTYPE html>
<?php
$day_b=array(1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31);
$month=array("January","February","March","April","May","June","July","August","September","October","November","December");
$location=array("New York","Las Vegas","Washington");
$year=array(2014,2013,2012,2011,2009,2008,2007,2006,1990);
?>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="" lang="" dir="">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta charset="utf-8">
	<title>New page</title>
</head>
 <body>
 <?php 
 $screen=1;
if (isset($_GET['submitted']) && $_GET['submitted']==1 ) {
 $screen=3; 
if ( empty($_GET['name'])||empty($_GET['lname'])||empty($_GET['password'])||empty($_GET['nname'])||empty($_GET['email'])||empty($_GET['sex']) ) {
 $screen=2;
	}
	}
?>
<?php if ($screen==1) { ?>
 <form action="Forum.php" method="get" >
  <table border="1" style="margin:auto;">
   <tr>
    <td>Email</td>
	<td><input name="email" type="text" size="33"/></td>
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
     <select name="day">
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
	 </td>
   </tr>
   <?php  } elseif ($screen==2) { ?>
	<center><h1>You have mistake please fill all fields.</h1></center>	   	
<?php }else { ?>
	<center><h1>Thanks for the registration!</h1></center>
		<p align="center"><?php echo $_GET["surname"]; ?>
	    <?php echo $_GET["name"]; ?><br>
		<?php echo $_GET["password"]; ?><br>		
		<?php echo $_GET["lname"]; ?><br>
		<?php echo $_GET["nname"]; ?><br>		
		<?php echo $_GET["email"]; ?></p>		
<?php } ?>

  </table>
  </form>

 </body>
</html>