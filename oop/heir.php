<?php
class paren {
    function paren_funct() {echo "��� ������������ ������<br>";}
        function test() {echo "��� ������������ �����<br>";}                   
}
class child extends paren {
    function child_funct() {echo "��� �������� �������<br>";}
    function test (){echo "��� �������� �����<br>"; }
}
$c=new paren();
$d=new child();
$c->test();
$c->paren_funct();

$d->test();
$d->paren_funct();
$d->child_funct();

?>
<?php
class A {
    function testA(){
        echo "������ ������ �";
    }
    function test(){
        echo"������ ���� �";
    }
}
class B extends A{
    function testB(){
        echo "������ ������� �";
    }
    function test(){
        echo"������ ���� �";
    }
}
$object=new A();
$object=new B();

$object->test();//� �
$object->testA();//� �
$object->testB();//� �       
?>