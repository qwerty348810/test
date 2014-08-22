<?php
if (isset($_GET['locatin'])){ 
    $action=$_GET['locatin'];}
    else{
    include_once 'loginpost.php';
    };
if (isset($_GET['register'])){ 
    $action=$_GET['register'];}
    else{
    include_once 'loginpost.php';
    };
?>
<?php 
 $action=$_GET['action'];
 if (isset($action)==login){
 include_once($action.".php");}
 else{
    include_once(forum.php); 
 }
 if ($action==login){
 $file_name2=$action;
 include_once($file_name2.".php");}
 include_once 'conf4.php';
 ?>
<?php 
session_start();
if(isset($_SESSION['views'])){
$_SESSION['views']=$_SESSION['views']+1;
}
else {
$_SESSION['views']=1;
echo "Views=". $_SESSION['views'];
}
?>
 <?php
if (isset($_GET['login'])){ 
    $action=$_GET['login'];}
    else{
    include_once 'login.php';
    };
if (isset($_GET['register'])){ 
    $action=$_GET['register'];}
    else{
    include_once 'register.php';
    };
?>
<?php
 if ($action==login){
 $file_name=$action;
 include_once($file_name.".php");}
 if ($action==register){
 $file_name2=$action;
 include_once($file_name2.".php");}
 ?>
<?php
 $action=$_GET['action'];
 if (isset($action) && file_exists($action.".php")){
 include_once($action.".php");}
 elseif (!file_exists($action)) {  
     echo 'File not exists';
     die();
 }
 else{
    include_once(forum.php); 
 }
?>
<?php
 if (isset($_GET['action'])){
   $action=$_GET['action']; 
 } else {
     $action='';
 }
 if (isset($action) && file_exists($action.".php")){
   include_once($action.".php");
 } elseif (!file_exists($action)) {  
     echo 'File not exists';
     die();
 } else {
    include_once'forum.php'; 
 }
?>
if(isset($_SESSION['views'])){
$_SESSION['views']=$_SESSION['views']+1;
}
else {
$_SESSION['views']=1;
echo "Views=". $_SESSION['views'];
}
<?php
 if ($action==login){
 $file_name=$action;
 include_once($file_name.".php");}
 if ($action==register){
 $file_name2=$action;
 include_once($file_name2.".php");}
 ?>
// Таблица для вывода ошибки-----------------------------------------
 <table border="1" style="margin:auto;" width="400px" bordercolor="#EEEEEE">			             
                                    <tr>
                                                     <td align="center" >

            <?php 
            $File = "Name.txt"; 
            $Handle = fopen($File, 'w');

            $Data ="";

             if (isset($name) )
            { 
            $Data =$name ; 
            }
            fwrite($Handle, $Data); 
            fclose($Handle);
            echo "Name:".$name;
            ?>
                                 </td>
                                                    </tr>
                                        <tr>
                                                     <td align="center" ><?php 
            $File = "Last Name.txt"; 
            $Handle = fopen($File, 'w');

            $Data ="";

             if (isset($lname) )
            { 
            $Data =$lname ; 
            }
            fwrite($Handle, $Data); 
            fclose($Handle);
            echo "Last Name:".$lname;
            ?>                   
                                 </td>
                                </tr>		
                                        <tr>
                                                     <td align="center" >
           <?php 
            $File = "Password.txt"; 
            $Handle = fopen($File, 'w');

            $Data ="";

             if (isset($password) )
            { 
            $Data =$password ; 
            }
            fwrite($Handle, $Data); 
            fclose($Handle);
            echo "Password:".$password;
            ?>                  
                                 </td>
                                                    </tr>
                                        <tr>
                                                     <td align="center" >
           <?php 
            $File = "Nickname.txt"; 
            $Handle = fopen($File, 'w');

            $Data ="";

             if (isset($nname) )
            { 
            $Data =$nname ; 
            }
            fwrite($Handle, $Data); 
            fclose($Handle);
            echo "Nickname:".$nname;
            ?> 
                                 </td>
                                                    </tr>		
                                        <tr>
                                                     <td align="center" >
           <?php 
            $File = "Email.txt"; 
            $Handle = fopen($File, 'w');

            $Data ="";

             if (isset($email) )
            { 
            $Data =$email ; 
            }
            fwrite($Handle, $Data); 
            fclose($Handle);
            echo "Email:".$email;
            ?> 
                                 </td>
                                                    </tr>
                                <tr>
                                                    <td align="center" >
           <?php 
            $File = "Date of birth.txt"; 
            $Handle = fopen($File, 'w');

            $Data ="";

             if (isset($year["$yearf"])||($month["$monthf"])||($day_b["$wey"]))
            { 
            $Data =$year["$yearf"].$month["$monthf"].$day_b["$dayf"]; 
            }
            fwrite($Handle, $Data); 
            fclose($Handle);
            echo "Date of birth:".$dmy;
            $File = "File.txt"; 
            $Handle = fopen($File, 'w');

            $Data ="";

             if (isset($lname)&&($month["$monthf"])&&($day_b["$dayf"])&&($year["$yearf"])&&($email)&&($nname)&&($name)&&($password))
            { 
            $Data =$lname.$year["$yearf"].$month["$monthf"].$day_b["$dayf"].$email.$nname.$name.$password; 
            }
            fwrite($Handle, $Data); 
            fclose($Handle);
            ?>
                                 </td>
                                                    </tr>
                 </table>
