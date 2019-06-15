<?php
require "../engine/Autoload.php";
require "../config/config.php";

use app\model\Products;
use app\engine\Autoload;
use app\model\Users;

spl_autoload_register([new Autoload(), 'loadClass']);

$product = new Products("Цветок", "описание", 150);
echo "<pre>";
$product->insert();



//$prod1->price = 12;

//$product->update();




