<?php
declare(strict_types = 1);

use NatOkpe\Wp\Theme\Tranquil\Theme;

?><section class="content-banner content-banner-hero no-select">
    <div class="swiper mySwiper">
        <div class="swiper-wrapper">
            <div class="swiper-slide content-banner-hero-item">
                <div class="image" style="background-image: url(<?= Theme::url('assets/img/hero.jpg') ?>)">
                    <div class="overlay">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-12 col-md-10 col-lg-8 col-xl-7">
                                    <div class="content">
                                        <h1>Join Our Journey for Justice and Peace</h1>
                                        <p>We are dedicated to empowering communities, fostering unity and creating a foundation for lasting peace.</p>
                                        <div class="actions">
                                            <a class="button" href="<?= home_url() . '/about-us' ?>">Discover Us</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="swiper-slide content-banner-hero-item">
                <div class="image" style="background-image: url(<?= Theme::url('assets/img/hero2.jpg') ?>)">
                    <div class="overlay">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-12 col-md-10 col-lg-8 col-xl-7">
                                    <div class="content">
                                        <h1>We Transform Lives Through Care and Compassion</h1>
                                        <p>We extend care and compassion to those affected by HIV/AIDS, offering not only medical support but also a beacon of hope.</p>
                                        <div class="actions">
                                            <a class="button" href="<?= home_url() . '/about-us' ?>">Learn More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
        <!-- <div class="swiper-pagination"></div> -->
    </div>
</section>

