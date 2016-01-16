<?php

function __autoload($class_name) {
    include 'src/' . $class_name . '.php';
}

// name of render to use from POST
$render = isset($_POST['render']) ? $_POST['render'] : "RenderImage";

// shapes to draw with params from POST
$shapes = isset($_POST['shapes']) ? $_POST['shapes'] : [
    [
        'type' => 'circle',
        'params' => ['width' => 1, 'color' => 'red']
    ],
    [
        'type' => 'square',
        'params' => ['width' => 0.5, 'color' => 'blue']
    ]
];

$View = new View($render);

foreach($shapes as $shape_data){
	$shape = ShapeFactory::build($shape_data['type'], $shape_data['params']);
	$View->add($shape);
}

$View->render();