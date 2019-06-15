<?php
/** @var \app\model\Products $products  */
/*echo "<pre>";
var_dump($products);
var_dump($quantity);*/

?>

<h2><?=$products->name?></h2>
<p><?=$products->price?> * <?=$quantity?> шт </p>
<p>Стоимость: <?=$products->price * $quantity?></p>
