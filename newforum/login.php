<?php 
$email=(isset($_GET['email']) ? ($_GET['email']): 0);
$password=(isset($_GET['password']) ? ($_GET['password']): 0);
if(isset($_GET['enter'])){
    if($_GET['email'] != "" and $_GET['password'] != ""){
                $db = mysql_connect("localhost", "root", "") or die(mysql_error());
                mysql_select_db("test",$db);
                $result = mysql_query("SELECT * FROM `regist` WHERE `email` = '$email' AND `password` = '$password'") or die(mysql_error());
                   
                if ($user) {
                   
                }
                else {
                 echo '<span class="error">Неверный логин или пароль</span>';
                }
    }
}
include_once $template_dir.$action.'.phtml';
?>