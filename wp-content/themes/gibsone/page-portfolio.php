<?php

/**
 * Template Name: Portfolio
 */

?>

<?php get_header(); ?>

<div class="sec-top-page">
    <section class="banner-page" style="background-image: url('img/bg-portfoli.png');">
        <div class="ban-left">
            <h1 class="banner-page-title title-2 title_mod FreightDispProBook">Portfolio</h1>
            <div class="lin-left"><span></span></div>
            <!-- don't show on phone -->
            <div class="banner-page-bot-btn mob-none">
                <button class="bnt-def bnt-def_bigger bnt-def_while js-btn-open-modal">
                    <i>
                        <svg>
                            <use xlink:href="<?php echo get_template_directory_uri(); ?>/icons/sprite.svg#line-btn" />
                        </svg>
                    </i>
                    <span>let’s talk!</span>
                </button>
            </div>
        </div>

        <div class="banner-box">
            <div class="banner-box__title MercuryDisplayRoman">We specializes in all aspects <br />
                of commercial real estate. </div>
            <div class="lin-left"><span></span></div>
            <p class="banner-box_des FreightDispProBook">Our portfolio of listings is comprised of all types
                of assets: <br />
                industrial, retail, office, multifamily, land and hospitality</p>
        </div>
    </section>

    <!-- don't show on phone -->
    <div class="gibson-baner-top mob-none">
        <div class="FreightDispProBook gibson-baner-top_name">
            <span>GIBSON CRE </span>
            <div class="lin-left"><span></span></div>
        </div>
    </div>

    <!-- don't show on pc -->
    <div class="banner-page-bot-btn banner-page-bot-btn_mob">
        <button class="bnt-def bnt-def_bigger js-btn-open-modal bnt-def_gold">
            <i>
                <svg>
                    <use xlink:href="<?php echo get_template_directory_uri(); ?>/icons/sprite.svg#line-btn" />
                </svg>
            </i>
            <span>let’s talk!</span>
        </button>
    </div>
</div>

<section class="s-porfolio s-porfolio_page">
    <div class="port-items port-items_page">
        <a href="#" class="item-port">
            <figure style="background-image: url('img/portfolio-card-1.jpg');"></figure>
            <span class="item-port_title MercuryDisplayRegular">Rosewood Residences San Francisco</span>

            <span class="bnt-def bnt-def_middle_height btn-def_bor-white">
                <i>
                    <svg>
                        <use xlink:href="<?php echo get_template_directory_uri(); ?>/icons/sprite.svg#line-btn" />
                    </svg>
                </i>
                <span>view</span>
            </span>
        </a>

        <a href="#" class="item-port">
            <figure style="background-image: url('img/portfolio-card-2.jpg');"></figure>
            <span class="item-port_title MercuryDisplayRegular">Rosewood Residences San Francisco</span>

            <span class="bnt-def bnt-def_middle_height btn-def_bor-white">
                <i>
                    <svg>
                        <use xlink:href="<?php echo get_template_directory_uri(); ?>/icons/sprite.svg#line-btn" />
                    </svg>
                </i>
                <span>view</span>
            </span>
        </a>

        <a href="#" class="item-port">
            <figure style="background-image: url('img/portfolio-card-3.jpg');"></figure>
            <span class="item-port_title MercuryDisplayRegular">Rosewood Residences San Francisco</span>

            <span class="bnt-def bnt-def_middle_height btn-def_bor-white">
                <i>
                    <svg>
                        <use xlink:href="<?php echo get_template_directory_uri(); ?>/icons/sprite.svg#line-btn" />
                    </svg>
                </i>
                <span>view</span>
            </span>
        </a>

        <a href="#" class="item-port">
            <figure style="background-image: url('img/portfolio-card-4.jpg');"></figure>
            <span class="item-port_title MercuryDisplayRegular">Rosewood Residences San Francisco</span>

            <span class="bnt-def bnt-def_middle_height btn-def_bor-white">
                <i>
                    <svg>
                        <use xlink:href="<?php echo get_template_directory_uri(); ?>/icons/sprite.svg#line-btn" />
                    </svg>
                </i>
                <span>view</span>
            </span>
        </a>

        <a href="#" class="item-port">
            <figure style="background-image: url('img/portfolio-card-5.jpg');"></figure>
            <span class="item-port_title MercuryDisplayRegular">Rosewood Residences San Francisco</span>

            <span class="bnt-def bnt-def_middle_height btn-def_bor-white">
                <i>
                    <svg>
                        <use xlink:href="<?php echo get_template_directory_uri(); ?>/icons/sprite.svg#line-btn" />
                    </svg>
                </i>
                <span>view</span>
            </span>
        </a>

        <a href="#" class="item-port">
            <figure style="background-image: url('img/portfolio-card-6.jpg');"></figure>
            <span class="item-port_title MercuryDisplayRegular">Rosewood Residences San Francisco</span>

            <span class="bnt-def bnt-def_middle_height btn-def_bor-white">
                <i>
                    <svg>
                        <use xlink:href="<?php echo get_template_directory_uri(); ?>/icons/sprite.svg#line-btn" />
                    </svg>
                </i>
                <span>view</span>
            </span>
        </a>
    </div>
</section>

<?php
$lets_title = get_field('field_tab_lets_title', 'option');
$sub_title = get_field('field_tab_lets_sub_title', 'option');
?>

<div class="s-form">
    <div class="s-form_top">
        <div class="container">
            <div class="title-2 title_mod title_uper FreightDispProBook"><?php echo $lets_title; ?></div>
            <div class="s-form_desc">
                <p><?php echo $sub_title; ?></p>
            </div>
        </div>
        <div class="bg-s-form"></div>
    </div>

    <div class="s-gb-con-bot dop-bot-con">
        <div class="s-form-bot">
            <div class="container">
                <div class="s-form-wr">
                    <?php get_template_part('template-parts/contact-form'); ?>
                </div>
            </div>
            <div class="s-form-bot_f">
                <div class="f_inscription FreightDispProBook">GIBSON CRE</div>
                <div class="lin-left"><span></span></div>
            </div>
        </div>

        <div class="pos-block-r">
            <div class="s-imga" style="background-image: url('img/bg-image-full.jpg');"></div>
        </div>
    </div>
</div>

<?php get_footer(); ?>