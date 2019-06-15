<?php
require "../engine/Autoload.php";

use app\model\Products;
use app\model\Order;
use app\model\Basket;
use app\engine\Db;
use app\engine\Autoload;

spl_autoload_register([new Autoload(), 'loadClass']);

$product = new Products(new Db());

$order = new Order(new Db());

$basket = new Basket(new Db());


echo "<pre>";
var_dump($product);
echo "</pre>";

echo "<pre>";
var_dump($order);
echo "</pre>";

echo "<pre>";
var_dump($basket);
echo "</pre>";


