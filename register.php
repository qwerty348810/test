  <html>
       <?php
 if ($_GET['action']==forum){
 $file_name=$_GET['action'];
 include_once($file_name.".php");}
 if ($_GET['action']==login){
 $file_name2=$_GET['action'];
 include_once($file_name2.".php");}
 include_once 'conf4.php';
 ?> 
   <head>       
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" >
	<meta charset="utf-8">
	<title>Forum</title>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
   </head>
    <body>   
     
    <form action="login.php" method="post" name="forma2">
     <div align="center">
       Click to Home:<br />
      <input id="js_button" type="submit" name="enter" value="Enter"/><br />
     </div>
   </form>  
  </body> 
 </html> 