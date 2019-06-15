<div style="display: grid; grid-template-columns: 200px 200px 200px; margin-left: 300px">
    <?php
    foreach ($products as $product) { ?>
        <a href="/?c=product&a=card&id=<?=$product['id']?>">
            <div style="display: block; width: 200px">
                <h1><?=$product['name']?></h1>
                <p><?=$product['description']?></p>
                <p><?=$product['price']?></p>
            </div>
        </a>
    <?php } ?>
</div>


