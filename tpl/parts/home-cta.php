<?php
declare(strict_types = 1);

use NatOkpe\Wp\Theme\Tranquil\Theme;

?><!-- CTA: Join Us -->
<section class="content-section cta" style="background-image: url('<?= Theme::url('assets/img/cta.jpg') ?>');">
    <div class="overlay">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-10 col-lg-9">
                    <h2 class="title">Be a Force for Positive Change</h2>
                    <p class="desc">Your involvement matters, whether it is through donations, volunteering your skills, staying informed via our newsletter, or spreading the word. Together, we can build a more peaceful and just Nigeria.</p>
                    <a class="button" href="<?= home_url() . '/contact-us' ?>">Get Involved</a>
                </div>
            </div>
        </div>
    </div>
</section>
