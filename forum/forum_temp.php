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
<form action="login.phtml" method="get" >
    <table border="1" style="margin:auto;" bordercolor="#EEEEEE">
        <tr>
            <td>Email</td>
            <td><input id="email" name="email" type="email" size="33"/></td>
        </tr>
        <tr>
            <td>Password</td>
            <td><input id="password" name="password" type="text" size="33" required placeholder="Only numbers" pattern="^[ 0-9]+$"/></td>
        </tr>
        <tr>
            <td>Name</td>
            <td><input id="name" name="name" type="text" size="33" pattern="^[a-zA-Z]+$"/></td>
        </tr>
        <tr>
            <td>Last Name</td>
            <td><input id="lname" name="lname" type="text" size="33" pattern="^[a-zA-Z]+$"/></td>
        </tr>
        <tr>
            <td>Nickname</td>
            <td><input id="niname" name="nname" type="text" size="33" pattern="^[a-zA-Z]+$"/></td>
        </tr>
        <tr>
            <td>Date of birth</td>
            <td>
                <select name="day_b">
                           <?php                    
                           asort($day_b);
                           foreach ($day_b as $k=>$v) {						
                           echo '<option value="'.$k.'">'.$v.'</option>';}
                           ?>
                </select>  
                <select name="month">
                       <?php                    
                           asort($month);
                           foreach ($month as $k=>$v) {						
                            echo '<option value="'.$k.'">'.$v.'</option>';}
                           ?>
                </select>
                <select name="year">
                      <?php                    
                      asort($year);
                      foreach ($year as $k=>$v) {						
                      echo '<option value="'.$k.'">'.$v.'</option>';}
                      ?>
                </select>
            </td>
        </tr>
        <tr>
            <td>Sex</td>
            <td id="sext"><input id="male" name="sex" type="radio" value="male" />Male
                          <input id="female" name="sex" type="radio" value="female" />Female
            </td>
        </tr>
        <tr>
            <td>Location</td>
            <td>
                <select name="location">
                       <?php                    
                       asort($location);
                       foreach ($location as $k=>$v) {						
                       echo '<option value="'.$k.'">'.$v.'</option>';}
                       ?>
                </select>
            </td>
        </tr>
        <tr>
            <td id="f2">
                <input id="f1" name="f1" type="checkbox" value="check">I accept Terms of Use of the ulD community<br>
                <input name="submitted" type="hidden" value="1"/><input id="js_button" type="submit" value="Sign Up"/>
            </td>
        </tr>
    </table>                                                                  
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
</form>
<form action="login.phtml">
    <div align="center">
        <button type="submit">Button to Login</button>
    </div>
</form>
<script type="text/javascript">

$( document ).ready(function() {
    $( "#js_button" ).click(function() {
        var lname=$('#niname').val();
        if (lname.length<1) {
                alert("please fill niname field");
                jQuery("#niname").css("background-color", "red");
        }
     });
});
$( document ).ready(function() {
    $( "#js_button" ).click(function() {
        var lname=$('#email').val();
        if (lname.length<1) {
                alert("please fill email field");
                jQuery("#email").css("background-color", "red");
        }
     });
});
$( document ).ready(function() {
    $( "#js_button" ).click(function() {
        var lname=$('#name').val();
        if (lname.length<1) {
                alert("please fill name field");
                jQuery("#name").css("background-color", "red");
        }
     });
});

$( document ).ready(function() {
    $( "#js_button" ).click(function() {
        var lname=$('#lname').val();
        if (lname.length<1) {
                alert("please fill lname field");
                jQuery("#lname").css("background-color", "red");
        }
     });
});
$( document ).ready(function() {
    $( "#js_button" ).click(function() {
        var password=$('#password').val();
        if (password.length<1) {
                alert("please fill password field");
                jQuery("#password").css("background-color", "red");
        }
     });
});
 
$( document ).ready(function() {
    $( "#js_button" ).click(function() {
    var sex=$('#sex').val();
if (sex.value="") { alert("please fill sex field"); 
jQuery("#sext").css("color", "red");
}
});
});

/*var f1=$('#f1').val(); 
$( document ).ready(function() {
     $( "#js_button" ).click(function() {
 	var f1=jQuery('#f1').attr("checked");{
if (f1==false) { alert("please fill f1 field");
jQuery("#f2").css("color", "red"); }
}
});*/



</script>
