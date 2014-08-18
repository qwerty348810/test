<?php
class paren {
    function paren_funct() {echo "это родительская фунция<br>";}
        function test() {echo "это родительский класс<br>";}                   
}
class child extends paren {
    function child_funct() {echo "это дочерняя функция<br>";}
    function test (){echo "это дочерний класс<br>"; }
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
        echo "тестим фунцию А";
    }
    function test(){
        echo"просто тест А";
    }
}
class B extends A{
    function testB(){
        echo "тестим функцию В";
    }
    function test(){
        echo"просто тест В";
    }
}
$object=new A();
$object=new B();

$object->test();//т В
$object->testA();//ф А
$object->testB();//ф В       
?>