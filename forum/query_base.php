<?php include_once 'variables.php'; ?>
<?php 
    $display="<a href='index.php?action=community'>Enter to Forum</a>";
    $mysql_con= "SELECT * FROM regist WHERE `password`='".$password."' AND `email`='".$email."'";
    $result=mysql_query($mysql_con);      
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
        echo"================================>>>>>>>>>>";
        echo $display."</br>";
    }      
      /* esli tolko 1 element massiva to budem ispozvat ego bez foreach*/
    if (count($query_result_data)==1) 
        $query_result_data_row=$query_result_data[0];         
    if ($query_result_data_row['password']==$password) 
        echo "password correct";
    else  
        echo "password incorrect";            
    mysql_close();
?>
   