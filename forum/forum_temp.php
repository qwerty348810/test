<?php //include_once 'forum_temp_inc.php'; ?>
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
