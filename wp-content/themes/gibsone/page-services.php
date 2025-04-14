<?php

/**
 * Template Name: Services
 */

?>

<?php get_header(); ?>

<?php
$f_p_serv_bg = get_field('f_p_serv_bg');
$f_p_serv_title = get_field('f_p_serv_title');
$f_p_serv_sub_title = get_field('f_p_serv_sub_title');
$f_p_serv_p = get_field('f_p_serv_p');
?>

<div class="sec-top-page no_bg">
    <section class="banner-page" style="background-image: url(<?php echo $f_p_serv_bg['url']; ?>);">
        <div class="ban-left">
            <h1 class="banner-page-title title-2 title_mod FreightDispProBook"><?php echo $f_p_serv_title; ?></h1>
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

        <div class="banner-box ">
            <div class="banner-box__title MercuryDisplayRoman"><?php echo $f_p_serv_sub_title; ?></div>
            <div class="lin-left"><span></span></div>
            <p class="banner-box_des FreightDispProBook"><?php echo $f_p_serv_p; ?></p>
        </div>
    </section>

    <!-- don't show on phone -->
    <div class="gibson-baner-top gibson-baner-top_gray mob-none">
        <div class="FreightDispProBook gibson-baner-top_name">
            <span>GIBSON CRE </span>
            <div class="lin-left"><span></span></div>
        </div>
    </div>

    <!-- don't show on pc -->
    <div class="banner-page-bot-btn banner-page-bot-btn_mob">
        <button class="bnt-def bnt-def_bigger bnt-def_gold js-btn-open-modal">
            <i>
                <svg>
                    <use xlink:href="<?php echo get_template_directory_uri(); ?>/icons/sprite.svg#line-btn" />
                </svg>
            </i>
            <span>let’s talk!</span>
        </button>
    </div>
</div>

<?php
$f_ser_consul_title = get_field('f_ser_consul_title');
$f_ser_consul_editor = get_field('f_ser_consul_editor');
?>

