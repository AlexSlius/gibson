<?php

/**
 * Template Name: Portfolio
 */

?>

<?php get_header(); ?>

<?php
$bg_image = get_field('f_p_port_bg');
$f_p_port_title = get_field('f_p_port_title');
$f_p_port_sub_title = get_field('f_p_port_sub_title');
$f_p_port_p = get_field('f_p_port_p');
$f_p_port_bot_picture = get_field('f_p_port_bot_picture');
?>

<div class="sec-top-page">
    <section class="banner-page" style="background-image: url('<?php echo $bg_image['url']; ?>');">
        <div class="ban-left">
            <h1 class="banner-page-title title-2 title_mod FreightDispProBook"><?php echo $f_p_port_title; ?></h1>
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
            <div class="banner-box__title MercuryDisplayRoman"><?php echo $f_p_port_sub_title; ?></div>
            <div class="lin-left"><span></span></div>
            <p class="banner-box_des FreightDispProBook"><?php echo $f_p_port_p; ?></p>
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
        <?php
        $portfolio_query = new WP_Query([
            'post_type' => 'portfolio',
            'posts_per_page' => -1,
        ]);

        if ($portfolio_query->have_posts()) :
            while ($portfolio_query->have_posts()) : $portfolio_query->the_post();

                $name = get_field('f_portfolio_name');
                $image = get_field('f_portfolio_img');
                $link = get_field('f_portfolio_link');

                $link = $link ?: '#';
                $image_url = is_array($image) ? $image['url'] : '';
                $title = $name ?: get_the_title();
        ?>
                <a href="<?php echo esc_url($link); ?>" class="item-port">
                    <?php if ($image_url): ?>
                        <figure style="background-image: url('<?php echo esc_url($image_url); ?>');"></figure>
                    <?php endif; ?>

                    <span class="item-port_title MercuryDisplayRegular"><?php echo esc_html($title); ?></span>

                    <span class="bnt-def bnt-def_middle_height btn-def_bor-white">
                        <i>
                            <svg>
                                <use xlink:href="<?php echo get_template_directory_uri(); ?>/icons/sprite.svg#line-btn" />
                            </svg>
                        </i>
                        <span>view</span>
                    </span>
                </a>
        <?php
            endwhile;
            wp_reset_postdata();
        endif;
        ?>
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
            <div class="s-imga" style="background-image: url('<?php echo $f_p_port_bot_picture['url']; ?>');"></div>
        </div>
    </div>
</div>

<?php get_footer(); ?>