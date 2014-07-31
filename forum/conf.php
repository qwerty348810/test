<?php
 $screen=1;
if (isset($submit) && $submit==1 ) {
 $screen=3; 
if ( empty($name)||empty($lname)||empty($password)||empty($nname)||empty($email) ) {
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
                  <p align="center"><?php if (empty($name)) { echo   "enter the name";} ?><br>
                     <?php if (empty($password)) { echo   "enter the password";} ?><br>
                     <?php if (empty($lname)) { echo   "enter the Last Name";} ?><br>
                     <?php if (empty($nname)) { echo   "enter the Nickname";} ?><br>
                     <?php if (empty($email)) { echo   "enter the email";} ?><br>
		     <?php if (empty($sex)) { echo   "choose the sex";} ?><br>
		     <?php if (empty($f1)) { echo   "choose I accept Terms of Use of the ulD community";} ?></p>
            <form action="forum.php">
                <div align="center">
                 <button type="submit">button for rem</button>
                </div>
            </form>
                     
   <?php }else { ?>
	<center><h1>Thanks for the registration!</h1></center>        
        <?php
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
  ("'.$email.'", "'.$password.'", "'.$name.'", "'.$lname.'", "'.$nname.'", "'.$dmy.'", "'.$sex.'", "'.$location["$loc"].'")';
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
 
  if (isset($name) )
 { 
 $Data =$name ; 
 }
 fwrite($Handle, $Data); 
 fclose($Handle);
 echo "Name:".$name;
 ?>
                      </td>
					 </tr>
		             <tr>
					  <td align="center" ><?php 
 $File = "Last Name.txt"; 
 $Handle = fopen($File, 'w');
 
 $Data ="";
 
  if (isset($lname) )
 { 
 $Data =$lname ; 
 }
 fwrite($Handle, $Data); 
 fclose($Handle);
 echo "Last Name:".$lname;
 ?>                   
                      </td>
                     </tr>		
		             <tr>
					  <td align="center" >
<?php 
 $File = "Password.txt"; 
 $Handle = fopen($File, 'w');
 
 $Data ="";
 
  if (isset($password) )
 { 
 $Data =$password ; 
 }
 fwrite($Handle, $Data); 
 fclose($Handle);
 echo "Password:".$password;
 ?>                  
                      </td>
					 </tr>
		             <tr>
					  <td align="center" >
<?php 
 $File = "Nickname.txt"; 
 $Handle = fopen($File, 'w');
 
 $Data ="";
 
  if (isset($nname) )
 { 
 $Data =$nname ; 
 }
 fwrite($Handle, $Data); 
 fclose($Handle);
 echo "Nickname:".$nname;
 ?> 
                      </td>
					 </tr>		
		             <tr>
					  <td align="center" >
<?php 
 $File = "Email.txt"; 
 $Handle = fopen($File, 'w');
 
 $Data ="";
 
  if (isset($email) )
 { 
 $Data =$email ; 
 }
 fwrite($Handle, $Data); 
 fclose($Handle);
 echo "Email:".$email;
 ?> 
                      </td>
					 </tr>
                     <tr>
					 <td align="center" >
<?php 
 $File = "Date of birth.txt"; 
 $Handle = fopen($File, 'w');
 
 $Data ="";
 
  if (isset($year["$yearf"])||($month["$monthf"])||($day_b["$wey"]))
 { 
 $Data =$year["$yearf"].$month["$monthf"].$day_b["$dayf"]; 
 }
 fwrite($Handle, $Data); 
 fclose($Handle);
 echo "Date of birth:".$dmy;
 $File = "File.txt"; 
 $Handle = fopen($File, 'w');
 
 $Data ="";
 
  if (isset($lname)&&($month["$monthf"])&&($day_b["$dayf"])&&($year["$yearf"])&&($email)&&($nname)&&($name)&&($password))
 { 
 $Data =$lname.$year["$yearf"].$month["$monthf"].$day_b["$dayf"].$email.$nname.$name.$password; 
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
 if ($action==login){
 $file_name=$action;
 include_once($file_name.".php");}
 if ($action==register){
 $file_name2=$action;
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

