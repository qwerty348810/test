 <?php else { ?>
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
        <?php
 if ($_GET['action']==login){
 $file_name=$_GET['action'];
 include_once($file_name.".php");}
 if ($_GET['action']==register){
 $file_name2=$_GET['action'];
 include_once($file_name2.".php");}
 ?>