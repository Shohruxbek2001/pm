<?php

/* @var $this yii\web\View */

use yii\widgets\LinkPager;

$this->title = 'My Yii Application';
?>
<main class="container">
    <h1 class="visually-hidden">Каталог интернет магазина "Panda"</h1>
    <ul class="breadcrumbs">
        <li class="breadcrumbs__item">
            <a href="<?= Yii::$app->urlManager->createUrl(['/']) ?>">Главная</a>
        </li>
        <li class="breadcrumbs__item">
            <a href="<?= Yii::$app->urlManager->createUrl(['category']) ?>">Каталог</a>
        </li>
        <li class="breadcrumbs__item">
            <a href="#"><?= $catalog['catalog_name_ru'] ?></a>
        </li>
    </ul>
    <section class="catalog menu-bar">
        <ul class="filter">
            <?php
            $category = \app\models\CategoryType::find()->all();
            ?>
            <?php
            foreach ($category as $index) {
                ?>
                <li class="filter__item">
                    <a class="filter__link"><?= $index->category_type_ru ?></a>
                    <div class="sub-menu-1">
                        <ul>
                            <?php
                            $catalog1 = \app\models\Catalog::find()->all();
                            ?>
                            <?php foreach ($catalog1 as $index1) if ($index->category_type_id == $index1->category_type_id) { ?>
                                <li>
                                    <a href="<?= Yii::$app->urlManager->createUrl(['/']) ?>main/catalog/<?= $index1->alias ?>"><?= $index1->catalog_name_ru ?></a>
                                </li>
                            <?php } ?>
                        </ul>
                    </div>
                </li>
            <?php } ?>
        </ul>
        <div class="catalog__container">
            <ul class="catalog__list good__list">
                <!--Коробека для товара-->
                <!-- Sale товар  -->
                <?php foreach ($models as $index) if ( $index->catalog_id == $catalog['catalog_id']) { ?>
                    <div class="col-md-4">
                        <li class="item good__item" tabindex="-1">
                            <!--Иконка для знака sale-->
                            <?php
                            if ($index->category_id == 1) {
                                ?>
                                <svg width="37" height="35" class="item__sale">
                                    <use xlink:href="#sale"></use>
                                </svg><?php } ?>
                            <?php
                            if ($index->category_id == 2) {
                                ?>
                                <svg width="50" height="50" class="item__new">
                                    <use xlink:href="#new"></use>
                                </svg><?php } ?>
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
                                <small class="item__mark"><?= $index->evaluation ?>
                                    <svg width="15" height="15" class="item__star">
                                        <use xlink:href="#starv2"></use>
                                    </svg>
                                </small>
                            </div>
                            <!-- Описания товара -->
                            <p class="item__des"><?= $index->details_ru ?></p>
                            <div class="item__bottom--sale">
                                <!-- Старая цена -->
                                <del class="sale__old-price"></del>
                                <!-- Контейнер для кнопки и цены -->
                                <div class="item__bottom">
                                    <!-- Ценв товара -->
                                    <b class="item__price"><?= $index->price_name_ru ?></b>
                                    <!-- Кнопка для перехода по товару -->
                                    <a href="<?= Yii::$app->urlManager->createUrl(['']) ?>main/item/<?= $index->alias ?>"
                                       class="item__button button">Подробнее</a>
                                </div>
                            </div>
                        </li>
                    </div>
                    <!--Коробека для товара--><?php } ?>
            </ul>
        </div>
    </section>
    <section>
        <div class="main-container">
            <div class="container">
                <div class="row" style="margin:30px">
                    <div class="col-md-6">
                        <article class="post-content"
                                 style="position: absolute;left: 350px;width: 300px;font-size: 25px;">
                            <?php
                            echo LinkPager::widget([
                                'pagination' => $pages,
                            ])
                            ?>
                        </article>
                    </div>
                </div>
            </div>
        </div>
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
                                 alt="Описания товара" wid="">
                        </p>
                        <!-- Контейнер для заголовка товара и оценки -->
                        <div class="item__title-container">
                            <h3 class="item__title"><?= $index->product_name_ru ?></h3>
                            <small class="item__mark"><?= $index->evaluation ?>
                                <svg width="15" height="15" class="item__star">
                                    <use xlink:href="#starv2"></use>
                                </svg>
                            </small>
                        </div>
                        <!-- Описания товара -->
                        <p class="item__des"><?= $index->details_ru ?></p>
                        <div class="item__bottom--sale">
                            <!-- Старая цена -->
                            <del class="sale__old-price"><?= $index->no_discount_ru ?></del>
                            <!-- Контейнер для кнопки и цены -->
                            <div class="item__bottom">
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
                                 alt="Описания товара" wid="">
                        </p>
                        <!-- Контейнер для заголовка товара и оценки -->
                        <div class="item__title-container">
                            <h3 class="item__title"><?= $index->product_name_ru ?></h3>
                            <small class="item__mark"><?= $index->evaluation ?>
                                <svg width="15" height="15" class="item__star">
                                    <use xlink:href="#starv2"></use>
                                </svg>
                            </small>
                        </div>
                        <!-- Описания товара -->
                        <p class="item__des"><?= $index->details_ru ?></p>
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
                            <small class="item__mark"><?= $index->evaluation ?>
                                <svg width="15" height="15" class="item__star">
                                    <use xlink:href="#starv2"></use>
                                </svg>
                            </small>
                        </div>
                        <!-- Описания товара -->
                        <p class="item__des"><?= $index->details_ru ?></p>
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
</main>
