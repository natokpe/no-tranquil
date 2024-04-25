<?php
/**
 * Template Name: Members
 * 
 * Members
 * 
 * @package natokpe
 * @subpackage Ecjp
 * @since Ecjp 0.0.0
 */

declare(strict_types = 1);

use NatOkpe\Wp\Theme\Ecjp\Theme;

get_header(); ?>
<div class="content-frame">
    <header class="content-frame-header pt-100">
    <?php get_template_part('tpl/parts/navbar'); ?>

        <div class="container mt-40">
            <div class="row">
                <div class="col-lg-9 col-xl-8">
                    <h1 style="font-size: 28px;" class="page-heading my-0"><?= get_the_title() ?></h1>
                </div>
            </div>
        </div>

    </header>

    <div class="content-frame-body mt-50 mb-80">
        <div class="container">
             <div class="row">
                    <div class="col-12">
                        <h2 class="section-sub-heading">Meet Members of the Board</h2>
                    </div>

                    <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3">
                        <div class="card-staff mb-30">
                            <div class="card-staff-image">
                                <img style="object-position: top center" src="<?= Theme::url('assets/img/members/bishop.jpg') ?>" alt="Member" />
                            </div>

                            <div class="card-staff-body">
                                <span class="card-staff-title">His Lordship, Most Rev. Dr.</span>
                                <h3 class="card-staff-name">N. Nathan Inyom</h3>

                                <p class="card-staff-role">Executive Director / Chairman</p>

                                <nav class="card-staff-links no-select">
                                    <ul>
                                        <li><a data-tippy-content="Facebook" href="#!"><i class="fa-brands fa-facebook-f"></i></a></li>
                                        <li><a data-tippy-content="X" href="#!"><i class="fa-brands fa-x-twitter"></i></a></li>
                                        <li><a data-tippy-content="LinkedIn" href="#!"><i class="fa-brands fa-linkedin-in"></i></a></li>
                                        <li><a data-tippy-content="WhatsApp" href="https://api.whatsapp.com/send?phone=2347018573690&text=Hi%2C%20I%20found%20your%20phone%20number%20on%20ECJP%27s%20website.%20I%20would%20like%20to%20know%20more%20about%20ECJP.%20Thank%20you."><i class="fa-brands fa-whatsapp"></i></a></li>
                                        <li><a data-tippy-content="Email" href="mailto:bishopnninyom@gmail.com"><i class="fa-solid fa-envelope"></i></a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3">
                        <div class="card-staff mb-30">
                            <div class="card-staff-image">
                                <img style="object-position: top center" src="<?= Theme::url('assets/img/members/grace-shaahu.jpg') ?>" alt="Member" />
                            </div>

                            <div class="card-staff-body">
                                <span class="card-staff-title">Chief</span>
                                <h3 class="card-staff-name">GRACE SHAAHU</h3>

                                <p class="card-staff-role">Member</p>

                                <nav class="card-staff-links no-select">
                                    <ul>
                                        <li><a data-tippy-content="Facebook" href="#!"><i class="fa-brands fa-facebook-f"></i></a></li>
                                        <li><a data-tippy-content="X" href="#!"><i class="fa-brands fa-x-twitter"></i></a></li>
                                        <li><a data-tippy-content="LinkedIn" href="#!"><i class="fa-brands fa-linkedin-in"></i></a></li>
                                        <li><a data-tippy-content="WhatsApp" href="https://api.whatsapp.com/send?phone=2348034509947&text=Hi%2C%20I%20found%20your%20phone%20number%20on%20ECJP%27s%20website.%20I%20would%20like%20to%20know%20more%20about%20ECJP.%20Thank%20you."><i class="fa-brands fa-whatsapp"></i></a></li>
                                        <li><a data-tippy-content="Email" href="mailto:ghajshaahu@gmail.com"><i class="fa-solid fa-envelope"></i></a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3">
                        <div class="card-staff mb-30">
                            <div class="card-staff-image">
                                <img style="object-position: top center" src="<?= Theme::url('assets/img/members/elizabeth-luga.jpg') ?>" alt="Member" />
                            </div>

                            <div class="card-staff-body">
                                <span class="card-staff-title">Lady</span>
                                <h3 class="card-staff-name">ELIZABETH N. LUGA</h3>

                                <p class="card-staff-role">Member</p>

                                <nav class="card-staff-links no-select">
                                    <ul>
                                        <li><a data-tippy-content="Facebook" href="#!"><i class="fa-brands fa-facebook-f"></i></a></li>
                                        <li><a data-tippy-content="X" href="#!"><i class="fa-brands fa-x-twitter"></i></a></li>
                                        <li><a data-tippy-content="LinkedIn" href="#!"><i class="fa-brands fa-linkedin-in"></i></a></li>
                                        <li><a data-tippy-content="WhatsApp" href="https://api.whatsapp.com/send?phone=2347032198296&text=Hi%2C%20I%20found%20your%20phone%20number%20on%20ECJP%27s%20website.%20I%20would%20like%20to%20know%20more%20about%20ECJP.%20Thank%20you."><i class="fa-brands fa-whatsapp"></i></a></li>
                                        <li><a data-tippy-content="Email" href="mailto:ladyenluga1944@gmail.com"><i class="fa-solid fa-envelope"></i></a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3">
                        <div class="card-staff mb-30">
                            <div class="card-staff-image">
                                <img style="object-position: top center" src="<?= Theme::url('assets/img/members/david-iornem.jpg') ?>" alt="Member" />
                            </div>

                            <div class="card-staff-body">
                                <span class="card-staff-title">Prof. Sen.</span>
                                <h3 class="card-staff-name">DAVID IORNEM</h3>

                                <p class="card-staff-role">Member</p>

                                <nav class="card-staff-links no-select">
                                    <ul>
                                        <li><a data-tippy-content="Facebook" href="#!"><i class="fa-brands fa-facebook-f"></i></a></li>
                                        <li><a data-tippy-content="X" href="#!"><i class="fa-brands fa-x-twitter"></i></a></li>
                                        <li><a data-tippy-content="LinkedIn" href="#!"><i class="fa-brands fa-linkedin-in"></i></a></li>
                                        <li><a data-tippy-content="WhatsApp" href="#!"><i class="fa-brands fa-whatsapp"></i></a></li>
                                        <li><a data-tippy-content="Email" href="mailto:openlearning3000yahoo.com"><i class="fa-solid fa-envelope"></i></a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3">
                        <div class="card-staff mb-30">
                            <div class="card-staff-image">
                                <img style="object-position: top center" src="<?= Theme::url('assets/img/members/joey-agor.jpg') ?>" alt="Member" />
                            </div>

                            <div class="card-staff-body">
                                <span class="card-staff-title">Prof. Barr.</span>
                                <h3 class="card-staff-name">JOEY T. AGOR</h3>

                                <p class="card-staff-role">SECRETARY</p>

                                <nav class="card-staff-links no-select">
                                    <ul>
                                        <li><a data-tippy-content="Facebook" href="#!"><i class="fa-brands fa-facebook-f"></i></a></li>
                                        <li><a data-tippy-content="X" href="#!"><i class="fa-brands fa-x-twitter"></i></a></li>
                                        <li><a data-tippy-content="LinkedIn" href="#!"><i class="fa-brands fa-linkedin-in"></i></a></li>
                                        <li><a data-tippy-content="WhatsApp" href="#!"><i class="fa-brands fa-whatsapp"></i></a></li>
                                        <li><a data-tippy-content="Email" href="mailto:agorjt2012@gmail.com"><i class="fa-solid fa-envelope"></i></a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3">
                        <div class="card-staff mb-30">
                            <div class="card-staff-image">
                                <img style="object-position: top center" src="<?= Theme::url('assets/img/members/helen-tetegh.jpg') ?>" alt="Member" />
                            </div>

                            <div class="card-staff-body">
                                <span class="card-staff-title">Dr. Mrs.</span>
                                <h3 class="card-staff-name">HELEN TEGH TEGH </h3>

                                <p class="card-staff-role">Member</p>

                                <nav class="card-staff-links no-select">
                                    <ul>
                                        <li><a data-tippy-content="Facebook" href="#!"><i class="fa-brands fa-facebook-f"></i></a></li>
                                        <li><a data-tippy-content="X" href="#!"><i class="fa-brands fa-x-twitter"></i></a></li>
                                        <li><a data-tippy-content="LinkedIn" href="#!"><i class="fa-brands fa-linkedin-in"></i></a></li>
                                        <li><a data-tippy-content="WhatsApp" href="https://api.whatsapp.com/send?phone=2347037724378&text=Hi%2C%20I%20found%20your%20phone%20number%20on%20ECJP%27s%20website.%20I%20would%20like%20to%20know%20more%20about%20ECJP.%20Thank%20you."><i class="fa-brands fa-whatsapp"></i></a></li>
                                        <li><a data-tippy-content="Email" href="mailto:seneseva@gmail.com"><i class="fa-solid fa-envelope"></i></a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>


                    <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3">
                        <div class="card-staff mb-30">
                            <div class="card-staff-image">
                                <img style="object-position: top center" src="<?= Theme::url('assets/img/members/nathaniel-awuapila.jpg') ?>" alt="Member" />
                            </div>

                            <div class="card-staff-body">
                                <span class="card-staff-title">Mr.</span>
                                <h3 class="card-staff-name">NATHANIEL MSEN AWUAPILA</h3>

                                <p class="card-staff-role">Member</p>

                                <nav class="card-staff-links no-select">
                                    <ul>
                                        <li><a data-tippy-content="Facebook" href="#!"><i class="fa-brands fa-facebook-f"></i></a></li>
                                        <li><a data-tippy-content="X" href="#!"><i class="fa-brands fa-x-twitter"></i></a></li>
                                        <li><a data-tippy-content="LinkedIn" href="#!"><i class="fa-brands fa-linkedin-in"></i></a></li>
                                        <li><a data-tippy-content="WhatsApp" href="https://api.whatsapp.com/send?phone=2347037724378&text=Hi%2C%20I%20found%20your%20phone%20number%20on%20ECJP%27s%20website.%20I%20would%20like%20to%20know%20more%20about%20ECJP.%20Thank%20you."><i class="fa-brands fa-whatsapp"></i></a></li>
                                        <li><a data-tippy-content="Email" href="mailto:awuapila71@gmail.com"><i class="fa-solid fa-envelope"></i></a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3">
                        <div class="card-staff mb-30">
                            <div class="card-staff-image">
                                <img style="object-position: top center" src="<?= Theme::url('assets/img/members/joseph-awase.jpg') ?>" alt="Member" />
                            </div>

                            <div class="card-staff-body">
                                <span class="card-staff-title">Barr.</span>
                                <h3 class="card-staff-name">JOSEPH AWASE</h3>

                                <p class="card-staff-role">Member</p>

                                <nav class="card-staff-links no-select">
                                    <ul>
                                        <li><a data-tippy-content="Facebook" href="#!"><i class="fa-brands fa-facebook-f"></i></a></li>
                                        <li><a data-tippy-content="X" href="#!"><i class="fa-brands fa-x-twitter"></i></a></li>
                                        <li><a data-tippy-content="LinkedIn" href="#!"><i class="fa-brands fa-linkedin-in"></i></a></li>
                                        <li><a data-tippy-content="WhatsApp" href="https://api.whatsapp.com/send?phone=2348168293979&text=Hi%2C%20I%20found%20your%20phone%20number%20on%20ECJP%27s%20website.%20I%20would%20like%20to%20know%20more%20about%20ECJP.%20Thank%20you."><i class="fa-brands fa-whatsapp"></i></a></li>
                                        <li><a data-tippy-content="Email" href="mailto:aondoakurajoseph17@gmail.com"><i class="fa-solid fa-envelope"></i></a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>

                    <div class="col-12">
                        <h2 class="mt-70 section-sub-heading">Meet the Staff Members</h2>
                    </div>

                    <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3">
                        <div class="card-staff mb-30">
                            <div class="card-staff-image">
                                <img style="object-position: top center" src="<?= Theme::url('assets/img/members/tk-orshio.jpg') ?>" alt="Member" />
                            </div>

                            <div class="card-staff-body">
                                <span class="card-staff-title"></span>
                                <h3 class="card-staff-name">TK ORSHIO</h3>

                                <p class="card-staff-role">Program Manager</p>

                                <nav class="card-staff-links no-select">
                                    <ul>
                                        <li><a data-tippy-content="Facebook" href="#!"><i class="fa-brands fa-facebook-f"></i></a></li>
                                        <li><a data-tippy-content="X" href="#!"><i class="fa-brands fa-x-twitter"></i></a></li>
                                        <li><a data-tippy-content="LinkedIn" href="#!"><i class="fa-brands fa-linkedin-in"></i></a></li>
                                        <li><a data-tippy-content="WhatsApp" href="https://api.whatsapp.com/send?phone=2348038010011&text=Hi%2C%20I%20found%20your%20phone%20number%20on%20ECJP%27s%20website.%20I%20would%20like%20to%20know%20more%20about%20ECJP.%20Thank%20you."><i class="fa-brands fa-whatsapp"></i></a></li>
                                        <li><a data-tippy-content="Email" href="#!"><i class="fa-solid fa-envelope"></i></a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3">
                        <div class="card-staff mb-30">
                            <div class="card-staff-image">
                                <img style="object-position: top center" src="<?= Theme::url('assets/img/members/iortyer-daniel.jpg') ?>" alt="Member" />
                            </div>

                            <div class="card-staff-body">
                                <span class="card-staff-title"></span>
                                <h3 class="card-staff-name">IORTYER DANIEL</h3>

                                <p class="card-staff-role" data-tippy-content="Program Officer Income Generation Activity (IGA)">Program Officer (IGA)</p>

                                <nav class="card-staff-links no-select">
                                    <ul>
                                        <li><a data-tippy-content="Facebook" href="#!"><i class="fa-brands fa-facebook-f"></i></a></li>
                                        <li><a data-tippy-content="X" href="#!"><i class="fa-brands fa-x-twitter"></i></a></li>
                                        <li><a data-tippy-content="LinkedIn" href="#!"><i class="fa-brands fa-linkedin-in"></i></a></li>
                                        <li><a data-tippy-content="WhatsApp" href="https://api.whatsapp.com/send?phone=2347034935648&text=Hi%2C%20I%20found%20your%20phone%20number%20on%20ECJP%27s%20website.%20I%20would%20like%20to%20know%20more%20about%20ECJP.%20Thank%20you."><i class="fa-brands fa-whatsapp"></i></a></li>
                                        <li><a data-tippy-content="Email" href="#!"><i class="fa-solid fa-envelope"></i></a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3">
                        <div class="card-staff mb-30">
                            <div class="card-staff-image">
                                <img style="object-position: top center" src="<?= Theme::url('assets/img/members/edward-iortyer.jpg') ?>" alt="Member" />
                            </div>

                            <div class="card-staff-body">
                                <span class="card-staff-title"></span>
                                <h3 class="card-staff-name">EDWARD IORTYER</h3>

                                <p class="card-staff-role" data-tippy-content="Program Officer (HIV/AIDS)">Program Officer (HIV/AIDS)</p>

                                <nav class="card-staff-links no-select">
                                    <ul>
                                        <li><a data-tippy-content="Facebook" href="#!"><i class="fa-brands fa-facebook-f"></i></a></li>
                                        <li><a data-tippy-content="X" href="#!"><i class="fa-brands fa-x-twitter"></i></a></li>
                                        <li><a data-tippy-content="LinkedIn" href="#!"><i class="fa-brands fa-linkedin-in"></i></a></li>
                                        <li><a data-tippy-content="WhatsApp" href="https://api.whatsapp.com/send?phone=2348098162554&text=Hi%2C%20I%20found%20your%20phone%20number%20on%20ECJP%27s%20website.%20I%20would%20like%20to%20know%20more%20about%20ECJP.%20Thank%20you."><i class="fa-brands fa-whatsapp"></i></a></li>
                                        <li><a data-tippy-content="Email" href="#!"><i class="fa-solid fa-envelope"></i></a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3">
                        <div class="card-staff mb-30">
                            <div class="card-staff-image">
                                <img style="object-position: top center" src="<?= Theme::url('assets/img/members/buluku-terver.jpg') ?>" alt="Member" />
                            </div>

                            <div class="card-staff-body">
                                <span class="card-staff-title"></span>
                                <h3 class="card-staff-name">BULUKU TERVER</h3>

                                <p class="card-staff-role" data-tippy-content="Program officer Village Savings Loans Association (VSLA)">Program officer (VSLA)</p>

                                <nav class="card-staff-links no-select">
                                    <ul>
                                        <li><a data-tippy-content="Facebook" href="#!"><i class="fa-brands fa-facebook-f"></i></a></li>
                                        <li><a data-tippy-content="X" href="#!"><i class="fa-brands fa-x-twitter"></i></a></li>
                                        <li><a data-tippy-content="LinkedIn" href="#!"><i class="fa-brands fa-linkedin-in"></i></a></li>
                                        <li><a data-tippy-content="WhatsApp" href="https://api.whatsapp.com/send?phone=2348062068760&text=Hi%2C%20I%20found%20your%20phone%20number%20on%20ECJP%27s%20website.%20I%20would%20like%20to%20know%20more%20about%20ECJP.%20Thank%20you."><i class="fa-brands fa-whatsapp"></i></a></li>
                                        <li><a data-tippy-content="Email" href="#!"><i class="fa-solid fa-envelope"></i></a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>



                    <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3">
                        <div class="card-staff mb-30">
                            <div class="card-staff-image">
                                <img style="object-position: top center" src="<?= Theme::url('assets/img/members/jessica-ianna.jpg') ?>" alt="Member" />
                            </div>

                            <div class="card-staff-body">
                                <span class="card-staff-title"></span>
                                <h3 class="card-staff-name">JESSICA IANNA</h3>

                                <p class="card-staff-role">Accountant</p>

                                <nav class="card-staff-links no-select">
                                    <ul>
                                        <li><a data-tippy-content="Facebook" href="#!"><i class="fa-brands fa-facebook-f"></i></a></li>
                                        <li><a data-tippy-content="X" href="#!"><i class="fa-brands fa-x-twitter"></i></a></li>
                                        <li><a data-tippy-content="LinkedIn" href="#!"><i class="fa-brands fa-linkedin-in"></i></a></li>
                                        <li><a data-tippy-content="WhatsApp" href="https://api.whatsapp.com/send?phone=2347030225405&text=Hi%2C%20I%20found%20your%20phone%20number%20on%20ECJP%27s%20website.%20I%20would%20like%20to%20know%20more%20about%20ECJP.%20Thank%20you."><i class="fa-brands fa-whatsapp"></i></a></li>
                                        <li><a data-tippy-content="Email" href="#!"><i class="fa-solid fa-envelope"></i></a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3">
                        <div class="card-staff mb-30">
                            <div class="card-staff-image">
                                <img style="object-position: top center" src="<?= Theme::url('assets/img/members/kuha-benjamin.jpg') ?>" alt="Member" />
                            </div>

                            <div class="card-staff-body">
                                <span class="card-staff-title"></span>
                                <h3 class="card-staff-name">KUHA BENJAMIN T.</h3>

                                <p class="card-staff-role">M&E Officer</p>

                                <nav class="card-staff-links no-select">
                                    <ul>
                                        <li><a data-tippy-content="Facebook" href="#!"><i class="fa-brands fa-facebook-f"></i></a></li>
                                        <li><a data-tippy-content="X" href="#!"><i class="fa-brands fa-x-twitter"></i></a></li>
                                        <li><a data-tippy-content="LinkedIn" href="#!"><i class="fa-brands fa-linkedin-in"></i></a></li>
                                        <li><a data-tippy-content="WhatsApp" href="https://api.whatsapp.com/send?phone=2347063771222&text=Hi%2C%20I%20found%20your%20phone%20number%20on%20ECJP%27s%20website.%20I%20would%20like%20to%20know%20more%20about%20ECJP.%20Thank%20you."><i class="fa-brands fa-whatsapp"></i></a></li>
                                        <li><a data-tippy-content="Email" href="#!"><i class="fa-solid fa-envelope"></i></a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3">
                        <div class="card-staff mb-30">
                            <div class="card-staff-image">
                                <img style="object-position: top center" src="<?= Theme::url('assets/img/members/yaji-terngu.jpg') ?>" alt="Member" />
                            </div>

                            <div class="card-staff-body">
                                <span class="card-staff-title"></span>
                                <h3 class="card-staff-name">YAJI TERNGU</h3>

                                <p class="card-staff-role">Program Officer Justice Peace & Gender</p>

                                <nav class="card-staff-links no-select">
                                    <ul>
                                        <li><a data-tippy-content="Facebook" href="#!"><i class="fa-brands fa-facebook-f"></i></a></li>
                                        <li><a data-tippy-content="X" href="#!"><i class="fa-brands fa-x-twitter"></i></a></li>
                                        <li><a data-tippy-content="LinkedIn" href="#!"><i class="fa-brands fa-linkedin-in"></i></a></li>
                                        <li><a data-tippy-content="WhatsApp" href="https://api.whatsapp.com/send?phone=2348166616895&text=Hi%2C%20I%20found%20your%20phone%20number%20on%20ECJP%27s%20website.%20I%20would%20like%20to%20know%20more%20about%20ECJP.%20Thank%20you."><i class="fa-brands fa-whatsapp"></i></a></li>
                                        <li><a data-tippy-content="Email" href="#!"><i class="fa-solid fa-envelope"></i></a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3">
                        <div class="card-staff mb-30">
                            <div class="card-staff-image">
                                <img style="object-position: top center" src="<?= Theme::url('assets/img/members/tsehe-grace.jpg') ?>" alt="Member" />
                            </div>

                            <div class="card-staff-body">
                                <span class="card-staff-title"></span>
                                <h3 class="card-staff-name">TSEHE GRACE</h3>

                                <p class="card-staff-role">Admin. Asst.</p>

                                <nav class="card-staff-links no-select">
                                    <ul>
                                        <li><a data-tippy-content="Facebook" href="#!"><i class="fa-brands fa-facebook-f"></i></a></li>
                                        <li><a data-tippy-content="X" href="#!"><i class="fa-brands fa-x-twitter"></i></a></li>
                                        <li><a data-tippy-content="LinkedIn" href="#!"><i class="fa-brands fa-linkedin-in"></i></a></li>
                                        <li><a data-tippy-content="WhatsApp" href="https://api.whatsapp.com/send?phone=2348036177476&text=Hi%2C%20I%20found%20your%20phone%20number%20on%20ECJP%27s%20website.%20I%20would%20like%20to%20know%20more%20about%20ECJP.%20Thank%20you."><i class="fa-brands fa-whatsapp"></i></a></li>
                                        <li><a data-tippy-content="Email" href="#!"><i class="fa-solid fa-envelope"></i></a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
                    
            </div>
        </div>
    </div>

    <footer class="content-frame-footer">
        <?php get_template_part('tpl/parts/footer'); ?>
    </footer>
</div>
<?php
get_footer();

get_footer();
