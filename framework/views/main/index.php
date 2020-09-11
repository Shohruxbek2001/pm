<?php

/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>
<main>
    <?php
    $item = \app\models\User::find()->all();
    ?>
    <?php
    foreach ($item as $index) {
        ?>
        <h1 style="color: red"><?= $index->username ?> Login</h1>
    <?php } ?>
    <h1 class="visually-hidden">Интернет магазин "Panda"</h1>
    <div class="slideshow-container">
        <?php
        $basic = \app\models\Basic::find()->all();
        ?>
        <?php
        foreach ($basic as $index) if ($index->basic_id < 4){
        ?>
        <div class="mySlides fade">
            <div class="numbertext"><?=$index->name?></div>
            <img class="imgOF tbt" src="<?php echo Yii::$app->request->baseUrl; ?>/uploads/basic/<?=$index->image?>" style="width:100%; height: 500px;">
            <div class="text"><?=$index->details?></div>
        </div>
        <?php } ?>
        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>
    </div>
    <br>

    <div style="text-align:center">
        <span class="dot" onclick="currentSlide(1)"></span>
        <span class="dot" onclick="currentSlide(2)"></span>
        <span class="dot" onclick="currentSlide(3)"></span>
    </div>

    <section class="popular container">
        <h2 class="popular__title section-title">Популярные категории</h2>

        <div class="popular__container">

            <?php
            $category_type = \app\models\CategoryType::find()->all()
            ?>
            <?php foreach ($category_type as $index) { ?>
                <div class="popular__img-container ">
                <img src="<?php echo Yii::$app->request->baseUrl; ?>/uploads/category_type/<?=$index->image?>"
                     alt="Гостинная " width="100%">
                <a href="<?php Yii::$app->urlManager->createUrl(['/'])?>main/category/<?=$index->alias?>"
                   class="button popular__button"><?=$index->category_type_ru?></a>
                </div><?php } ?>

        </div>
    </section>
    <section class="big-photo--middle big-photo">
        <div class="big-photo__photo-con big-photo__photo-con--middle">
            <div class="container big-photo__text-con">
                <p class="big-photo__text big-photo__text--middle">Скоро в наличии</p>
                <h2 class="big-photo__title big-photo__title--middle">Lounge collection</h2>
                <p class="big-photo__price--middle big-photo__price">87 400 сум</p>
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
                            <img src="<?php echo Yii::$app->request->baseUrl; ?>/uploads/product/<?=$index->image1?>"
                                 alt="Описания товара">
                        </p>
                        <!-- Контейнер для заголовка товара и оценки -->
                        <div class="item__title-container">
                            <h3 class="item__title"><?=$index->product_name_ru?></h3>
                            <small class="item__mark"><?=$index->evaluation?>
                                <svg width="15" height="15" class="item__star">
                                    <use xlink:href="#starv2"></use>
                                </svg>
                            </small>
                        </div>
                        <!-- Описания товара -->
                        <p class="item__des"><?=$index->details_ru?></p>
                        <div class="item__bottom--sale">
                            <!-- Старая цена -->
                            <del class="sale__old-price"><?=$index->no_discount_ru?></del>
                            <!-- Контейнер для кнопки и цены -->
                            <div class="item__bottom">
                                <!-- Ценв товара -->
                                <b class="item__price"><?=$index->price_name_ru?></b>
                                <!-- Кнопка для перехода по товару -->
                                <a href="<?php Yii::$app->urlManager->createUrl(['/'])?>main/item/<?=$index->alias?>"
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
                            <small class="item__mark">3.7
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
                            <a href="<?php Yii::$app->urlManager->createUrl(['/'])?>main/item/<?=$index->alias?>"
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
                                 alt="Описания товара" wid="">
                        </p>
                        <!-- Контейнер для заголовка товара и оценки -->
                        <div class="item__title-container">
                            <h3 class="item__title"><?=$index->product_name_ru?></h3>
                            <small class="item__mark"><?=$index->evaluation?>
                                <svg width="15" height="15" class="item__star">
                                    <use xlink:href="#starv2"></use>
                                </svg>
                            </small>
                        </div>
                        <!-- Описания товара -->
                        <p class="item__des"><?=$index->details_ru?></p>
                        <!-- Контейнер для кнопки и цены -->
                        <div class="item__bottom">
                            <!-- Ценв товара -->
                            <b class="item__price"><?=$index->price_name_ru?></b>
                            <!-- Кнопка для перехода по товару -->
                            <a href="<?php Yii::$app->urlManager->createUrl(['/'])?>main/item/<?=$index->alias?>" class="item__button button">Подробнее</a>
                        </div>
                    </li>
                <?php } ?><?php } ?>
        </ul>
    </section>
    <script>
        var slideIndex = 1;
        showSlides(slideIndex);

        function plusSlides(n) {
            showSlides(slideIndex += n);
        }

        function currentSlide(n) {
            showSlides(slideIndex = n);
        }

        function showSlides(n) {
            var i;
            var slides = document.getElementsByClassName("mySlides");
            var dots = document.getElementsByClassName("dot");
            if (n > slides.length) {slideIndex = 1}
            if (n < 1) {slideIndex = slides.length}
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" active", "");
            }
            slides[slideIndex-1].style.display = "block";
            dots[slideIndex-1].className += " active";
        }


    </script>
</main>
