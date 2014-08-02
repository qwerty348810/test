<?php
$day_b=array(1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31);
$month=array("January","February","March","April","May","June","July","August","September","October","November","December");
$location=array("New York","Las Vegas","Washington");
$year=array(2014,2013,2012,2011,2009,2008,2007,2006,1990);
$submit=( isset($_GET['submitted']) ? $_GET['submitted'] : '' );
$yearf=( isset($_GET['year']) ? $_GET['year'] : '' );
$monthf=( isset($_GET['month']) ? $_GET['month'] : '' );
$dayf=( isset($_GET['day_b']) ? $_GET['day_b'] : '' );
$dmy=( isset($_GET['$dayf']) ? $_GET['$dayf'] : '' ).( isset($_GET['$monthf']) ? $_GET['$monthf'] : '' ).( isset($_GET['yearf']) ? $_GET['yearf'] : '' );
$email=( isset($_GET['email']) ? $_GET['email'] : '' );
$password=( isset($_GET['password']) ? $_GET['password'] : '' );
$name=( isset($_GET['name']) ? $_GET['name'] : '' );
$lname=( isset($_GET['lname']) ? $_GET['lname'] : '' );
$nname=( isset($_GET['nname']) ? $_GET['nname'] : '' );
$sex=( isset($_GET['sex']) ? $_GET['sex'] : '' );
$loc=( isset($_GET['location']) ? $_GET['location'] : '' );
$action=( isset($_GET['action']) ? $_GET['action'] : '' );
$f1=( isset($_GET['f1']) ? $_GET['f1'] : '' );
?>
<?php                    
     asort($day_b);
     foreach ($day_b as $k=>$v) {						
     echo '<option value="'.$k.'">'.$v.'</option>';}
?>
<?php           
    mysql_connect("localhost", "root", "") or die (mysql_error ());
    mysql_select_db("test") or die(mysql_error());
        $query = "SELECT * FROM regist WHERE `email`='".$email."'";
        $sql = mysql_query($query) or die(mysql_error());
            if (mysql_num_rows($sql) < 0) {
                echo '<script type="text/javascript">alert("Mailbox is already Busy");</script>';
                echo 'Email busy!';
                echo '<script type="text/javascript">window.location = "forum.php";</script>';
            }
                $strSql=' INSERT INTO regist 
                (email,password,name,last_name,nickname,date_of_birth,sex,location)  
                VALUES 
                ("'.$email.'", "'.$password.'", "'.$name.'", "'.$lname.'", "'.$nname.'", "'.$dmy.'", "'.$sex.'", "'.$loc.'")';
                $result=mysql_query($strSql); 
            if ($strSql){
                echo "SENCS!!!!";
                echo "$strSql";
            }
    mysql_close();
?>               