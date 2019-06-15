<?php
require "../engine/Autoload.php";
require "../config/config.php";

use app\model\Products;
use app\engine\Autoload;
use app\model\Basket;


spl_autoload_register([new Autoload(), 'loadClass']);


$controllerName = $_GET['c'] ?: 'product';
$actionName = $_GET['a'];

$controllerClass = CONTROLLER_NAMESPACE . ucfirst($controllerName) . "Controller";

if (class_exists($controllerClass)) {
    $controller = new $controllerClass();
    $controller->runAction($actionName);
} else {
    echo "404";
}



/** @var Products $product */

//$product->setPrice(255);

//$product->save();

$product = Products::getOne(1);

//var_dump(($product));
$product->price = 130;
$product->description = "Новое описание 3";
$product->name = "Пеперони 1";

$product->update();

//
//var_dump($product);
//$product->insert();

//$product->delete();




