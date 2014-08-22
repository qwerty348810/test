
<?php
 $host = "localhost";
 $db_name = "test";
 $connect = mysql_connect("","test","");
 if (!$connect) {
    exit(mysql_error());
    echo" No Connect to Base!!!";
 }
 else {
     mysql_select_db("test",$connect);   
 }
 mysql_query("SET NAMES 'utf-8'");
        $result=mysql_query("SELECT * FROM regist");
        if(!$result)  {
            echo "No connect to Base";
            exit(mesql_error());
        }
        if (mysql_num_rows($result)>0) {
        $profiles=mysql_fetch_array($result);
        }
        else {
            exit("Base is empty");
        }
  echo '<table border="1">';
  echo '<thead>';
  echo '<tr>';
  echo '<th>Email</th>';
  echo '<th>Password</th>';
  echo '<th>Name</th>';
  echo '<th>last Name</th>';
  echo '<th>Nickname</th>';
  echo '<th>Date of birth</th>';
  echo '<th>sex</th>';
  echo '<th>Location</th>';
  echo '</tr>';
  echo '</thead>';
  echo '<tbody>';
        do {
        printf ( "        
        <tr>       
        <td>%s</td>       
        <td>%s</td>       
        <td>%s</td>       
        <td>%s</td>        
        <td>%s</td>       
        <td>%s</td>        
        <td>%s</td>        
        <td>%s</td>
        </tr>
        ",$profiles['email'],$profiles['password'],$profiles['name'],$profiles['last_name'],$profiles['nickname'],$profiles['date_of_birth'],$profiles['sex'],$profiles['location']  ) ;  
        }      
        while ($profiles=mysql_fetch_array($result));
          echo '</tbody>';
          echo '</table>';
    mysql_close();
  ?>