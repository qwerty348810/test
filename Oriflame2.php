<!DOCTYPE html>
<?php

$fields2 = array(
    "key"  => "value",
    "key2" => "value2",
    "key3" => "value3");
print_r($fields);
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
 if (isset($_GET['f2']) && $_GET['f2']==1 ) {
  $screen=3; 
  
	$fields = array("surname","name","passport","region","locality","address","postcode","mobile_phone","e-mail");
	$bad=0;
     foreach ($fields as $value){
	 print_r($value);
	 echo "<br/>";
	 // $_GET($value)
	 // $value="surname";
	 // $bad=$bad+1;
	 }
}
	// type: array
	// foreach
	// function: in_array
	 
?>
<?php if ($screen==1) { ?>


<table border="0" width="900px" style="margin:auto;">
      <td><img src="http://orilider.com/images/logo_gray.png" style="margin-left: 350px;" /></img>
 <table border="0" >
   <tr>
    <td><h1>Registration Form</h1>
	 <p>For registration Oriflame complete the form below.</p>
	 <p>The confidentiality of personal data is guaranteed.</p>
	 <p>All fields are required.</p>
	 <form action="Oriflame.php" method="get" >
	 <table border="0">
	  <tr>
	   <td>Family name</td>
	   <td><input name="surname" type="text" size="33" ></td>
	  </tr>
	  <tr>
	   <td>Name and First Name</td>
	   <td><input name="name" type="text" size="33" ></td>
	  </tr>
	  <tr>
	   <td>Passport</td>
	   <td><input name="passport" type="text" size="33" placeholder="series and number"</td>
	  </tr>
	  <tr>
	   <td>Birthday</td>
	   <td align="left"><select name="day_b">
	                    <?php
                        $day_b=array(1,2,3,4,5,6,7,8,9,10);
						arsort($day_b);
						foreach ($day_b as $k=>$v) {						
						echo '<option value="'.$k.'">'.$v.'</option>';}
						?>
	                    </select>
						<select name="day_b">
	                    <?php
                        $day_b=array(1,2,3,4,5,6,7,8,9,10);
						asort($day_b);
						foreach ($day_b as $k=>$v) {						
						echo '<option value="'.$k.'">'.$v.'</option>';}
						?>
	                    </select>
	                    <select name="month">
						<?php
						$month=array("January","February","March","April","May","June","July","August","September","October","November","December");
						arsort($month);
						foreach ($month as $k=>$v) {
						echo '<option value="'.$k.'">'.$v.'</option>';}
						?>
						</select>
						<select name="month">
						<?php
						$month=array("January","February","March","April","May","June","July","August","September","October","November","December");
						asort($month);
						foreach ($month as $k=>$v) {
						echo '<option value="'.$k.'">'.$v.'</option>';}
						?>
						</select>											
						<option value="0">Month</option><option value="01">January</option><option value="2">February</option></select>
						<input name="year" type="text" placeholder="19XX" size="6" maxlength="4"> </td>				
	  </tr>
	  <tr>
	   <td>Country</td>
	   <td align="left"><select name="country" style="width:45%" >	  
	    <?php 
		$country=array("Belarus","Russia","Ukraine","Kazakhstan","Austria","Japan","Canada");
		asort($country);
		foreach ($country as $k=>$v) {
        echo '<option value="'.$k.'">'.$v.'</option>';}
        ?>
	    </select>
		<select name="country" style="width:45%" >
	    <?php 
		$country=array("Belarus","Russia","Ukraine","Kazakhstan","Austria","Japan","Canada");
		arsort($country);
		foreach ($country as $k=>$v) {
        echo '<option value="'.$k.'">'.$v.'</option>';}
        ?>
	    </select>
	   </td>	
	  </tr>
	  <tr>
	   <td>Region</td>
	   <td><input name="region" type="text" size="33"></td>
	  </tr>
	  <tr>
	   <td>Locality</td>
	   <td><input name="locality" type="text" size="33" " placeholder="name of the city or village"></td>
	  </tr>
	  <tr>
	   <td>Address</td>
	   <td><input name="address" type="text" size="33" " placeholder="street name, house, apartment"></td>
	  </tr>
	  <tr>
	   <td>Postcode</td>
	   <td><input name="postcode" type="text" size="33" "></td>
	  </tr>
	  <tr>
	   <td>Mobile phone</td>
	   <td><input name="mobile phone" type="text" size="33" " placeholder="in international format"></td>
	  </tr>
	  <tr>
	   <td>E-mail</td>
	   <td><input name="e-mail" type="text" size="33" "></td>
	  </tr>
	  <tr>
	   <td><input name="f1" type="checkbox"></td>
	   <td>I accept the conditions of registration</td>
	  </tr>
	  <tr>
	   <td><input name="f2" type="hidden" value="1" /><input type="submit" value="Sign in Oriflame"></td>
	  </tr>
	 </table>
	 </td>
	 <td><h1>Conditions Online Oriflame Registration :</h1>
			<ul>
				<li>within days after registration Oriflame , you e-mail a consultant your personal number and password with which you can order products through the online store at prices 18% lower than in the catalog. Also , check in Oriflame gives you the right to use the services of a network of medical laboratories Synevo Discount 30 % ;</li>
				<li>no matter what purpose you decide to register in Oriflame , whether buying for yourself , or for a living , you have the right to participate in all promotions and incentive programs undertaken by the company . Come regularly in the section " consultants " and " News " to be aware of all the deals ;</li>
				<li>registration Oriflame does not impose any obligations on the regularity and volume of purchases, however, if during the year you do not make any orders, your room consultant terminated ( canceled ) and you will need to register again in Oriflame . Online registration , the first order which was not committed within four directories are considered erroneous and also removed ;</li>
				<li>checking in using this online service , you confirm that at the moment you do not have an active consultant rooms ;</li>
				<li>Oriflame can register in persons aged 14 years and having a passport or birth certificate. If you are under 14 years old, or you do not have a passport ( birth certificate ) , but you want to buy products at a discount , or build a business , you can register on behalf of someone from their home , for example, older sister ( brother ) or one parent ; </li>
				<li> in Oriflame can register for foreign passport , but in this case you may not be able to buy products on credit ;</li>
				<li> User commission orders via the Internet , as well as a list of ways to pay and receive your orders , you will receive on e-mail after registration .</li>
			</ul>
	</tr>
	   </table>
</table>
<script type="text/javascript">
function  WhiteBG(obj) {
 obj.style.backgroundColor="red";
}
</script>
<hr heidth="20px" width="900px">
</hr>
<table style="margin-left: 790px;">
 <tr>
  <td><p>COPYING PROHIBITED CONTENT ON THE SITE!</td>
 </tr> 
</table>
<table style="margin-left: 750px;">
 <tr>
  <td>2003-2014 Community independent consultants Oriflame Cosmetics</td>
 </tr>
 		  </form>
	  <?php  } elseif ($screen==3) { ?>

	<center><h1>You have mistake please fill all fields.</h1></center>
	

<?php }else { ?>
	<center><h1>Thanks for the registration!</h1></center>
		<?php echo $_GET['surname']; ?>
	    <p><?php echo $_GET['name']; ?>
		<p><?php echo $_GET['passport']; ?>
		
		<p><?php echo $_GET['region']; ?>
		<p><?php echo $_GET['locality']; ?>
		<p><?php echo $_GET['postcode']; ?>
		<p><?php echo $_GET['mobile phone']; ?>
		<p><?php echo $_GET['e-mail']; ?>
<?php } ?>
</table>
 </body>
 </html>