--------------------------------------------------------------------------
<form action="login.php">
    <div align="center">
        <button type="submit">Button to register</button>
    </div>
</form> 
------------------------------------------------------------------------------
<?php
            mysql_connect("localhost", "root", "") or die (mysql_error ());
            mysql_select_db("test") or die(mysql_error());
             $query = "SELECT * FROM regist WHERE `email`='".$email."'";
             $sql = mysql_query($query) or die(mysql_error());
              if (mysql_num_rows($sql) < 0)
               {
                 echo '<script type="text/javascript">alert("Mailbox is already Busy");</script>';
                 echo 'Email busy!';
                 echo '<script type="text/javascript">window.location = "forum.php";</script>';
               }
            mysql_close();
            mysql_connect("localhost", "root", "") or die (mysql_error ());
            mysql_select_db("test") or die(mysql_error());   
             $strSql=' INSERT INTO regist 
             (email,password,name,last_name,nickname,date_of_birth,sex,location) 
              VALUES 
             ("'.$email.'", "'.$password.'", "'.$name.'", "'.$lname.'", "'.$nname.'", "'.$dmy.'", "'.$sex.'", "'.$location["$loc"].'")';
            $result=mysql_query($strSql); 
            if ($strSql){
                echo "SENCS!!!!";
                echo "$strSql";
            }

           mysql_close();
        ?>             
-------------------------------------------------------------------------------
login
<?php
            $mail=$_GET['mail'];
            $password=$_GET['password'];
            if (isset($mail) && isset ($password)){
                include_once 'conf4.php';
                echo "$mail.$password";
            }
            ?>
-------------------------------------------------------------------------------
forum
<?php
    $screen=1;
if (isset($submit) && $submit==1 ) {
    $screen=3; 
if ( empty($name)||empty($lname)||empty($password)||empty($nname)||empty($email) ) {
    $screen=2;
}
}
?>
-------------------------------------------------------------------------------
foreach
                       <?php                    
                       asort($location);
                       foreach ($location as $k=>$v) {						
                       echo '<option value="'.$k.'">'.$v.'</option>';}
                       ?>
------------------------------------------------------------------------------
Форма отправляет пустые значения


<html>
<head>
<title>HTML-форма добавления текста</title>
</head>
<body>
<form method="post">
<input name="message" type="text"/>
<input name="send" type="submit" value="Send"/>
</form>
<?php
if(isset($_POST['message'])) {
  include("db.php");
  $text = trim(mysql_real_escape_string($_POST['message']));
  $query = "INSERT INTO `base1` (texts) VALUES('$text')";
  $link = mysql_query($query);
  if($link) echo "Вы записали: $text";
}
?>
</body>
</html>
------------------------------------------------------------------------------
кнопка для сессии
<?php
if($_SESSION['views']) {
?>
Welcome <?php echo $_SESSION['views']; ?>. Click here to <a href="logout.php" tite="Logout">Logout.
<?php
}
?>
-------------------------------------------------------------------------------
кнопка login
<?php
if(isset($_SESSION['views'])) { ?>
 Click here to <a href="logout.phtml" tite="Logout">Logout.
<?php } ?>
----------------------------------------------------------------------------
проверка мыла и пароля

<?php include_once 'variables.php'; ?>
<?php    
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
------------------------------------------------------------------------------
Добавление пункта меню "Новые темы"

------ открыть
search.php
------ найти
         case 'unanswered':
