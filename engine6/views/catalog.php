<? foreach ($products as $product):?>

<a href="/product/card/?id=<?=$product['id']?>"><h2><?=$product['name']?></h2></a>
<p><?=$product['description']?></p>
<p>Стоимость: <?=$product['price']?></p>
<button data-id="<?=$product['id']?>" class="action">Купить</button><br>
<? endforeach;?>

<a href="/product/catalog/?page=<?=$page?>">Еще 2 ...</a>

<script>
    $(document).ready(function(){
        $(".action").on('click', function(){
            let id = $(this).attr('data-id');
            //console.log(id);
            $.ajax({
                url: "/basket/AddBasket/",
                type: "POST",
                dataType : "json",
                data:{
                    id: id
                },
                error: function() {alert('error');},
                success: function(answer){
                    {
                        $("#count").html(answer.count);
                    }
                }

            })
        });

    });
</script>