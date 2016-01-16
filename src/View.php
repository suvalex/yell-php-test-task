<?php

class View{
    protected $drawed_objects;

    protected $Render;

    public function __construct($render_name){
		if(class_exists($render_name)){
			 $this->Render = new $render_name;
		}
		else{
			throw new Exception("Wrong render type");
		}
    }

    public function add(DrawableInterface $object){
        $this->drawed_objects[] = $object->draw();
    }

    public function render(){
        foreach ($this->drawed_objects as $object){
            $this->Render->render($object);
        }
    }
}