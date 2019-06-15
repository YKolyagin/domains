<?php
session_start();
require "../engine/Autoload.php";
require "../config/config.php";

use app\engine\Autoload;
use app\engine\Render;
use app\engine\Request;
use app\model\Products;

//require_once '../vendor/autoload.php';
spl_autoload_register([new Autoload(), 'loadClass']);

$request = new Request();

$controllerName = $request->getControllerName() ?: 'product';
$actionName = $request->getActionName();

$controllerClass = CONTROLLER_NAMESPACE . ucfirst($controllerName) . "Controller";

if (class_exists($controllerClass)) {
    $controller = new $controllerClass(new Render());
    $controller->runAction($actionName);
} else {
    echo "404";
}



/** @var Products $product */
//$product = Products::getOne(1);
//$product->setPrice(255);

//$product->save();


//var_dump(($product));
//$product->description = "Не вкусный очень";

//$product->update();

//
//var_dump($product);
//$product->insert();

//$product->delete();




