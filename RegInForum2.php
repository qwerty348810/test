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
      	echo "email record not found.<br/>"
      
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
      $row = mysql_fetch_array($result);
      if($row){
          echo "Login";
          
      }
      else {
          echo "Not login";                   
      }
      
    $arr_main=array(); 
    $temp_array=array();
    $temp_array['password']=$row['password'];
    $temp_array['email']=$row['email'];
    $arr=array_push($temp_array,$arr_main);

    echo $arr;
    print_r($arr_main);  
    mysql_close();
    ?>
