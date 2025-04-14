<?php

/**
 * Template Name: Only
 */

?>

<?php get_header();

$f_p_only_bg = get_field('f_p_only_bg');
$f_p_only_title = get_field('f_p_only_title');
$f_p_only_sub_title = get_field('f_p_only_sub_title');
$f_p_only_p = get_field('f_p_only_p');
?>

<div class="sec-top-page no_bg">
    <section class="banner-page" style="background-image: url(<?php echo $f_p_only_bg['url']; ?>)">
        <div class="ban-left">
            <h1 class="banner-page-title title-2 title_mod FreightDispProBook"><?php echo $f_p_only_title; ?></h1>
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
            <div class="banner-box__title MercuryDisplayRoman"><?php echo $f_p_only_sub_title; ?></div>
            <div class="lin-left"><span></span></div>
            <p class="banner-box_des FreightDispProBook"><?php echo $f_p_only_p; ?></p>
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
        <div class="lin-left"><span></span></div>
    </div>
</div>

<?php
$f_only_what_title = get_field('f_only_what_title');
$f_only_what_description = get_field('f_only_what_description');
$f_only_what_file = get_field('f_only_what_file');
$f_only_what_img = get_field('f_only_what_img');
$f_only_what_repeater_fields = get_field('f_only_what_repeater_fields');
?>

<div class="s-makes">
    <div class="container">
        <div class="s-makes__row">
            <div class="s-makes__left">
                <h2 class="title-2 title_mod title_uper FreightDispProBook"><?php echo $f_only_what_title; ?></h2>
                <!-- don't show pc -->
                <div class="lin-left pc-none"><span></span></div>
                <div class="s-makes_des t-def-t">
                    <?php echo $f_only_what_description; ?>
                </div>
                <div class="lin-left mob-none"><span></span></div>
                <div class="s-makes_btn-wr">
                    <?php if ($f_only_what_file): ?>
                        <a href="<?php echo esc_url($f_only_what_file); ?>" class="btn-down" download>
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
            <div class="s-makes__right">
                <img src="<?php echo $f_only_what_img['url']; ?>" alt="<?php echo $f_only_what_img['alt']; ?>">
            </div>
        </div>
    </div>
</div>

<div class="bg-our-re">
    <!-- don't show on phone -->
    <div class="s-resurs mob-none">
        <div class="container">
            <div class="resur_row">
                <?php if (have_rows('f_only_what_repeater_fields')): ?>
                    <?php $index = 1; ?>
                    <?php while (have_rows('f_only_what_repeater_fields')): the_row();
                        $name = get_sub_field('name');
                        $description = get_sub_field('description');
                    ?>
                        <div class="item-res">
                            <div class="item-res_top">
                                <span class="item-res_number FreightDispProBook">
                                    <?php echo str_pad($index, 2, '0', STR_PAD_LEFT); ?>
                                </span>
                                <div class="item-res__title MercuryDisplayRegular">
                                    <?php echo esc_html($name); ?>
                                </div>
                                <i class="item-res_i">
                                    <svg>
                                        <use xlink:href="<?php echo get_template_directory_uri(); ?>/icons/sprite.svg#i-arrow-ser" />
                                    </svg>
                                    <svg>
                                        <use xlink:href="<?php echo get_template_directory_uri(); ?>/icons/sprite.svg#i-arr-ri" />
                                    </svg>
                                </i>
                            </div>
                            <div class="item-res_des">
                                <?php if ($description): ?>
                                    <p><?php echo $description; ?></p>
                                <?php endif; ?>
                            </div>
                        </div>
                        <?php $index++; ?>
                    <?php endwhile; ?>
                <?php endif; ?>

            </div>
        </div>
    </div>

    <!-- don't show om pc -->
    <div class="servises-mob">
        <div class="container">
            <?php if (have_rows('f_only_what_repeater_fields')): ?>
                <?php $index = 1; ?>
                <?php while (have_rows('f_only_what_repeater_fields')): the_row();
                    $name = get_sub_field('name');
                    $description = get_sub_field('description');
                ?>
                    <div class="item-serv-mob js-item-serv-mob">
                        <div class="item-serv-mob_top js-top-ser-mob">
                            <span class="FreightDispProBook">
                                <?php echo str_pad($index, 2, '0', STR_PAD_LEFT); ?>
                            </span>
                            <div class="item-serv-mob_title MercuryDisplayRoman">
                                <?php echo esc_html($name); ?>
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
                        <div class="item-serv-mob_bot"
                            style="overflow: hidden; height: 0; transition: height 0.3s ease;">
                            <?php if ($description): ?>
                                <p><?php echo $description; ?></p>
                            <?php endif; ?>
                        </div>
                    </div>
                    <?php $index++; ?>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div>

    <?php
    $f_only_resources_title = get_field('f_only_resources_title');
    $f_only_resources_repeater = get_field('f_only_resources_repeater');

    ?>

    <section class="s-h-res">
        <?php if (have_rows('f_only_resources_repeater')): ?>
            <?php $i = 0; ?>
            <?php while (have_rows('f_only_resources_repeater')): the_row();
                $description = get_sub_field('description');
                $image = get_sub_field('img'); // це масив, якщо return format — масив
                $img_url = is_array($image) ? $image['url'] : $image; // на випадок, якщо повертається URL
                $row_class = $i % 2 === 1 ? 'res-row res-row_reverse' : 'res-row';
            ?>
                <div class="<?php echo esc_attr($row_class); ?>">
                    <div class="res_cont">
                        <?php if ($i === 0 && !empty($f_only_resources_title)): ?>
                            <h2 class="title-2 title_mod FreightDispProBook"><?php echo esc_html($f_only_resources_title); ?></h2>
                        <?php endif; ?>
                        <div class="res_des MercuryDisplayRoman">
                            <?php echo $description; ?>
                        </div>
                    </div>
                    <div class="res_img">
                        <?php if ($img_url): ?>
                            <img src="<?php echo esc_url($img_url); ?>" alt="">
                        <?php endif; ?>
                    </div>
                </div>
                <?php $i++; ?>
            <?php endwhile; ?>
        <?php endif; ?>
    </section>
