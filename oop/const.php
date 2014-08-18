<?php
class baseclass{
    function __construct(){
        print "Baseclass!!!";
    }
} 
class subclass extends baseclass {
    function __construct(){        
        parent::__construct();
        print "Subclass!!!!";
    }
}
$obj=new baseclass();
$obj=new subclass();

?>