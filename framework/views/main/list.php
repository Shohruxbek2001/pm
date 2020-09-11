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
            <a href="<?= Yii::$app->urlManager->createUrl(['category']) ?>">Каталог</a>
        </li>
        <li class="breadcrumbs__item">
            <a href="<?= Yii::$app->urlManager->createUrl(['catalog']) ?>">Гостинная</a>
        </li>
        <li class="breadcrumbs__item">
            <a href="<?= Yii::$app->urlManager->createUrl(['']) ?>">Диваны</a>
        </li>
    </ul>
    <section class="catalog">
        <ul class="filter">
            <?php
            $catalog = \app\models\Catalog::find()->all()
            ?>
            <?php foreach ($catalog as $index) { ?>
                <li class="filter__item">
                <a href="" class="filter__link filter__link--current"><?= $index->catalog_name_ru ?></a>
                </li><?php } ?>

        </ul>
        <div class="catalog__container">
            <ul class="catalog__list good__list">
                <!--Коробека для товара-->
                <!-- Sale товар  -->
                <?php
                $product = \app\models\Product::find()->all()
                ?>
                <?php foreach ($product as $index) if ($index->category_id == 1) { ?>
                    <li class="item good__item" tabindex="-1">
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
                                <a href="" class="item__button button">Подробнее</a>
                            </div>
                        </div>
                    </li>
                    <!--Коробека для товара--><?php } ?>
                <!-- new товар  -->
                <?php
                $product = \app\models\Product::find()->all()
                ?>
                <?php foreach ($product as $index) if ($index->category_id == 2) { ?>
                    <li class="item good__item" tabindex="-1">
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
                        <!-- Контейнер для кнопки и цены -->
                        <div class="item__bottom">
                            <!-- Ценв товара -->
                            <b class="item__price"><?= $index->price_name_ru ?></b>
                            <!-- Кнопка для перехода по товару -->
                            <a href="" class="item__button button">Подробнее</a>
                        </div>
                    </li>
                    <!--Коробека для товара--><?php } ?>
                <!-- new товар  --><?php
                $product = \app\models\Product::find()->all()
                ?>
                <?php foreach ($product as $index) if ($index->category_id == 3) { ?>
                    <li class="item good__item" tabindex="-1">
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
                        <!-- Контейнер для кнопки и цены -->
                        <div class="item__bottom">
                            <!-- Ценв товара -->
                            <b class="item__price"><?= $index->price_name_ru ?></b>
                            <!-- Кнопка для перехода по товару -->
                            <a href="" class="item__button button">Подробнее</a>
                        </div>
                    </li>
                    <!--Коробека для товара--><?php } ?>
            </ul>
            <ul class="catalog__pagination pagination row">
                <div class="col-md-12">
                    <li class="pagination__item">
                        <a href="" aria-label="Назад"><span class="pagination__pre">
                <svg width="20" height="20" class="pagination__pre-icon pagination__pre-icon--disable">
                  <use xlink:href="#right-p"></use>
                </svg>
              </span>
                        </a>
                    </li>
                    <li class="pagination__item pagination__item--current">
                        <a>1</a>
                    </li>
                    <li class="pagination__item">
                        <a href="#">2</a>
                    </li>
                    <li class="pagination__item">
                        <a href="#">3</a>
                    </li>
                    <li class="pagination__item">
                        <a href="#">4</a>
                    </li>
                    <li class="pagination__item">
                        <a href="#">5</a>
                    </li>
                    <li class="pagination__item">
                        <a href="" aria-label="Дальше"><span class="pagination__next">
                <svg width="20" height="20" class="pagination__next-icon">
                  <use xlink:href="#right-p"></use>
                </svg>
              </span>
                        </a>
                    </li>
                </div>
            </ul
        </div>
    </section>

</main>
