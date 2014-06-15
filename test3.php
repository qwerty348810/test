
<body>
<?php
$email = $_POST['email'];// собираем введенные данные и записываемв переменные
$pass = $_POST['pass'];
$icq = $_POST['icq'];
$name = $_POST['name']; 
$sename = $_POST['sename'];
$text .= "Е mail: $email \n"; // записываем в переменную то что собираемся писать в файл 
$text .= "Пароль: $pass \n"; 
$text .= "Icq: $icq \n"; 
$text .= "Имя: $name \n"; 
$text .= "Фамилия: $sename \n";
$text .= "------------------------------------------------------------------------------------ \n"; // разделитель для удобства восприятия полученного текста (необязательный элемент)
  if (!empty($email) && !empty($pass) && !empty($icq) && !empty($name) && !empty($sename)) //если все переменные имеют значения выполняем запись в файл
    {
    $file = fopen ("message.txt", "a+"); //открываем для дозаписи файл message.txt лежаший в одной папке с текущей страницей
    fwrite ($file,$text); // пишем в файл
    fclose ($file); // закрываем файл
}
?>
<form name="form1" method="post" action="index.php">
  <label for="textfield"></label>  
  <table border="0" cellspacing="0" cellpadding="0">
    <tr>
      <td><label for="textfield">E mail</label></td>
      <td><input type="text" name="email" id="email"></td>
    </tr>
    <tr>
      <td>Пароль</td>
      <td><input type="text" name="pass" id="pass"></td>
    </tr>
    <tr>
      <td>ICQ</td>
      <td><input type="text" name="icq" id="icq"></td>
    </tr>
    <tr>
      <td>Имя</td>
      <td><input type="text" name="name" id="name"></td>
    </tr>
    <tr>
      <td>Фамилия</td>
      <td><input type="text" name="sename" id="sename"></td>
    </tr>
  </table>
  <p>
    <label for="Submit"></label>
    <input type="submit" name="Submit" value="Сохранить" id="Submit">
  </p>
</form>
</body>
</html>