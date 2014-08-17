<?php

class TV extends Electronics {
	
  public function getParameters(){
  	
  	return "Height: ".$this->_height."<br/> Width: ".$this->getWidth()." <br/> Weight: ".$this->getWeight();
  }

  
  public function getWidth() {
  	$width=parent::getWidth();
  	$width.=" feet";
  	return $width;
  }
}