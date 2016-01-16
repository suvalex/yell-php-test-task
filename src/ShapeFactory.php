<?php 

class ShapeFactory{
	
    public static function build($shape_type, $shape_params = array()){
		$class_name = ucfirst($shape_type);
		
		if(class_exists($class_name)){
			$shape = new $class_name;
			$shape->setParams($shape_params);
			
			return $shape;
		} 
		else{
			throw new Exception("Wrong shape type");
		}
    }
}