</div>

<?php
$f_only_innovation_title = get_field('f_only_innovation_title');
?>

<div class="s-innovati js-swiper-cop">
    <div class="container">
        <h2 class="title-2 title_mod FreightDispProBook"><?php echo $f_only_innovation_title; ?></h2>
    </div>
    <div class="s-innovati__wr">
        <div class="container ">
            <?php if (have_rows('f_only_innovation_repeat_fields')): ?>
                <div class="innovati_row">
                    <div class="innovati_imgs">
                        <?php $img_index = 0; ?>
                        <?php while (have_rows('f_only_innovation_repeat_fields')): the_row();
                            $image = get_sub_field('image');
                            $img_url = is_array($image) ? $image['url'] : $image;
                        ?>
                            <?php if ($img_url): ?>
                                <img
                                    class="js-img-innow <?php echo $img_index === 0 ? 'active' : ''; ?>"
                                    data-index="<?php echo esc_attr($img_index); ?>"
                                    src="<?php echo esc_url($img_url); ?>"
                                    alt="">
                            <?php endif; ?>
                            <?php $img_index++; ?>
                        <?php endwhile; ?>
                    </div>

                    <div class="innovati_slider">
                        <div class="swiper js-swipre-innov">
                            <div class="swiper-wrapper">
                                <?php while (have_rows('f_only_innovation_repeat_fields')): the_row();
                                    $title = get_sub_field('name');
                                    $description = get_sub_field('description');
                                ?>
                                    <div class="swiper-slide">
                                        <div class="innovati_title FreightDispProBook">
                                            <?php echo esc_html($title); ?>
                                        </div>
                                        <div class="innovati_des">
                                            <?php echo $description; ?>
                                        </div>
                                    </div>
                                <?php endwhile; ?>
                            </div>
                        </div>

                        <div class="custom-navigation">
                            <button class="custom-s-btn custom-prev js-custom-prev-innov">
                                <svg>
                                    <use xlink:href="<?php echo get_template_directory_uri(); ?>/icons/sprite.svg#s_left-arrow" />
                                </svg>
                            </button>
                            <div class="custom-pagination js-custom-pagination-innov"></div>
                            <button class="custom-s-btn js-custom-next-innov custom-next">
                                <svg>
                                    <use xlink:href="<?php echo get_template_directory_uri(); ?>/icons/sprite.svg#s_right-arrow" />
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
            <?php endif; ?>

        </div>
    </div>
</div>

