  <html>   
   <head>       
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" >
	<meta charset="utf-8">
	<title>Forum</title>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
   </head>
    <body>   
    <?php
    $email = $_POST['email'];
    $password = $_POST['password'];
    mysql_query("SET NAMES 'utf-8'");
    mysql_connect("localhost", "root", "") or die (mysql_error ());
    mysql_select_db("test") or die(mysql_error());
      $sql = "SELECT * FROM regist WHERE `password`='".$password."' AND `email`='".$email."'";
      $result=mysql_query($sql);
      
      /* Magic goes here */
      $query_result_data=array();
      while ($row = mysql_fetch_assoc($result)) {
 		/* adding to array row from table */
      	$query_result_data[]=$row;
      }
      
      /* now array has all teble records*/
      echo "=== -check email ==== <br/>";
      if (count($query_result_data)) 
      	echo "Record (Email) found. <br/>";
      else 
      	echo "email record not found.<br/>";
      
      echo "=== -check password ==== <br/>";
      	
      foreach ($query_result_data as $column_title=>$column_value) {
      	echo $column_title.'='.$column_value."<br/>";
      	if ($column_title=='password'&& $column_value==$password)
      		echo "password correct <br/>";
      }
      
      /* esli tolko 1 element massiva to budem ispozvat ego bez foreach*/
      if (count($query_result_data)==1)
      	$query_result_data_row=$query_result_data[0];
      
      if ($query_result_data_row['password']==$password)
      	echo "password correct";
      else 
      	echo "password incorrect"; 
      
      /* Magic ends here*/
     
      
     
    mysql_close();
    ?>
 <?php
 if ($_GET['action']==forum){
 $file_name=$_GET['action'];
 include_once($file_name.".php");}
 if ($_GET['action']==login){
 $file_name2=$_GET['action'];
 include_once($file_name2.".php");}
 ?>    
    <form action="login.php" method="post" name="forma2">
     <div align="center">
       Click to Home:<br />
      <input id="js_button" type="submit" name="enter" value="Enter"/><br />
     </div>
   </form>  
  </body> 
 </html> 