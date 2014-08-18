<?php
class paren {
    function paren_funct() {echo "это родительска€ фунци€<br>";}
        function test() {echo "это родительский класс<br>";}                   
}
class child extends paren {
    function child_funct() {echo "это дочерн€€ функци€<br>";}
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