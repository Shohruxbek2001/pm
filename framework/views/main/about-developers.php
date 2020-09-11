<?php

/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>
<section class="our-team-area section-padding-80-50" id="team">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-heading text-center wow fadeInUp" data-wow-delay="100ms">
                    <h2>Our Team</h2>
                </div>
            </div>
        </div>

        <div class="row justify-content-center">
            <!-- Team Member Area -->
            <div class="col-md-6 col-xl-3">
                <div class="team-content-area text-center mb-30 wow fadeInUp" data-wow-delay="300ms">
                    <div class="member-thumb">
                        <img src="<?php echo Yii::$app->request->baseUrl; ?>/uploads/work/Shohrux.jpg" alt="">
                    </div>
                    <h5>Shohrux <br> Babayev</h5>
                    <span>Full-Stack Developer & SEO manager</span>
                    <div class="member-social-info">
                        <a href="https://www.facebook.com/profile.php?id=100022319020538"><i style="font-size: 20px"
                                                                                             class="icon-facebook"></i></a>
                        <a href="https://gitlab.com/Shohruxbek"><i style="font-size: 20px" class="icon-gitlab"></i></a>
                        <a href="http://t.me/babayevshohruxbek"><i style="font-size: 20px"
                                                                   class="icon-telegram"></i></a>
                    </div>
                </div>
            </div>


            <!-- Team Member Area -->
            <div class="col-md-6 col-xl-3">
                <div class="team-content-area text-center mb-30 wow fadeInUp" data-wow-delay="100ms">
                    <div class="member-thumb">
                        <img src="<?php echo Yii::$app->request->baseUrl; ?>/uploads/work/ozim.jpg" alt="">
                    </div>
                    <h5>Jaloladdin<br> Ro'zmetov</h5>
                    <span>Php developer</span>
                    <div class="member-social-info">
                        <a href="https://www.facebook.com/jaloladdin.rozmetov.5"><i style="font-size: 20px"
                                                                                   class="fa fa-facebook"></i></a>
                        <a href="https://gitlab.com/jaloladdintrash"></a>
                        <a href="http://t.me/MurDavron"><i style="font-size: 20px" class="icon-telegram"></i></a>
                    </div>
                </div>
            </div>
            <!-- Team Member Area -->
            <div class="col-md-6 col-xl-3">
                <div class="team-content-area text-center mb-30 wow fadeInUp" data-wow-delay="500ms">
                    <div class="member-thumb">
                        <img src="img/bg-img/og`abek.jpg" alt="">
                    </div>
                    <h5>Og'abek <br> Shomurotov</h5>
                    <span>UI Designer</span>
                    <div class="member-social-info">
                        <a href="https://www.facebook.com/rasmus.lerdorf.165"><i style="font-size: 20px"
                                                                                 class="icon-facebook"></i></a>
                        <a href="https://gitlab.com/Arash4567"><i style="font-size: 20px" class="icon-gitlab"></i></a>
                        <a href="http://t.me/fullstackmaster007"><i style="font-size: 20px"
                                                                    class="icon-telegram"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>