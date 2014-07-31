<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="" lang="" dir="">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" >
	<meta charset="utf-8">
	<title></title>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
</head>
<body>
<form action="forum.php" method="get" >
  <table border="1" style="margin:auto;" bordercolor="#EEEEEE">
    <tr>
     <td>Email</td>
	 <td><input id="email" name="email" type="text" size="33"/></td>
    </tr>
    <tr>
     <td>Password</td>
     <td><input id="password" name="password" type="text" size="33"/></td>
    </tr>
    <tr>
     <td>Name</td>
     <td><input id="name" name="name" type="text" size="33"/></td>
    </tr>
    <tr>
     <td>Last Name</td>
     <td><input id="lname" name="lname" type="text" size="33"/></td>
    </tr>
    <tr>
     <td>Nickname</td>
	 <td><input id="niname" name="nname" type="text" size="33"/></td>
    </tr>
   <tr>
   <td>Date of birth</td>
    <td>
     <select name="day_b">
    </select>  
    <select name="month">  
    </select>
    <select name="year">
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
    </body>
    </html>