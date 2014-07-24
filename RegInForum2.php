    <?php
    $email = $_POST['email'];
    $password = $_POST['password'];
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
      
    
      
    mysql_close();
    ?>