

<?php
include_once "allSet.php";
 ?>

<div class="col-lg-9">
    <br>
    <br>
    <br>
    <br>

    <div class="row">
        <? foreach ($items as $item ) : ?>
        <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
                <a href="#"><img class="card-img-top img-fluid" src="http://placehold.it/700x400?text=<?=$item['name']?>" alt=""></a>
                <div class="card-block">
                    <h4 class="card-title"><a href="item.php?id=<? echo $item['id'] ?>"><?=$item['name']?></a></h4>
                    <h5><?=$item['price'] ?> грн.</h5>
                    <p class="card-text"><?=$item['description']?></p>
                </div>
                <div class="card-footer">
                    <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                </div>
                <form action="" method="post">
                    <input type="submit" class="btn btn-success" value="Buy">
                    <input type="hidden" name="action" value="toBasket">
                    <input type="hidden" name="itemId" value="<?=$item['id']?>">
                </form>
            </div>
        </div>
        <? endforeach; ?>
    </div>
    <!-- /.row -->

</div>
<!-- /.col-lg-9 -->