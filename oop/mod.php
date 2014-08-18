<?php
class myclass {
    public $public='public';
    private $private='private';
    protected $protected='protected';
    function test (){
        echo $this->public;
        echo $this->private;
        echo $this->protected;
    }
}
$obj=new myclass();
$obj->test();
echo $obj->public;
//echo $obj->private;
//echo $obj->protected;
?>