------ добавить перед

         case 'new_topics':
            $l_search_title = $user->lang['SEARCH_NEW_TOPICS'];
            // force sorting
            $show_results = 'topics';
            $sort_key = 't';
            $sort_dir = 'd';
            $sort_by_sql['t'] = 't.topic_time';
            $sql_sort = 'ORDER BY ' . $sort_by_sql[$sort_key] . (($sort_dir == 'a') ? ' ASC' : ' DESC');

            gen_sort_selects($limit_days, $sort_by_text, $sort_days, $sort_key, $sort_dir, $s_limit_days, $s_sort_key, $s_sort_dir, $u_sort_param);
            $s_sort_key = $s_sort_dir = $u_sort_param = $s_limit_days = '';
   
            $sql = 'SELECT t.topic_id
               FROM ' . TOPICS_TABLE . ' t
               WHERE t.topic_time > ' . $user->data['user_lastvisit'] . '
                  AND t.topic_moved_id = 0
                  ' . str_replace(array('p.', 'post_'), array('t.', 'topic_'), $m_approve_fid_sql) . '
                  ' . ((sizeof($ex_fid_ary)) ? 'AND ' . $db->sql_in_set('t.forum_id', $ex_fid_ary, true) : '') . "
               $sql_sort";
            $field = 'topic_id';
         break;
         
         


------ открыть   
language/ru/common.php
------ найти
   'SEARCH_NEW'            => 'Новые сообщения',
------ добавить после
   'SEARCH_NEW_TOPICS'         => 'Новые темы',
------ и аналогично для language/en/common.php

------ открыть
includes/functions.php
------ найти
      'U_SEARCH_NEW'         => append_sid("{$phpbb_root_path}search.$phpEx", 'search_id=newposts'),
------ добавить после
      'U_SEARCH_NEW_TOPICS'   => append_sid("{$phpbb_root_path}search.$phpEx", 'search_id=new_topics'),

      
------ открыть
index_body.html
------ найти (часть строки)
<a href="{U_SEARCH_NEW}">{L_SEARCH_NEW}</a>
------ заменить на
<a href="{U_SEARCH_NEW}">{L_SEARCH_NEW}</a> &bull; <a href="{U_SEARCH_NEW_TOPICS}">{L_SEARCH_NEW_TOPICS}</a>

У кого установлен мод ссылок в виде выпадающего меню, добавьте в overall_header.html пункт:
КОД: ВЫДЕЛИТЬ ВСЁ
<a href="{U_SEARCH_NEW_TOPICS}" style="background-image: url({T_THEME_PATH}/images/icon_bookmark.gif)">{L_SEARCH_NEW_TOPICS}</a>
------------------------------------------------------------------------------------------

 background-image: url("http://eu.battle.net/wow/static/images/layout/bg/body-bg-baked-1920px.jpg?v=2");
 
 
 ------------------------------------------------------------------------------------------------
 
 echo '<a href='.'community.php?action='.$row['id'].'><tr><td class="color">'.$row['title'].'</td></tr></a>'; 
 
 
 ---------------------------------------------------------------------------------------------------
 кнопка
 $display="<a href='index.php?action=community'>Enter to Forum</a>";
 
 --------------------------------------------------------------------------------------------------
 кнопка
        <form action="community.php" method="get" >
            <div class="forumc">
                <input type="hidden"  name="action" value="variable_topic" />
                <input class="b1" align="middle" type="submit" value="NEW TOPIC"/>               
            </div>
        </form>    
 ----------------------------------------------------------------------
 
  if ($row!="0"){
           $action="variable_topic";
           include_once 'messeges.php';
       }
       
       ------------------------------------------------------
       
    $mysql_con2= "SELECT * FROM topic WHERE parent_id='".$parent_id."'";
    $result2 = mysql_query($mysql_con2) or die(mysql_error());
        if ($parent_id!="0"){
            echo "<p>Title theme<Br><textarea name='textcoment' cols='25' rows='1' ></textarea></p>
            <input type='hidden'  name='action' value='topic' />
            <input type='hidden'  name='parent_id' value='$parent_id' />
            <input class='b1' align='middle' type='submit' value='NEW TOPIC'/>";
        }    
    $mysql_con4= "SELECT * FROM messeges WHERE parent_id='".$parent_id."'";
    $result4 = mysql_query($mysql_con4) or die(mysql_error());    
            echo "<p>Coment<Br><textarea name='messeges' cols='25' rows='3' ></textarea></p>
            <input type='hidden'  name='action' value='messeges' />
            <input type='hidden'  name='parent_id' value='$parent_id' />
            <input class='b1' align='middle' type='submit' value='NEW MESSEGES'/>";
            while($row4 = mysql_fetch_assoc($result4)) {
            echo '<tr><td class="color">'.$row4['messeges'].'</td></tr>';
            } 
        }       
        -------------------------------------------------------------
        
        if (isset($_POST['']))
 
