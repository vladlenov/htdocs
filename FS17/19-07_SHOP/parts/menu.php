<!-- Page Content -->
<?php include_once "allSet.php"; ?>

<div class="container">

    <div class="row">

        <div class="col-lg-3">

            <h1 class="my-4">Rozetka</h1>
            <div class="list-group">
                <? foreach (getCategories() as $key => $menuItem) : ?>
                    <a href="category.php?id=<?= $key ?>"
                       class="list-group-item"><?=$menuItem['category_name'] ?></a>
                    <ul type="none">
                        <? foreach ($menuItem['subcat'] as $category_id => $subcat) : ?>
                        <li>
                            <a href="category.php?id=<?= $category_id ?>"
                               class="list-group-item"><?=$subcat ?></a>
                        </li>
                        <? endforeach; ?>
                    </ul>
                <? endforeach; ?>
            </div>

        </div>
        <!-- /.col-lg-3 -->
    </div>
</div>