<div class="s-innovati s-execution js-swiper-cop">
    <div class="container">
        <h2 class="title-2 title_mod FreightDispProBook"><?php echo get_field('f_only_exection_title'); ?></h2>
    </div>
    <div class="s-innovati__wr">
        <div class="container ">
            <?php if (have_rows('f_only_exection_repeat_fields')) : ?>
                <div class="innovati_row">
                    <div class="innovati_imgs">
                        <?php $img_index = 0; ?>
                        <?php while (have_rows('f_only_exection_repeat_fields')) : the_row(); ?>
                            <?php
                            $image = get_sub_field('image');
                            if ($image):
                            ?>
                                <img
                                    class="js-img-innow <?php echo ($img_index === 0) ? 'active' : ''; ?>"
                                    data-index="<?php echo esc_attr($img_index); ?>"
                                    src="<?php echo esc_url($image['url']); ?>"
                                    alt="<?php echo esc_attr($image['alt'] ?: ''); ?>" />
                            <?php endif; ?>
                            <?php $img_index++; ?>
                        <?php endwhile; ?>
                    </div>

                    <div class="innovati_slider">
                        <div class="swiper js-swipre-innov">
                            <div class="swiper-wrapper">
                                <?php $slide_index = 0; ?>
                                <?php while (have_rows('f_only_exection_repeat_fields')) : the_row(); ?>
                                    <div class="swiper-slide">
                                        <div class="innovati_title FreightDispProBook">
                                            <?php the_sub_field('name'); ?>
                                        </div>
                                        <div class="innovati_des">
                                            <?php the_sub_field('description'); ?>
                                        </div>
                                    </div>
                                    <?php $slide_index++; ?>
                                <?php endwhile; ?>
                            </div>
                        </div>

                        <div class="custom-navigation custom-navigation_blue">
                            <button class="custom-s-btn custom-prev js-custom-prev-innov">
                                <svg>
                                    <use xlink:href="<?php echo get_template_directory_uri(); ?>/icons/sprite.svg#s_left-arrow-blue" />
                                </svg>
                            </button>
                            <div class="custom-pagination js-custom-pagination-innov"></div>
                            <button class="custom-s-btn js-custom-next-innov custom-next">
                                <svg>
                                    <use xlink:href="<?php echo get_template_directory_uri(); ?>/icons/sprite.svg#s_right-arrow-blue" />
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </div>
</div>



