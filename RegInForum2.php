    <?php
    $email = $_POST['email'];
    $password = $_POST['password'];
    mysql_query("SET NAMES 'utf-8'");
    mysql_connect("localhost", "root", "") or die (mysql_error ());
    mysql_select_db("test") or die(mysql_error());
      $sql = "SELECT * FROM regist WHERE `password`='".$password."' AND `email`='".$email."'";
      $result=mysql_query($sql);
      $row = mysql_fetch_array($result);
      if($row){
          echo "Авторизация выполнена";
          
      }
      else {
          echo "Не Правильное мыло или пароль";                   
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