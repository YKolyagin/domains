<h2>Корзина</h2><hr>
<?php
foreach ($products as $product):?>

    <h2><?=$product['name']?></h2>
    <p>Описание:<?=$product['description']?></p>
    <p>Цена:<?=$product['price']?></p>

    <button data-id="<?= $product['id_basket']?>" data-productId="<?= $product['id']?>" class="delete">Удалить</button>

<?endforeach;?>

<script>
    $(document).ready(function(){
        $(".delete").on('click', function(){
            let id = $(this).attr('data-id');
            let productId = $(this).attr('data-productId');
            console.log(id);
            $.ajax({
                url: "/basket/DelBasket/",
                type: "POST",
                dataType : "json",
                data:{
                    id: id
                    productId: productId
                },
                //error: function() {alert('error');},
                success: function(answer){
                    {
                        $("#count").html(answer.count);
                    }
                }

            })
        });

    });
</script>
