<?php

class Electronics  {
	
	 protected $_height=1;
	 private $_width=2;
	 private $_weight=3;
	 
	 public function getParameters(){
	 	return $this->_height."x".$this->_width.'x'.$this->_weight;
	 }
	 
	 
	 public function getWidth(){
	 	return $this->_width;
	 }

	 public function getWeight(){
	 	return $this->_weight;
	 }
	
	 /*
	 public function selet($data){
	 	implode || explode 
	 	$data=array('row1'=>'value1');
	 	INSERT INTO tablename (row1,ro2,....) VALUES (value1, value2,...)
	 }
	 */
}