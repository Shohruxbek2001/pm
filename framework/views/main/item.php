<?php

/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>
<main class="container">
    <h1 class="visually-hidden">Каталог интернет магазина "Panda"</h1>
    <ul class="breadcrumbs">
        <li class="breadcrumbs__item">
            <a href="<?= Yii::$app->urlManager->createUrl(['/']) ?>">Главная</a>
        </li>
        <li class="breadcrumbs__item">
            <a href="<?= Yii::$app->urlManager->createUrl(['/category']) ?>"><?= $catalog['catalog_name_ru'] ?></a>
        </li>

        <li class="breadcrumbs__item">
            <a href="<?= Yii::$app->urlManager->createUrl(['/']) ?>main/item/<?= $item['alias'] ?>"><?= $item['product_name_ru'] ?></a>
        </li>
    </ul>
    <section class="item-des col-md-12" style="margin-bottom: 20px">
        <ul class="item-des__img-list col-md-2">
            <li class="item-des__item">
                <img src="<?php echo Yii::$app->request->baseUrl; ?>/uploads/product/<?= $item['image1'] ?>"
                     alt="Описание товара"width="100%" onclick="myFunction(this)">
            </li>
            <li class="item-des__item">
                <img src="<?php echo Yii::$app->request->baseUrl; ?>/uploads/product/<?= $item['image2'] ?>"
                     alt="Описание товара" width="100%" onclick="myFunction(this)">
            </li>
            <li class="item-des__item">
                <img src="<?php echo Yii::$app->request->baseUrl; ?>/uploads/product/<?= $item['image3'] ?>"
                     alt="Описание товара" width="100%" onclick="myFunction(this)">
            </li>
        </ul>
        <p class="item-des__main-img-container col-md-6">
            <img id="expandedImg" src="<?php echo Yii::$app->request->baseUrl; ?>/uploads/product/<?= $item['image4'] ?>"
                 alt="Описание товара" onclick="myFunction(this)" style="height: 370px !important; object-fit: cover; border-radius: 3px;">
        </p>
        <div class="item-des__main-text col-md-4">
            <div class="item-des__titile--container">
                <h2 class="item-des__title"><?= $item['product_name_ru'] ?></h2>
                <ul class="item-des__stars-list">
                    <?php
                    for ($n = 0; $n < $item['evaluation']; $n++) {
                        ?>
                        <li class="item-des__star">
                            <svg width="15" height="18" class="item-des__star-icon">
                                <use xlink:href="#star"></use>
                            </svg>
                        </li>
                    <?php } ?>
                </ul>
            </div>
            <p class="item-des__main-des">
                <?= $item['details_ru'] ?>
            </p>
        </div>
        <script>
            function myFunction(imgs) {
                var expandImg = document.getElementById("expandedImg");
                var imgText = document.getElementById("imgtext");
                expandImg.src = imgs.src;
                imgText.innerHTML = imgs.alt;
                expandImg.parentElement.style.display = "block";
            }
        </script>
    </section>

    <section class="item-characters col-md-12">
        <ul class="item-characters__list col-md-5">
            <li class="item-characters__item">
                <span class="item-characters__name">Высота</span>
                <span class="item-characters__value"><?= $item['height'] ?></span>
            </li>
            <li class="item-characters__item">
                <span class="item-characters__name">Длина</span>
                <span class="item-characters__value"><?= $item['length'] ?></span>
            </li>
            <li class="item-characters__item">
                <span class="item-characters__name">Ширина</span>
                <span class="item-characters__value"><?= $item['width'] ?></span>
            </li>
        </ul>
        <ul class="item-characters__list offset-md-2 col-md-5">
            <li class="item-characters__item">
                <span class="item-characters__name">Метериал</span>
                <span class="item-characters__value"><?= $goods['name_ru'] ?></span>
            </li>
            <li class="item-characters__item">
                <span class="item-characters__name">Бренд</span>
                <span class="item-characters__value"><?= $brand['brand_ru'] ?></span>
            </li>
            <li class="item-characters__item">
                <span class="item-characters__name">Страна</span>
                <span class="item-characters__value"><?= $state['state_ru'] ?></span>
            </li>
        </ul>
    </section>
    <section class="sale container">
        <h2 class="sale__title section-title">Товары со скидкой</h2>
        <ul class="sale__list list-slider ">
            <!--Коробека для товара-->
            <?php
            $product = \app\models\Product::find()->all()
            ?>
            <?php foreach ($product

                           as $index) { ?>
                <?php if ($index->category_id == 1) { ?>
                    <li class="item sale__item" tabindex="-1">
                        <!--Иконка для знака sale-->
                        <svg width="37" height="35" class="item__sale">
                            <use xlink:href="#sale"></use>
                        </svg>
                        <!--Иконка для знака сердеко-->
                        <svg width="22" height="20" class="item__heart">
                            <use xlink:href="#heart"></use>
                        </svg>
                        <!-- Контейнер доя изображения -->
                        <p class="item__img">
                            <img src="<?php echo Yii::$app->request->baseUrl; ?>/uploads/product/<?= $index->image1 ?>"
                                 alt="Описания товара">
                        </p>
                        <!-- Контейнер для заголовка товара и оценки -->
                        <div class="item__title-container">
                            <h3 class="item__title"><?= $index->product_name_ru ?></h3>
                                <small class="item__mark"><?=$index->evaluation?>
                                    <svg width="15" height="15" class="item__star">
                                        <use xlink:href="#starv2"></use>
                                    </svg>
                                </small>
                        </div>
                        <!-- Описания товара -->
                        <p class="item__des"><?= $index->details_ru?></p>
                        <div class="item__bottom--sale">
                            <!-- Старая цена -->
                            <del class="sale__old-price"><?= $index->no_discount_ru ?></del>
                            <!-- Контейнер для кнопки и цены -->
                            <div class="item__bottom" >
                                <!-- Ценв товара -->
                                <b class="item__price"><?= $index->price_name_ru ?></b>
                                <!-- Кнопка для перехода по товару -->
                                <a href="<?php Yii::$app->urlManager->createUrl(['/main/item/']) ?><?= $index->alias ?>"
                                   class="item__button button">Подробнее</a>
                            </div>
                        </div>
                    </li>
                <?php } ?><?php } ?>
        </ul>
    </section>
    <section class="new container">
        <div class="new__title-container section-title__container">
            <h2 class="new__title section-title">Новинки</h2>
        </div>
        <ul class="new__list list-slider ">
            <!--Коробека для товара-->
            <!-- Минимальное колличество карточек 6 штук , ни в коем случаи не делать меньше 6 штук  -->
            <?php
            $product = \app\models\Product::find()->all()
            ?>
            <?php foreach ($product as $index) { ?>
                <?php if ($index->category_id == 3) { ?>
                    <li width="280" height="414" class="item new__item" tabindex="-1">
                        <!--Иконка для знака sale-->
                        <svg width="50" height="50" class="item__new">
                            <use xlink:href="#new"></use>
                        </svg>
                        <!--Иконка для знака сердеко-->
                        <svg width="22" height="20" class="item__heart">
                            <use xlink:href="#heart"></use>
                        </svg>
                        <!-- Контейнер доя изображения -->
                        <p class="item__img">
                            <img width="240" height="192"
                                 src="<?php echo Yii::$app->request->baseUrl; ?>/uploads/product/<?= $index->image1 ?>"
                                 alt="Описания товара">
                        </p>
                        <!-- Контейнер для заголовка товара и оценки -->
                        <div class="item__title-container">
                            <h3 class="item__title"><?= $index->product_name_ru ?></h3>
                                <small class="item__mark"><?=$index->evaluation?>
                                    <svg width="15" height="15" class="item__star">
                                        <use xlink:href="#starv2"></use>
                                    </svg>
                                </small>
                        </div>
                        <!-- Описания товара -->
                        <p class="item__des" ><?= $index->details_ru ?></p>
                        <!-- Контейнер для кнопки и цены -->
                        <div class="item__bottom">
                            <!-- Ценв товара -->
                            <b class="item__price"><?= $index->price_name_ru ?></b>
                            <!-- Кнопка для перехода по товару -->
                            <a href="<?php Yii::$app->urlManager->createUrl(['/main/item/']) ?><?= $index->alias ?>"
                               class="item__button button">Подробнее</a>
                        </div>
                    </li>
                <?php } ?><?php } ?>
        </ul>
    </section>
    <section class="popular-item container">
        <h2 class="popular-item__title section-title">Популярные товары</h2>
        <ul class="popular-item__list list-slider ">
            <?php
            $product = \app\models\Product::find()->all()
            ?>
            <?php
            foreach ($product as $index) {
                ?><?php
                if ($index->category_id == 2) {
                    ?>
                    <li class="item popular-item__item" tabindex="-1">
                        <!--Иконка для знака сердеко-->
                        <svg width="22" height="20" class="item__heart">
                            <use xlink:href="#heart"></use>
                        </svg>
                        <!-- Контейнер доя изображения -->
                        <p class="item__img">
                            <img src="<?php echo Yii::$app->request->baseUrl; ?>/uploads/product/<?= $index->image1 ?>"
                                 alt="Описания товара">
                        </p>
                        <!-- Контейнер для заголовка товара и оценки -->
                        <div class="item__title-container">
                            <h3 class="item__title"><?= $index->product_name_ru ?></h3>
                                <small class="item__mark"><?=$index->evaluation?>
                                    <svg width="15" height="15" class="item__star">
                                        <use xlink:href="#starv2"></use>
                                    </svg>
                                </small>
                        </div>
                        <!-- Описания товара -->
                        <p class="item__des"><?= $index->details_ru ?></p>
                        <!-- Контейнер для кнопки и цены -->
                        <div class="item__bottom">
                            <!-- Цена товара -->
                            <b class="item__price"><?= $index->price_name_ru ?></b>
                            <!-- Кнопка для перехода по товару -->
                            <a href="<?php Yii::$app->urlManager->createUrl(['/main/item/']) ?><?= $index->alias ?>"
                               class="item__button button">Подробнее</a>
                        </div>
                    </li>
                <?php } ?><?php } ?>
        </ul>
    </section>
    <script>
        function myFunction(imgs) {
            var expandImg = document.getElementById("expandedImg");
            var imgText = document.getElementById("imgtext");
            expandImg.src = imgs.src;
            imgText.innerHTML = imgs.alt;
            expandImg.parentElement.style.display = "block";
        }
    </script>
</main>
