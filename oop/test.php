<?php
class test {
    function base() {
      echo "<h1>��� ������� �����<br>";  
    }
    function base_test(){
        $this->base();
    }
}
class inc_test extends test {
    function base(){
        echo "��� ����������� �����";
    }
}
$a=new test();
$b=new inc_test();
$a->base();
$b->base_test();
$b->base();


?>