<?php

/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>
<main>
    <h1 class="visually-hidden">Интернет магазин "Panda"</h1>
    <section class="big-photo big-photo--hero">
        <div class="big-photo__photo-con big-photo__photo-con--hero">
            <div class="container big-photo__text-con">
                <p class="big-photo__text">Товар дня</p>
                <h2 class="big-photo__title">Кресло Irene</h2>
                <p class="big-photo__price">47 100 сум</p>
            </div>
        </div>
    </section>
    <section class="popular container">
        <h2 class="popular__title section-title">Популярные категории</h2>

        <div class="popular__container">
            <div class="popular__img-container">
                <img src="img/livingroom.jpg" alt="Гостинная " width="100%">
                <a href="" class="button popular__button">Гостинная</a>
            </div>
            <div class="popular__img-container">
                <img src="img/kitchen.jpg" alt="Кухня" width="100%">
                <a href="" class="button popular__button">Кухня</a>
            </div>
            <div class="popular__img-container">
                <img src="img/bathroom.jpg" alt="Ванная" width="100%">
                <a href="" class="button popular__button">Ванная</a>
            </div>
            <div class="popular__img-container">
                <img src="img/bedroom.jpg" alt="Спальная" width="100%">
                <a href="" class="button popular__button">Спальная</a>
            </div>
        </div>
    </section>
    <section class="sale container">
        <h2 class="sale__title section-title">Товары со скидкой</h2>
        <ul class="sale__list list-slider ">
            <!--Коробека для товара-->
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
                    <img src="img/sale1.jpg" alt="Описания товара" wid="">
                </p>
                <!-- Контейнер для заголовка товара и оценки -->
                <div class="item__title-container">
                    <h3 class="item__title">Swan</h3>
                    <small class="item__mark">3.7 <svg width="15" height="15" class="item__star">
                            <use xlink:href="#starv2"></use>
                        </svg></small>
                </div>
                <!-- Описания товара -->
                <p class="item__des">Диван идеально подходит для отдыха в залах ожидания и для дома</p>
                <div class="item__bottom--sale">
                    <!-- Старая цена -->
                    <del class="sale__old-price">300 000 сум </del>
                    <!-- Контейнер для кнопки и цены -->
                    <div class="item__bottom">
                        <!-- Ценв товара -->
                        <b class="item__price">250 000 сум</b>
                        <!-- Кнопка для перехода по товару -->
                        <a href="item.html" class="item__button button">Подробнее</a>
                    </div>
                </div>
            </li>
            <!--Коробека для товара-->
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
                    <img src="img/sale1.jpg" alt="Описания товара" wid="">
                </p>
                <!-- Контейнер для заголовка товара и оценки -->
                <div class="item__title-container">
                    <h3 class="item__title">Swan</h3>
                    <small class="item__mark">3.7 <svg width="15" height="15" class="item__star">
                            <use xlink:href="#starv2"></use>
                        </svg></small>
                </div>
                <!-- Описания товара -->
                <p class="item__des">Диван идеально подходит для отдыха в залах ожидания и для дома</p>
                <div class="item__bottom--sale">
                    <!-- Старая цена -->
                    <del class="sale__old-price">300 000 сум </del>
                    <!-- Контейнер для кнопки и цены -->
                    <div class="item__bottom">
                        <!-- Ценв товара -->
                        <b class="item__price">250 000 сум</b>
                        <!-- Кнопка для перехода по товару -->
                        <a href="" class="item__button button">Подробнее</a>
                    </div>
                </div>
            </li>
            <!--Коробека для товара-->
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
                    <img src="img/sale1.jpg" alt="Описания товара" wid="">
                </p>
                <!-- Контейнер для заголовка товара и оценки -->
                <div class="item__title-container">
                    <h3 class="item__title">Swan</h3>
                    <small class="item__mark">3.7 <svg width="15" height="15" class="item__star">
                            <use xlink:href="#starv2"></use>
                        </svg></small>
                </div>
                <!-- Описания товара -->
                <p class="item__des">Диван идеально подходит для отдыха в залах ожидания и для дома</p>
                <div class="item__bottom--sale">
                    <!-- Старая цена -->
                    <del class="sale__old-price">300 000 сум </del>
                    <!-- Контейнер для кнопки и цены -->
                    <div class="item__bottom">
                        <!-- Ценв товара -->
                        <b class="item__price">250 000 сум</b>
                        <!-- Кнопка для перехода по товару -->
                        <a href="" class="item__button button">Подробнее</a>
                    </div>
                </div>
            </li>
            <!--Коробека для товара-->
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
                    <img src="img/sale1.jpg" alt="Описания товара" wid="">
                </p>
                <!-- Контейнер для заголовка товара и оценки -->
                <div class="item__title-container">
                    <h3 class="item__title">Swan</h3>
                    <small class="item__mark">3.7 <svg width="15" height="15" class="item__star">
                            <use xlink:href="#starv2"></use>
                        </svg></small>
                </div>
                <!-- Описания товара -->
                <p class="item__des">Диван идеально подходит для отдыха в залах ожидания и для дома</p>
                <div class="item__bottom--sale">
                    <!-- Старая цена -->
                    <del class="sale__old-price">300 000 сум </del>
                    <!-- Контейнер для кнопки и цены -->
                    <div class="item__bottom">
                        <!-- Ценв товара -->
                        <b class="item__price">250 000 сум</b>
                        <!-- Кнопка для перехода по товару -->
                        <a href="" class="item__button button">Подробнее</a>
                    </div>
                </div>
            </li>
            <!--Коробека для товара-->
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
                    <img src="img/sale1.jpg" alt="Описания товара" wid="">
                </p>
                <!-- Контейнер для заголовка товара и оценки -->
                <div class="item__title-container">
                    <h3 class="item__title">Swan</h3>
                    <small class="item__mark">3.7 <svg width="15" height="15" class="item__star">
                            <use xlink:href="#starv2"></use>
                        </svg></small>
                </div>
                <!-- Описания товара -->
                <p class="item__des">Диван идеально подходит для отдыха в залах ожидания и для дома</p>
                <div class="item__bottom--sale">
                    <!-- Старая цена -->
                    <del class="sale__old-price">300 000 сум </del>
                    <!-- Контейнер для кнопки и цены -->
                    <div class="item__bottom">
                        <!-- Ценв товара -->
                        <b class="item__price">250 000 сум</b>
                        <!-- Кнопка для перехода по товару -->
                        <a href="" class="item__button button">Подробнее</a>
                    </div>
                </div>
            </li>
            <!--Коробека для товара-->
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
                    <img src="img/sale1.jpg" alt="Описания товара" wid="">
                </p>
                <!-- Контейнер для заголовка товара и оценки -->
                <div class="item__title-container">
                    <h3 class="item__title">Swan</h3>
                    <small class="item__mark">3.7 <svg width="15" height="15" class="item__star">
                            <use xlink:href="#starv2"></use>
                        </svg></small>
                </div>
                <!-- Описания товара -->
                <p class="item__des">Диван идеально подходит для отдыха в залах ожидания и для дома</p>
                <div class="item__bottom--sale">
                    <!-- Старая цена -->
                    <del class="sale__old-price">300 000 сум </del>
                    <!-- Контейнер для кнопки и цены -->
                    <div class="item__bottom">
                        <!-- Ценв товара -->
                        <b class="item__price">250 000 сум</b>
                        <!-- Кнопка для перехода по товару -->
                        <a href="" class="item__button button">Подробнее</a>
                    </div>
                </div>
            </li>
        </ul>
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
    <section class="new container">
        <div class="new__title-container section-title__container">
            <h2 class="new__title section-title">Новинки</h2>
        </div>
        <ul class="new__list list-slider ">
            <!--Коробека для товара-->
            <!-- Минимальное колличество карточек 6 штук , ни в коем случаи не делать меньше 6 штук  -->
            <li class="item new__item" tabindex="-1">
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
                    <img src="img/sale1.jpg" alt="Описания товара" wid="">
                </p>
                <!-- Контейнер для заголовка товара и оценки -->
                <div class="item__title-container">
                    <h3 class="item__title">Swan</h3>
                    <small class="item__mark">3.7 <svg width="15" height="15" class="item__star">
                            <use xlink:href="#starv2"></use>
                        </svg></small>
                </div>
                <!-- Описания товара -->
                <p class="item__des">Диван идеально подходит для отдыха в залах ожидания и для дома</p>
                <!-- Контейнер для кнопки и цены -->
                <div class="item__bottom">
                    <!-- Ценв товара -->
                    <b class="item__price">250 000 сум</b>
                    <!-- Кнопка для перехода по товару -->
                    <a href="" class="item__button button">Подробнее</a>
                </div>
            </li>
            <li class="item new__item" tabindex="-1">
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
                    <img src="img/sale1.jpg" alt="Описания товара" wid="">
                </p>
                <!-- Контейнер для заголовка товара и оценки -->
                <div class="item__title-container">
                    <h3 class="item__title">Swan</h3>
                    <small class="item__mark">3.7 <svg width="15" height="15" class="item__star">
                            <use xlink:href="#starv2"></use>
                        </svg></small>
                </div>
                <!-- Описания товара -->
                <p class="item__des">Диван идеально подходит для отдыха в залах ожидания и для дома</p>
                <!-- Контейнер для кнопки и цены -->
                <div class="item__bottom">
                    <!-- Ценв товара -->
                    <b class="item__price">250 000 сум</b>
                    <!-- Кнопка для перехода по товару -->
                    <a href="" class="item__button button">Подробнее</a>
                </div>
            </li>
            <li class="item new__item" tabindex="-1">
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
                    <img src="img/sale1.jpg" alt="Описания товара" wid="">
                </p>
                <!-- Контейнер для заголовка товара и оценки -->
                <div class="item__title-container">
                    <h3 class="item__title">Swan</h3>
                    <small class="item__mark">3.7 <svg width="15" height="15" class="item__star">
                            <use xlink:href="#starv2"></use>
                        </svg></small>
                </div>
                <!-- Описания товара -->
                <p class="item__des">Диван идеально подходит для отдыха в залах ожидания и для дома</p>
                <!-- Контейнер для кнопки и цены -->
                <div class="item__bottom">
                    <!-- Ценв товара -->
                    <b class="item__price">250 000 сум</b>
                    <!-- Кнопка для перехода по товару -->
                    <a href="" class="item__button button">Подробнее</a>
                </div>
            </li>
            <li class="item new__item" tabindex="-1">
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
                    <img src="img/sale1.jpg" alt="Описания товара" wid="">
                </p>
                <!-- Контейнер для заголовка товара и оценки -->
                <div class="item__title-container">
                    <h3 class="item__title">Swan</h3>
                    <small class="item__mark">3.7 <svg width="15" height="15" class="item__star">
                            <use xlink:href="#starv2"></use>
                        </svg></small>
                </div>
                <!-- Описания товара -->
                <p class="item__des">Диван идеально подходит для отдыха в залах ожидания и для дома</p>
                <!-- Контейнер для кнопки и цены -->
                <div class="item__bottom">
                    <!-- Ценв товара -->
                    <b class="item__price">250 000 сум</b>
                    <!-- Кнопка для перехода по товару -->
                    <a href="" class="item__button button">Подробнее</a>
                </div>
            </li>
            <li class="item new__item" tabindex="-1">
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
                    <img src="img/sale1.jpg" alt="Описания товара" wid="">
                </p>
                <!-- Контейнер для заголовка товара и оценки -->
                <div class="item__title-container">
                    <h3 class="item__title">Swan</h3>
                    <small class="item__mark">3.7 <svg width="15" height="15" class="item__star">
                            <use xlink:href="#starv2"></use>
                        </svg></small>
                </div>
                <!-- Описания товара -->
                <p class="item__des">Диван идеально подходит для отдыха в залах ожидания и для дома</p>
                <!-- Контейнер для кнопки и цены -->
                <div class="item__bottom">
                    <!-- Ценв товара -->
                    <b class="item__price">250 000 сум</b>
                    <!-- Кнопка для перехода по товару -->
                    <a href="" class="item__button button">Подробнее</a>
                </div>
            </li>
            <li class="item new__item" tabindex="-1">
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
                    <img src="img/sale1.jpg" alt="Описания товара" wid="">
                </p>
                <!-- Контейнер для заголовка товара и оценки -->
                <div class="item__title-container">
                    <h3 class="item__title">Swan</h3>
                    <small class="item__mark">3.7 <svg width="15" height="15" class="item__star">
                            <use xlink:href="#starv2"></use>
                        </svg></small>
                </div>
                <!-- Описания товара -->
                <p class="item__des">Диван идеально подходит для отдыха в залах ожидания и для дома</p>
                <!-- Контейнер для кнопки и цены -->
                <div class="item__bottom">
                    <!-- Ценв товара -->
                    <b class="item__price">250 000 сум</b>
                    <!-- Кнопка для перехода по товару -->
                    <a href="" class="item__button button">Подробнее</a>
                </div>
            </li>
            <li class="item new__item" tabindex="-1">
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
                    <img src="img/sale1.jpg" alt="Описания товара" wid="">
                </p>
                <!-- Контейнер для заголовка товара и оценки -->
                <div class="item__title-container">
                    <h3 class="item__title">Swan</h3>
                    <small class="item__mark">3.7 <svg width="15" height="15" class="item__star">
                            <use xlink:href="#starv2"></use>
                        </svg></small>
                </div>
                <!-- Описания товара -->
                <p class="item__des">Диван идеально подходит для отдыха в залах ожидания и для дома</p>
                <!-- Контейнер для кнопки и цены -->
                <div class="item__bottom">
                    <!-- Ценв товара -->
                    <b class="item__price">250 000 сум</b>
                    <!-- Кнопка для перехода по товару -->
                    <a href="" class="item__button button">Подробнее</a>
                </div>
            </li>
            <li class="item new__item" tabindex="-1">
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
                    <img src="img/sale1.jpg" alt="Описания товара" wid="">
                </p>
                <!-- Контейнер для заголовка товара и оценки -->
                <div class="item__title-container">
                    <h3 class="item__title">Swan</h3>
                    <small class="item__mark">3.7 <svg width="15" height="15" class="item__star">
                            <use xlink:href="#starv2"></use>
                        </svg></small>
                </div>
                <!-- Описания товара -->
                <p class="item__des">Диван идеально подходит для отдыха в залах ожидания и для дома</p>
                <!-- Контейнер для кнопки и цены -->
                <div class="item__bottom">
                    <!-- Ценв товара -->
                    <b class="item__price">250 000 сум</b>
                    <!-- Кнопка для перехода по товару -->
                    <a href="" class="item__button button">Подробнее</a>
                </div>
            </li>
            <li class="item new__item" tabindex="-1">
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
                    <img src="img/sale1.jpg" alt="Описания товара" wid="">
                </p>
                <!-- Контейнер для заголовка товара и оценки -->
                <div class="item__title-container">
                    <h3 class="item__title">Swan</h3>
                    <small class="item__mark">3.7 <svg width="15" height="15" class="item__star">
                            <use xlink:href="#starv2"></use>
                        </svg></small>
                </div>
                <!-- Описания товара -->
                <p class="item__des">Диван идеально подходит для отдыха в залах ожидания и для дома</p>
                <!-- Контейнер для кнопки и цены -->
                <div class="item__bottom">
                    <!-- Ценв товара -->
                    <b class="item__price">250 000 сум</b>
                    <!-- Кнопка для перехода по товару -->
                    <a href="" class="item__button button">Подробнее</a>
                </div>
            </li>
            <li class="item new__item" tabindex="-1">
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
                    <img src="img/sale1.jpg" alt="Описания товара" wid="">
                </p>
                <!-- Контейнер для заголовка товара и оценки -->
                <div class="item__title-container">
                    <h3 class="item__title">Swan</h3>
                    <small class="item__mark">3.7 <svg width="15" height="15" class="item__star">
                            <use xlink:href="#starv2"></use>
                        </svg></small>
                </div>
                <!-- Описания товара -->
                <p class="item__des">Диван идеально подходит для отдыха в залах ожидания и для дома</p>
                <!-- Контейнер для кнопки и цены -->
                <div class="item__bottom">
                    <!-- Ценв товара -->
                    <b class="item__price">250 000 сум</b>
                    <!-- Кнопка для перехода по товару -->
                    <a href="" class="item__button button">Подробнее</a>
                </div>
            </li>
        </ul>
    </section>
    <section class="popular-item container">
        <h2 class="popular-item__title section-title">Популярные товары</h2>
        <ul class="popular-item__list list-slider ">
            <li class="item popular-item__item" tabindex="-1">
                <!--Иконка для знака сердеко-->
                <svg width="22" height="20" class="item__heart">
                    <use xlink:href="#heart"></use>
                </svg>
                <!-- Контейнер доя изображения -->
                <p class="item__img">
                    <img src="img/sale1.jpg" alt="Описания товара" wid="">
                </p>
                <!-- Контейнер для заголовка товара и оценки -->
                <div class="item__title-container">
                    <h3 class="item__title">Swan</h3>
                    <small class="item__mark">3.7 <svg width="15" height="15" class="item__star">
                            <use xlink:href="#starv2"></use>
                        </svg></small>
                </div>
                <!-- Описания товара -->
                <p class="item__des">Диван идеально подходит для отдыха в залах ожидания и для дома</p>
                <!-- Контейнер для кнопки и цены -->
                <div class="item__bottom">
                    <!-- Ценв товара -->
                    <b class="item__price">250 000 сум</b>
                    <!-- Кнопка для перехода по товару -->
                    <a href="" class="item__button button">Подробнее</a>
                </div>
            </li>
            <li class="item popular-item__item" tabindex="-1">
                <!--Иконка для знака сердеко-->
                <svg width="22" height="20" class="item__heart">
                    <use xlink:href="#heart"></use>
                </svg>
                <!-- Контейнер доя изображения -->
                <p class="item__img">
                    <img src="img/sale1.jpg" alt="Описания товара" wid="">
                </p>
                <!-- Контейнер для заголовка товара и оценки -->
                <div class="item__title-container">
                    <h3 class="item__title">Swan</h3>
                    <small class="item__mark">3.7 <svg width="15" height="15" class="item__star">
                            <use xlink:href="#starv2"></use>
                        </svg></small>
                </div>
                <!-- Описания товара -->
                <p class="item__des">Диван идеально подходит для отдыха в залах ожидания и для дома</p>
                <!-- Контейнер для кнопки и цены -->
                <div class="item__bottom">
                    <!-- Ценв товара -->
                    <b class="item__price">250 000 сум</b>
                    <!-- Кнопка для перехода по товару -->
                    <a href="" class="item__button button">Подробнее</a>
                </div>
            </li>
            <li class="item popular-item__item" tabindex="-1">
                <!--Иконка для знака сердеко-->
                <svg width="22" height="20" class="item__heart">
                    <use xlink:href="#heart"></use>
                </svg>
                <!-- Контейнер доя изображения -->
                <p class="item__img">
                    <img src="img/sale1.jpg" alt="Описания товара" wid="">
                </p>
                <!-- Контейнер для заголовка товара и оценки -->
                <div class="item__title-container">
                    <h3 class="item__title">Swan</h3>
                    <small class="item__mark">3.7 <svg width="15" height="15" class="item__star">
                            <use xlink:href="#starv2"></use>
                        </svg></small>
                </div>
                <!-- Описания товара -->
                <p class="item__des">Диван идеально подходит для отдыха в залах ожидания и для дома</p>
                <!-- Контейнер для кнопки и цены -->
                <div class="item__bottom">
                    <!-- Ценв товара -->
                    <b class="item__price">250 000 сум</b>
                    <!-- Кнопка для перехода по товару -->
                    <a href="" class="item__button button">Подробнее</a>
                </div>
            </li>
            <li class="item popular-item__item" tabindex="-1">
                <!--Иконка для знака сердеко-->
                <svg width="22" height="20" class="item__heart">
                    <use xlink:href="#heart"></use>
                </svg>
                <!-- Контейнер доя изображения -->
                <p class="item__img">
                    <img src="img/sale1.jpg" alt="Описания товара" wid="">
                </p>
                <!-- Контейнер для заголовка товара и оценки -->
                <div class="item__title-container">
                    <h3 class="item__title">Swan</h3>
                    <small class="item__mark">3.7 <svg width="15" height="15" class="item__star">
                            <use xlink:href="#starv2"></use>
                        </svg></small>
                </div>
                <!-- Описания товара -->
                <p class="item__des">Диван идеально подходит для отдыха в залах ожидания и для дома</p>
                <!-- Контейнер для кнопки и цены -->
                <div class="item__bottom">
                    <!-- Ценв товара -->
                    <b class="item__price">250 000 сум</b>
                    <!-- Кнопка для перехода по товару -->
                    <a href="" class="item__button button">Подробнее</a>
                </div>
            </li>
            <li class="item popular-item__item" tabindex="-1">
                <!--Иконка для знака сердеко-->
                <svg width="22" height="20" class="item__heart">
                    <use xlink:href="#heart"></use>
                </svg>
                <!-- Контейнер доя изображения -->
                <p class="item__img">
                    <img src="img/sale1.jpg" alt="Описания товара" wid="">
                </p>
                <!-- Контейнер для заголовка товара и оценки -->
                <div class="item__title-container">
                    <h3 class="item__title">Swan</h3>
                    <small class="item__mark">3.7 <svg width="15" height="15" class="item__star">
                            <use xlink:href="#starv2"></use>
                        </svg></small>
                </div>
                <!-- Описания товара -->
                <p class="item__des">Диван идеально подходит для отдыха в залах ожидания и для дома</p>
                <!-- Контейнер для кнопки и цены -->
                <div class="item__bottom">
                    <!-- Ценв товара -->
                    <b class="item__price">250 000 сум</b>
                    <!-- Кнопка для перехода по товару -->
                    <a href="" class="item__button button">Подробнее</a>
                </div>
            </li>
        </ul>
    </section>
</main>
