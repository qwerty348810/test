<?php
class destruction {
    function __construct(){
        print "Construct Class";
        $this->name="destruction";
    }
    function __destruct(){
        print "Uber".$this->name;
    }
}
$obj=new destruction();

?>