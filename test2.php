<html>

<head>

<title>Listing 10-4</title>

</head>

<body bgcolor="#ffffff" text="#000000" link="#cbda74" vlink="#808040" alink="f808040">

<?

// ��� ������� ������ $form ������ ��������������,

// � ��������� ������ ���������� ������.

$form = "

<form action=\"listing10-4.php\" method=\"post\">

<input type=\"hidden\" name=\"seenform\" value=\"y\">

<b>Give us some information!</b><br>

Your Name:<br>

<input type=\"text\" name=\"name\" size=\"20\" maxlength=\"20\" value=\"\"><br>

Your Email:<br>

<input type=\"text\" name=\"email\" size=\"20\" maxlength=\"40\" value=\"\"><br>

<input type=\"submit\" value=\"subscribe!\">

</form>";

// ���� ����� ����� �� ������������, ���������� ��.

// ��� �������� ������������ �������� ������� ���������� $seenform.

if ($seenform != "�"):

print "$form";

else :

print "Hi. $name!. Your email address is $email";

endif;

?>

</body>

</html>