<div class="bg-ou-big">
    <!-- don't show phone-->
    <div class="gibson-left-our mob-none">
        <div class="gibson-left-our_name FreightDispProBook">GIBSON</div>
    </div>

    <div class="social-media">
        <div class="container">
            <div class="social-media_row">
                <div class="social-media_title FreightDispProBook"><?php echo get_field('f_ser_only_socail_title'); ?></div>

                <!-- don't show phone-->
                <?php if (have_rows('f_only_socail_repeat_fields')): ?>
                    <div class="social-media_items mob-none">
                        <?php while (have_rows('f_only_socail_repeat_fields')): the_row();
                            $icon = get_sub_field('icon'); // зображення
                            $percend = get_sub_field('percend'); // процент
                            $info = get_sub_field('info'); // info text
                            $quantity = get_sub_field('quantity'); // кількість
                            $impressions = get_sub_field('impressions'); // імпресії
                        ?>
                            <div class="item-media-soc">
                                <div class="item-media-soc__icon">
                                    <?php if ($icon): ?>
                                        <img src="<?php echo esc_url($icon['url']); ?>" alt="<?php echo esc_attr($icon['alt'] ?? ''); ?>" />
                                    <?php endif; ?>
                                </div>
                                <div class="item-media-soc__wre">
                                    <div>
                                        <div class="item-media-soc__col FreightDispProBook"><?php echo esc_html($percend); ?><span>%</span></div>
                                        <div class="item-media-soc__p item-media-soc__p_m"><?php echo esc_html($info); ?></div>
                                    </div>
                                    <div>
                                        <div class="item-media-soc__col FreightDispProBook"><?php echo esc_html($quantity); ?><span>k+</span></div>
                                        <div class="item-media-soc__p"><?php echo esc_html($impressions); ?></div>
                                    </div>
                                </div>
                                <a href="#"></a>
                            </div>
                        <?php endwhile; ?>
                    </div>
                <?php endif; ?>

                <!-- don't show on pc -->
                <div class="social-media_it-mob pc-none">
                    <div class="swiper js-swipre-social-mob">
                        <?php if (have_rows('f_only_socail_repeat_fields')): ?>
                            <div class="swiper-wrapper">
                                <?php while (have_rows('f_only_socail_repeat_fields')): the_row();
                                    $icon = get_sub_field('icon'); // типу icon-sc-fb-gold
                                    $percend = get_sub_field('percend'); // процент, наприклад: 17
                                    $info = get_sub_field('info'); // Follower increace
                                    $quantity = get_sub_field('quantity'); // 209
                                    $impressions = get_sub_field('impressions'); // Impressions
                                ?>
                                    <div class="swiper-slide">
                                        <div class="item-media-soc">
                                            <div class="item-media-soc__icon">
                                                <svg>
                                                    <use xlink:href="<?php echo get_template_directory_uri(); ?>/icons/sprite.svg#<?php echo esc_attr($icon); ?>" />
                                                </svg>
                                            </div>
                                            <div class="item-media-soc__wre">
                                                <div>
                                                    <div class="item-media-soc__col FreightDispProBook">
                                                        <?php echo esc_html($percend); ?><span>%</span>
                                                    </div>
                                                    <div class="item-media-soc__p item-media-soc__p_m">
                                                        <?php echo esc_html($info); ?>
                                                    </div>
                                                </div>
                                                <div>
                                                    <div class="item-media-soc__col FreightDispProBook">
                                                        <?php echo esc_html($quantity); ?><span>k+</span>
                                                    </div>
                                                    <div class="item-media-soc__p">
                                                        <?php echo esc_html($impressions); ?>
                                                    </div>
                                                </div>
                                            </div>
                                            <a href="#"></a>
                                        </div>
                                    </div>
                                <?php endwhile; ?>
                            </div>
                        <?php endif; ?>
                    </div>

                    <div class="custom-navigation custom-navigation_blue">
                        <div class="custom-pagination js-custom-pagination-social-mob"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="gloval-serv">
        <div class="container">
            <h2 class="title-2 title_mod  FreightDispProBook"><?php echo get_field('f_ser_consul_only_title'); ?></h2>

            <!-- don't show om pc -->
            <div class="servises-mob">
                <?php if (have_rows('only_repeater')): ?>
                    <?php $counter = 1; ?>
                    <?php while (have_rows('only_repeater')): the_row();
                        $title = get_sub_field('title');
                        $text = get_sub_field('f_ser_consul_only_repeater_editor');
                        $img = get_sub_field('f_ser_consul_only_repeater_img'); // не використовується в цьому макеті, але можна додати
                    ?>
                        <div class="item-serv-mob js-item-serv-mob">
                            <div class="item-serv-mob_top js-top-ser-mob">
                                <span class="FreightDispProBook"><?php echo str_pad($counter, 2, '0', STR_PAD_LEFT); ?></span>
                                <div class="item-serv-mob_title MercuryDisplayRoman"><?php echo esc_html($title); ?></div>
                                <i class="item-serv-mob_i">
                                    <svg>
                                        <use xlink:href="<?php echo get_template_directory_uri(); ?>/icons/sprite.svg#i-arrow-ser" />
                                    </svg>
                                    <svg>
                                        <use xlink:href="<?php echo get_template_directory_uri(); ?>/icons/sprite.svg#i-arr-ri" />
                                    </svg>
                                </i>
                            </div>
                            <div class="item-serv-mob_bot"
                                style="overflow: hidden; height: 0; transition: height 0.3s ease;">
                                <p><?php echo $text; ?></p>
                            </div>
                        </div>
                        <?php $counter++; ?>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>

            <!-- don't show phone-->
            <?php if (have_rows('only_repeater')): ?>
                <div class="servises-items mob-none">
                    <div class="items-ser">
                        <?php $counter = 1; ?>
                        <?php while (have_rows('only_repeater')): the_row();
                            $title = get_sub_field('title');
                        ?>
                            <div class="item-ser js-item-ser <?php echo $counter === 1 ? 'active' : ''; ?>" data-item="<?php echo $counter; ?>">
                                <div class="item-ser_wr">
                                    <span class="FreightDispProBook"><?php echo str_pad($counter, 2, '0', STR_PAD_LEFT); ?></span>
                                    <div class="item-ser__title MercuryDisplayRoman"><?php echo esc_html($title); ?></div>
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
                            <?php $counter++; ?>
                        <?php endwhile; ?>
                    </div>

                    <div class="card-cervis">
                        <?php $counter = 1; ?>
                        <?php while (have_rows('only_repeater')): the_row();
                            $title = get_sub_field('title');
                            $text = get_sub_field('f_ser_consul_only_repeater_editor');
                            $img = get_sub_field('f_ser_consul_only_repeater_img');
                        ?>
                            <div class="card-s js-card-s <?php echo $counter === 1 ? 'active' : ''; ?>" data-item="<?php echo $counter; ?>">
                                <div class="card-s__title MercuryDisplayRegular"><?php echo esc_html($title); ?></div>
                                <div class="lin-left"><span></span></div>
                                <div class="card-s_des">
                                    <?php echo wpautop($text); ?>
                                </div>
                                <?php if ($img): ?>
                                    <div class="card-s_img">
                                        <img src="<?php echo esc_url($img['url']); ?>" alt="<?php echo esc_attr($img['alt']); ?>">
                                    </div>
                                <?php endif; ?>
                            </div>
                            <?php $counter++; ?>
                        <?php endwhile; ?>
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </section>

    <div class="s-innovati s-blobals js-swiper-cop">
        <div class="container">
            <h2 class="title-2 title_mod FreightDispProBook"><?php echo get_field('f_only_connection_title'); ?></h2>
        </div>
        <div class="s-innovati__wr">
            <div class="container ">
                <?php if (have_rows('f_only_connection_repeat_fields')): ?>
                    <div class="innovati_row">
                        <!-- Картинки -->
                        <div class="innovati_imgs">
                            <?php $i = 0; ?>
                            <?php while (have_rows('f_only_connection_repeat_fields')): the_row();
                                $image = get_sub_field('image');
                                $label = get_sub_field('name_bot_f');
                                $note = get_sub_field('name_bot_lin');
                            ?>
                                <div class="innovati_wr_img innovati_wr_img-type-<?php echo $i + 1; ?> js-img-innow <?php echo $i === 0 ? 'active' : ''; ?>" data-index="<?php echo $i; ?>">
                                    <div class="innovati_img">
                                        <?php if ($image): ?>
                                            <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>">
                                        <?php endif; ?>
                                    </div>

                                    <?php if ($label || $note): ?>
                                        <div class="sales-se">
                                            <div class="sales-se_in">
                                                <?php if ($label): ?>
                                                    <span class="sales-se_number FreightDispProBook"><?php echo esc_html($label); ?></span>
                                                <?php endif; ?>
                                                <?php if ($note): ?>
                                                    <span class="sales-se_t"><?php echo esc_html($note); ?></span>
                                                <?php endif; ?>
                                            </div>
                                            <div class="lin-left"><span></span></div>
                                        </div>
                                    <?php endif; ?>
                                </div>
                                <?php $i++; ?>
                            <?php endwhile; ?>
                        </div>

                        <!-- Слайдер -->
                        <div class="innovati_slider">
                            <div class="swiper js-swipre-innov">
                                <div class="swiper-wrapper">
                                    <?php $j = 0; ?>
                                    <?php while (have_rows('f_only_connection_repeat_fields')): the_row();
                                        $title = get_sub_field('name');
                                        $description = get_sub_field('description');
                                    ?>
                                        <div class="swiper-slide">
                                            <div class="innovati_title FreightDispProBook"><?php echo esc_html($title); ?></div>
                                            <div class="innovati_des">
                                                <?php echo wpautop($description); ?>
                                            </div>
                                        </div>
                                        <?php $j++; ?>
                                    <?php endwhile; ?>
                                </div>
                            </div>

                            <!-- Навігація -->
                            <div class="custom-navigation">
                                <button class="custom-s-btn custom-prev js-custom-prev-innov">
                                    <svg>
                                        <use xlink:href="<?php echo get_template_directory_uri(); ?>/icons/sprite.svg#s_left-arrow" />
                                    </svg>
                                </button>
                                <div class="custom-pagination js-custom-pagination-innov"></div>
                                <button class="custom-s-btn js-custom-next-innov custom-next">
                                    <svg>
                                        <use xlink:href="<?php echo get_template_directory_uri(); ?>/icons/sprite.svg#s_right-arrow" />
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>

<!-- don't show phone-->
<div class="pos-block-r mob-none">
    <div class="s-imga" style="background-image: url('<?php echo get_field('f_only_bottom_picture')['url']; ?>');"></div>
</div>

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

        <!-- don't show pc-->
        <div class="pos-block-r pc-none">
            <div class="s-imga" style="background-image: url('img/bg-image-full3.jpg');"></div>
        </div>

    </div>
</div>

<?php get_footer(); ?>