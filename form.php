<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="" lang="" dir="">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta charset="utf-8">
	<title>New page</title>
</head>
<body> 

<?php
$screen=1;

 
/* comment  */
// comment 2
if (isset($_GET['submitted']) && $_GET['submitted']==1 ) {
	
	$screen=3;
	if ( empty($_GET['firstname']) || empty($_GET['secondname']) || empty($_GET['year']) ) {
		$screen=2;
	}
	
	 
}

?>

<?php if ($screen==1) { ?>
	<form action="/form.php" method="get" >
		<p><input type="text" name="firstname" /></p>
		<p><input type="text" name="secondname" /></p>
		<p>
			<label for="year">Date of Birth:</label>
			<input type="number" onkeyup='this.value=parseInt(this.value) | 0' name="year" />
		</p>
		
		<p><input type="hidden" name="submitted" value="1" /></p>
		
		<p><input type="submit" value="Submit Form" /></p>
		
	</form>
<?php  } elseif ($screen==2) { ?>

	<center><h1>You have mistake please fill all fields.</h1></center>
	<?php echo $_GET['firstname']; ?>

<?php }else { ?>
	<center><h1>Thanks for the registration!</h1></center>
<?php } ?>
</body>
</html>

 
