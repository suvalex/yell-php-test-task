<?php

abstract class AbstractShape{
	
    protected $width;
    protected $color;

    public function setParams($params){
		foreach($params as $name => $value){
			$this->$name = $value;
		}
    }
}