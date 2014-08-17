<?php

class Electronics  {
	
	 private $_height=1;
	 private $_width=2;
	 private $_weight=3;
	 
	 public function getParameters(){
	 	return $this->_height."x".$this->_width.'x'.$this->_weight;
	 }
	 

	
}