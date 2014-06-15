<?php 
$Var="Bob";
$VAR="Joy";
echo "$Var";  // (!)нужны ли ковычки
echo "<br>";
echo "<h2>".$VAR."</h2>"; 
?>
<?php
$var="Gut";
$_var="Gat";
$varд="Get";
echo $varд,$_var;
?>
<?php
if ($action == "показать версию" ) {
 echo " версия=1.23 ";
 }
 if ($show_separators) {
 echo "<hr>\n";
 }
?>
<?php
$a= 123; // десятичная система
$a1= 0123; // восьмиричная ситема
$a2= 0x123; // шеснадцатиричная система
echo "$a,$a1,$a2"
?>
<p><?php
$a=1.23;
$b=1.e3;
$c=7E-10;         //(!) что такое Е
$a=$a+1;
$b=$c+$a/$b;
echo $a,$b,$c;   // (!)нужна ли точка вконце стороки
?>
<p><?php
$a="это просто текст, записанный в переменную";
echo $a;
?>
<p><?php
// Многомерный массив
$A["Ivanov"] = array("name"=>"Иванов И.И.", "age"=>"25", "email"=>"ivanov@mail.ru");
$A["Petrov"] = array("name"=>"Петров П.П.", "age"=>"34", "email"=>"petrov@mail.ru");
$A["Sidorov"] = array("name"=>"Сидоров С.С.", "age"=>"47", "email"=>"sidorov@mail.ru");
echo $A["Petrov"]["email"];
?>
<p><?php
class foo
{
function do_foo() 
  {
  echo "Doing_foo";
  }
}
$bar= new foo;
$bar-> do_foo();
?>
<?php
// Многомерный простой массив:
$arr[0][0]="Овощи";
$arr[0][1]="Фрукты";
$arr[1][0]="Абрикос";
$arr[1][1]="Апельсин";
$arr[1][2]="Банан";
$arr[2][0]="Огурец";
$arr[2][1]="Помидор";
$arr[2][2]="Тыква";
// Выводим элементы массива:
echo "<h3>".$arr[0][0].":</h3>";
for ($q=0; $q<=2; $q++) {
echo $arr[2][$q]."<br>";
}
echo "<h3>".$arr[0][1].":</h3>";
for ($w=0; $w<=2; $w++) {
echo $arr[1][$w]."<br>";
}
?>
<?php
$names[0]="Alex";
$names[1]="Николай";
$names[2]="Яков";
list ($A,$B,$C)=$names;
echo $A;           // вывод Alex
?>
<br><?php
$A=array("a"=>"Zero","b"=>"Weapon","c"=>"Alpha","d"=>"Processor");
asort($A);
foreach($A as $w=>$s)
echo "$w=>$s";              

?>
<p><?php
$A=array("d"=>"Zero", "c"=>"Weapon", "b"=>"Alpha", "a"=>"Processor");
ksort($A);
for(Reset($A); list($k,$v)=each($A);) echo "$k=>$v ";
// выводит "a=>Processor b=>Alpha c=>Weapon d=>Zero"



// foreach (массив as $ключ=>$значение)
//команды;
?>
<?php
$names["Иванов"] = "Андрей";
$names["Петров"] = "Борис";
$names["Волков"] = "Сергей";
$names["Макаров"] = "Федор";
foreach ($names as $key => $value) {
echo "<b>$value $key</b><br>";
}
/*Андрей Иванов
Борис Петров
Сергей Волков       -----выводит
Федор Макаров*/
?>
<?php
$names[] = "Alex";
$names[] = "Dod";
$names[] = "Ger";
$names[] = "Fopr";
foreach ($names as $value) {
echo "<b>$value</b><br>";
}
/* выводит 
Alex
Dod
Ger
Fopr*/
?>
<?php //(1,2,3)
$A=array("Belarus"," Russia","Ukraine","Kazakhstan","Austria","Japan","Canada");
$B=array(1,2,3,4,5,6,7,8,9,10);
$C=array("January"=>1,"February"=>2,"March"=>3,"April"=>4,"May"=>5,"June"=>6,"July"=>7,"August"=>8,"September"=>9,"October"=>10,"November"=>11,"December"=>12);
?>
<?php // 4
$C=array("January"=>1,"February"=>2,"March"=>3,"April"=>4,"May"=>5,"June"=>6,"July"=>7,"August"=>8,"September"=>9,"October"=>10,"November"=>11,"December"=>12);
asort($C);
foreach($C as $k=>$v)
echo ".$k<br/>";
?>
<?php //5
$B=array(1,2,3,4,5,6,7,8,9,10);
arsort($B);
foreach($B as $w)
echo "$w";
?>
<p><?php //6
$B=array(1,2,3,4,5,6,7,8,9,10);
shuffle($B);
foreach($B as $q)
echo "$q";
?></p>