<section class="s-serv">
    <div class="container">
        <div class="title-2 title_mod FreightDispProBook"><?php echo $f_ser_consul_title; ?></div>
        <div class="t-def-t s-serv_des_top">
            <?php echo $f_ser_consul_editor; ?>
        </div>

        <!-- don't show om pc -->
        <div class="servises-mob">
            <?php if (have_rows('f_ser_consul_repeater_fields')): $i = 1; ?>
                <?php while (have_rows('f_ser_consul_repeater_fields')): the_row();

                    $title = get_sub_field('title');
                    $text = get_sub_field('f_ser_consul_repeater_editor');

                ?>
                    <div class="item-serv-mob js-item-serv-mob">
                        <div class="item-serv-mob_top js-top-ser-mob">
                            <span class="FreightDispProBook"><?php echo str_pad($i, 2, '0', STR_PAD_LEFT); ?></span>
                            <div class="item-serv-mob_title MercuryDisplayRoman">
                                <?php echo esc_html($title); ?>
                            </div>
                            <i class="item-serv-mob_i">
                                <svg>
                                    <use xlink:href="<?php echo get_template_directory_uri(); ?>/icons/sprite.svg#i-arrow-ser" />
                                </svg>
                                <svg>
                                    <use xlink:href="<?php echo get_template_directory_uri(); ?>/icons/sprite.svg#i-arr-ri" />
                                </svg>
                            </i>
                        </div>
                        <div class="item-serv-mob_bot" style="overflow: hidden; height: 0; transition: height 0.3s ease;">
                            <p><?php echo $text; ?></p>
                        </div>
                    </div>
                    <?php $i++; ?>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>

        <!-- don't show on phone -->
        <div class="servises-items  mob-none">
            <div class="items-ser">
                <?php if (have_rows('f_ser_consul_repeater_fields')): $i = 1; ?>
                    <?php while (have_rows('f_ser_consul_repeater_fields')): the_row();

                        $title = get_sub_field('title');

                    ?>
                        <div class="item-ser js-item-ser<?php echo $i === 1 ? ' active' : ''; ?>" data-item="<?php echo $i; ?>">
                            <div class="item-ser_wr">
                                <span class="FreightDispProBook"><?php echo str_pad($i, 2, '0', STR_PAD_LEFT); ?></span>
                                <div class="item-ser__title MercuryDisplayRoman">
                                    <?php echo esc_html($title); ?>
                                </div>
                                <i class="item-ser_i">
                                    <svg>
                                        <use xlink:href="<?php echo get_template_directory_uri(); ?>/icons/sprite.svg#i-arrow-ser" />
                                    </svg>
                                    <svg>
                                        <use xlink:href="<?php echo get_template_directory_uri(); ?>/icons/sprite.svg#i-arr-ri" />
                                    </svg>
                                </i>
                            </div>
                        </div>
                        <?php $i++; ?>
                    <?php endwhile; ?>
                <?php endif; ?>

            </div>
            <div class="card-cervis">
                <?php if (have_rows('f_ser_consul_repeater_fields')): $i = 1; ?>
                    <?php while (have_rows('f_ser_consul_repeater_fields')): the_row();

                        $title = get_sub_field('title');
                        $text = get_sub_field('f_ser_consul_repeater_editor');
                        $image = get_sub_field('f_ser_consul_repeater_im');
                        $image_url = is_array($image) ? $image['url'] : '';

                    ?>
                        <div class="card-s js-card-s<?php echo $i === 1 ? ' active' : ''; ?>" data-item="<?php echo $i; ?>">
                            <div class="card-s__title MercuryDisplayRegular"><?php echo esc_html($title); ?></div>
                            <div class="lin-left"><span></span></div>
                            <div class="card-s_des">
                                <?php if ($text): ?>
                                    <p><?php echo $text; ?></p>
                                <?php endif; ?>
                            </div>
                            <?php if ($image_url): ?>
                                <div class="card-s_img">
                                    <img src="<?php echo esc_url($image_url); ?>" alt="img">
                                </div>
                            <?php endif; ?>
                        </div>
                        <?php $i++; ?>
                    <?php endwhile; ?>
                <?php endif; ?>

            </div>
        </div>

        <?php
        $f_ser_title = get_field('f_ser_title');
        $f_ser_market_editor = get_field('f_ser_market_editor');
        $f_ser_market_file = get_field('f_ser_market_file');
        ?>

        <div class="sers-market">
            <div class="title-2 title_mod FreightDispProBook"><?php echo $f_ser_title; ?></div>
            <!-- don't show on pc -->
            <div class="lin-left mob-line-sers"><span></span></div>
            <div class="sers-market_wr">
                <div class="sers-left">
                    <!-- don't show on phone -->
                    <div class="lin-left mob-none"><span></span></div>
                    <div class="sers-btn-wr">
                        <?php
                        $pdf_url = get_field('f_ser_market_file');
                        if ($pdf_url):
                        ?>
                            <a href="<?php echo esc_url($pdf_url); ?>" class="btn-down" download>
                                <i>
                                    <svg>
                                        <use xlink:href="<?php echo get_template_directory_uri(); ?>/icons/sprite.svg#icon-download" />
                                    </svg>
                                </i>
                                <span>download pdf</span>
                            </a>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="sers-right t-def-t">
                    <?php echo $f_ser_market_editor; ?>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
$lets_title = get_field('field_tab_lets_title', 'option');
$sub_title = get_field('field_tab_lets_sub_title', 'option');
$f_serv_bottom_picture = get_field('f_serv_bottom_picture');
?>

<div class="s-form s-form_no_pad">
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
            <div class="s-imga" style="background-image: url(<?php echo $f_serv_bottom_picture['url']; ?>);"></div>
        </div>
    </div>
</div>

<?php get_footer(); ?>