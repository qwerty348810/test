<!DOCTYPE html>
<?php
$day_b=array(1,2,3,4,5,6,7,8,9,10);
$month=array("January","February","March","April","May","June","July","August","September","October","November","December");
$country=array("Belarus","Russia","Ukraine","Kazakhstan","Austria","Japan","Canada");
?>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="" lang="" dir="">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta charset="utf-8">
	<title>New page</title>
</head>
<body style="background-image:url(http://img-fotki.yandex.ru/get/6111/41487814.1/0_73caa_f9e35552_orig.jpg)">
<?php 
 $screen=1;
if (isset($_GET['submitted']) && $_GET['submitted']==1 ) {
 $screen=3; 
if ( empty($_GET['name'])||empty($_GET['surname'])||empty($_GET['passport'])||empty($_GET['year'])||empty($_GET['region'])||empty($_GET['address'])||empty($_GET['locality'])||empty($_GET['postcode'])||empty($_GET['mobile'])||empty($_GET['e-mail'])||empty($_GET['f1']) ) {
 $screen=2;
	}
	}
?>
<?php if ($screen==1) { ?>
<form action="Oriflame3.php" method="get" >
<table border="0" width="900px" style="margin:auto;">
  <tr>
  <td><img src="http://orilider.com/images/logo_gray.png" style="margin-left: 350px;"/></td>
  </tr> 
</table>
     <table border="0" width="1200px" style="margin:auto;" cellpadding="6" >
    <tr>
     <td width="50%"><h1 align="right">Registration Form</h1>
	 <p align="right">For registration Oriflame complete the form below.</p>
	 <p align="right">The confidentiality of personal data is guaranteed.</p>
	 <p align="right">All fields are required.</p>
	 <p align="right">Family name<input name="surname" type="text" size="33"/><br>
	 Name and First Name<input name="name" type="text" size="33"/><br>
	 Passport<input name="passport" type="text" size="33" placeholder="series and number"/><br>
	 Birthday<select name="day_b">
	                    <?php                    
						arsort($day_b);
						foreach ($day_b as $k=>$v) {						
						echo '<option value="'.$k.'">'.$v.'</option>';}
						?>
	                    </select>
						<select name="day_b">
	                    <?php           
						asort($day_b);
						foreach ($day_b as $k=>$v) {						
						echo '<option value="'.$k.'">'.$v.'</option>';}
						?>
	                    </select>
	                    <select name="month">
						<?php	
						arsort($month);
						foreach ($month as $k=>$v) {
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
						<input name="year" type="text" placeholder="19XX" size="6" maxlength="4"/><br>
						
	 Country<select name="month" >	  
	    <?php		
		asort($country);
		foreach ($country as $k=>$v) {
        echo '<option value="'.$k.'">'.$v.'</option>';}
        ?>
	    </select>
		<select name="country" >
	    <?php
		arsort($country);
		foreach ($country as $k=>$v) {
        echo '<option value="'.$k.'">'.$v.'</option>';}
        ?>
	    </select><br>
    Region<input name="region" type="text" size="33"/><br>
	Locality<input name="locality" type="text" size="33" placeholder="name of the city or village"/><br>
	Address<input name="address" type="text" size="33" placeholder="street name, house, apartment"/><br>
	Postcode<input name="postcode" type="text" size="33"/><br>
	Mobile phone<input name="mobile" type="text" size="33" placeholder="in international format"/><br>
	E-mail<input name="e-mail" type="text" size="33"/><br>
	<input name="f1" type="checkbox">I accept the conditions of registration<br>
	<input name="submitted" type="hidden" value="1"/><input type="submit" value="Sign in Oriflame"/></p>
     </td>	 
	  <td width="50%"><h1>Conditions Online Oriflame Registration :</h1>
			<ul>
				<li>within days after registration Oriflame , you e-mail a consultant your personal number and password with which you can order products through the online store at prices 18% lower than in the catalog. Also , check in Oriflame gives you the right to use the services of a network of medical laboratories Synevo Discount 30 % ;</li>
				<li>no matter what purpose you decide to register in Oriflame , whether buying for yourself , or for a living , you have the right to participate in all promotions and incentive programs undertaken by the company . Come regularly in the section " consultants " and " News " to be aware of all the deals ;</li>
				<li>registration Oriflame does not impose any obligations on the regularity and volume of purchases, however, if during the year you do not make any orders, your room consultant terminated ( canceled ) and you will need to register again in Oriflame . Online registration , the first order which was not committed within four directories are considered erroneous and also removed ;</li>
				<li>checking in using this online service , you confirm that at the moment you do not have an active consultant rooms ;</li>
				<li>Oriflame can register in persons aged 14 years and having a passport or birth certificate. If you are under 14 years old, or you do not have a passport ( birth certificate ) , but you want to buy products at a discount , or build a business , you can register on behalf of someone from their home , for example, older sister ( brother ) or one parent ; </li>
				<li> in Oriflame can register for foreign passport , but in this case you may not be able to buy products on credit ;</li>
				<li> User commission orders via the Internet , as well as a list of ways to pay and receive your orders , you will receive on e-mail after registration .</li>
			</ul>
		</td>	
     </tr>
	 </table>		
	  </form>
<hr heidth="20px" width="900px">
<table style="margin-left: 790px;">
 <tr>
  <td><p>COPYING PROHIBITED CONTENT ON THE SITE!</p></td>
 </tr> 
</table>
<table style="margin-left: 750px;">
 <tr>
  <td>2003-2014 Community independent consultants Oriflame Cosmetics</td>
 </tr> 		     	  
<?php  } elseif ($screen==2) { ?>
	<center><h1>You have mistake please fill all fields.</h1></center>	   	
<?php }else { ?>
	<center><h1>Thanks for the registration!</h1></center>
		<p align="center"><?php echo $_GET["surname"]; ?>
	    <?php echo $_GET["name"]; ?><br>
		<?php echo $_GET["passport"]; ?><br>		
		<?php echo $_GET["region"]; ?><br>
		<?php echo $_GET["locality"]; ?><br>
		<?php echo $_GET["postcode"]; ?><br>
		<?php echo $_GET["mobile"]; ?><br>
		<?php echo $_GET["e-mail"]; ?></p>		
<?php } ?>
</table>       
 </body>
 </html>