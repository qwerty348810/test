<?php
$table='regist';
$connect=mysql_connect("localhos","root","");
mysql_select_db("test") or die(mysql_error());
$result = mysql_query("select * from " . $table)or die(mysql_error());
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
while($data = mysql_fetch_array($result)){ 
  echo '<tr>';
  echo '<td>' . $data['email'] . '</td>';
  echo '<td>' . $data['password'] . '</td>';
  echo '<td>' . $data['name'] . '</td>';
  echo '<td>' . $data['last_name'] . '</td>';
  echo '<td>' . $data['nickname'] . '</td>';
  echo '<td>' . $data['date_of_birth'] . '</td>';
  echo '<td>' . $data['sex'] . '</td>';
  echo '<td>' . $data['location'] . '</td>';
  echo '</tr>';
   }    
  echo '</tbody>';
  echo '</table>';
    mysql_close();
?>


email
password
name
last_name
nickname
date_of_birth
sex
location