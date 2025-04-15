<?php get_header(); ?>

<?php
$bg_image = get_field('f_home_banner_gb');
$video_mp4 = get_field('f_home_banner_video_mp4');
$video_webm = get_field('f_home_banner_video_2');

$f_home_banner_title = get_field('f_home_banner_title');
$f_home_banner_sub_title = get_field('f_home_banner_sub_title');
$f_home_banner_p_1 = get_field('f_home_banner_p_1');
$f_home_banner_p_2 = get_field('f_home_banner_p_2');
?>

<section class="main-baner" style="background-image: url('<?php echo $bg_image['url']; ?>');">
    <?php if ($video_mp4 || $video_webm): ?>
        <video autoplay="" muted="" loop="" playsinline="" data-wf-ignore="true" data-object-fit="cover">
            <?php if ($video_mp4): ?>
                <source src="<?php echo esc_url($video_mp4); ?>" type="video/mp4">
            <?php endif; ?>
            <?php if ($video_webm): ?>
                <source src="<?php echo esc_url($video_webm); ?>" type="video/webm">
            <?php endif; ?>
        </video>
    <?php endif; ?>

    <div class="main-baner_top">
        <div class="main-baner_top_wr_title">
            <div class="main-baner_top_p">
                <h1 class="main-title FreightDispProBook"><?php echo $f_home_banner_title ?></h1>
            </div>
            <i class="m-lin-top"></i>
        </div>
        <div class="main-baner_top_p">
            <p class="sub-main-title FreightDispProBook"><?php echo $f_home_banner_sub_title ?></p>
        </div>
    </div>

    <div class="main-baner_bot">
        <div class="main-baner_bot_left FreightDispProBook">
            <div><?php echo $f_home_banner_p_1 ?></div>
            <div><?php echo $f_home_banner_p_2 ?></div>
        </div>

        <div class="main-baner_bot_right">

            <button class="bnt-def bnt-def_bigger bnt-def_while js-btn-open-modal">
                <i>
                    <svg>
                        <use xlink:href="<?php echo get_template_directory_uri(); ?>/icons/sprite.svg#line-btn" />
                    </svg>
                </i>
                <span>let’s talk!</span>
            </button>
        </div>

        <i class="m-lin-bot"></i>
    </div>
</section>

<?php
$f_home_welcome_title = get_field('f_home_welcome_title');
$f_home_welcome_editor = get_field('f_home_welcome_editor');
$f_home_welcome_link = get_field('f_home_welcome_link');
?>

<div class="bg-section-ab">
    <section class="s-welcome">
        <div class="container">
            <h2 class="title-2 title_mod FreightDispProBook"><?php echo $f_home_welcome_title ?></h2>
            <div class="lin-left"><span></span></div>
            <div class="w-bot">
                <div class="w-bot_left">
                    <a href="<?php echo $f_home_welcome_link ?>" class="bnt-def bnt-def_bigger bnt-def_gold">
                        <i>
                            <svg>
                                <use xlink:href="<?php echo get_template_directory_uri(); ?>/icons/sprite.svg#line-btn" />
                            </svg>
                        </i>
                        <span>our difference</span>
                    </a>
                </div>
                <div class="w-bot_desc">
                    <?php echo $f_home_welcome_editor ?>
                </div>
            </div>
        </div>
    </section>

    <?php
    $f_home_about_title = get_field('f_home_about_title');
    $f_home_about_editor = get_field('f_home_about_editor');
    $f_home_about_img = get_field('f_home_about_img');
    $home_about_repeater = get_field('home_about_repeater_fields');
    $f_home_about_link = get_field('f_home_about_link');
    ?>

    <section class="s-about">
        <div class="container">
            <div class="s-abo-grid">
                <div class="s-abo-left">
                    <h2 class="title-2 title_mod FreightDispProBook"><?php echo  $f_home_about_title ?></h2>
                    <div class="s-abo-desc">
                        <?php echo  $f_home_about_editor ?>
                    </div>
                </div>

                <!-- don't display on phone -->
                <div class="s-abo-right mob-none">
                    <div class="abo-table">
                        <div class="abo-item">
                            <div class="abo-item_top FreightDispProBook"><?php echo $home_about_repeater[0]['text_field_1']; ?> <span><?php echo $home_about_repeater[0]['text_field_2']; ?></span></div>
                            <p class="abo-item_des"><?php echo $home_about_repeater[0]['text_field_3']; ?></p>
                        </div>
                        <div class="abo-item">
                            <div class="abo-item_top FreightDispProBook"><?php echo $home_about_repeater[1]['text_field_1']; ?> <span><?php echo $home_about_repeater[1]['text_field_2']; ?></span></div>
                            <p class="abo-item_des"><?php echo $home_about_repeater[1]['text_field_3']; ?></p>
                        </div>
                        <div class="abo-item"></div>
                        <div class="abo-item"></div>
                        <div class="abo-item">
                            <div class="abo-item_top FreightDispProBook"><?php echo $home_about_repeater[2]['text_field_1']; ?> <span><?php echo $home_about_repeater[2]['text_field_2']; ?></span></div>
                            <p class="abo-item_des"><?php echo $home_about_repeater[2]['text_field_3']; ?></p>
                        </div>
                        <div class="abo-item">
                            <div class="abo-item_top FreightDispProBook"><?php echo $home_about_repeater[3]['text_field_1']; ?> <span><?php echo $home_about_repeater[3]['text_field_2']; ?></span></div>
                            <p class="abo-item_des"><?php echo $home_about_repeater[3]['text_field_3']; ?></p>
                        </div>
                    </div>
                    <div class="s-abo-right_btn">
                        <a href="<?php echo $f_home_about_link ?>" class="bnt-def bnt-def_bigget_height  bnt-def_gold">
                            <i>
                                <svg>
                                    <use xlink:href="<?php echo get_template_directory_uri(); ?>/icons/sprite.svg#line-btn" />
                                </svg>
                            </i>
                            <span>read more</span>
                        </a>
                    </div>
                </div>

                <div class="s-abo-img">
                    <img src="<?php echo $f_home_about_img['url'] ?>" alt="<?php echo $f_home_about_img['alt'] ?>">
                </div>

                <!-- show on phone -->
                <div class="s-abo-mob">
                    <div class="slid-about-mob">
                        <div class="swiper  js-mob-swip-abo">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide item-swip">
                                    <div class="s-item-ab-mob">
                                        <div class="s-item-ab-mob_title FreightDispProBook"><?php echo $home_about_repeater[0]['text_field_1']; ?><span><?php echo $home_about_repeater[0]['text_field_2']; ?></span></div>
                                        <p class="s-item-ab-mob_p"><?php echo $home_about_repeater[0]['text_field_3']; ?></p>
                                    </div>
                                </div>
                                <div class="swiper-slide item-swip">
                                    <div class="s-item-ab-mob">
                                        <div class="s-item-ab-mob_title FreightDispProBook"><?php echo $home_about_repeater[1]['text_field_1']; ?><span><?php echo $home_about_repeater[1]['text_field_2']; ?></span></div>
                                        <p class="s-item-ab-mob_p"><?php echo $home_about_repeater[1]['text_field_3']; ?></p>
                                    </div>
                                </div>
                                <div class="swiper-slide item-swip">
                                    <div class="s-item-ab-mob">
                                        <div class="s-item-ab-mob_title FreightDispProBook"><?php echo $home_about_repeater[2]['text_field_1']; ?><span><?php echo $home_about_repeater[2]['text_field_2']; ?></span></div>
                                        <p class="s-item-ab-mob_p"><?php echo $home_about_repeater[2]['text_field_3']; ?></p>
                                    </div>
                                </div>
                                <div class="swiper-slide item-swip">
                                    <div class="s-item-ab-mob">
                                        <div class="s-item-ab-mob_title FreightDispProBook"><?php echo $home_about_repeater[3]['text_field_1']; ?><span><?php echo $home_about_repeater[3]['text_field_2']; ?></span></div>
                                        <p class="s-item-ab-mob_p"><?php echo $home_about_repeater[3]['text_field_3']; ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="s-about-mob_btn">
                        <button class="bnt-def bnt-def_bigger bnt-def_blue js-btn-open-modal">
                            <i>
                                <svg>
                                    <use xlink:href="<?php echo get_template_directory_uri(); ?>/icons/sprite.svg#line-btn" />
                                </svg>
                            </i>
                            <span>let’s talk!</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- don't show on phone -->
    <div class="s-about-fixed mob-none">
        <div class="sf-line sf-line_top"></div>
        <div class="sf-text FreightDispProBook">GIBSON</div>
        <div class="sf-line sf-line_bot"></div>
    </div>
</div>

<?php
$f_home_let_title = get_field('f_home_let_title');
$f_home_let_desc = get_field('f_home_let_desc');
$f_home_let_img = get_field('f_home_let_img');
?>

<section class="s-start">
    <div class="s-start_top">
        <div class="container">
            <div class="s-start__des">
                <h2 class="title-2 s-start_title title_uper title_mod FreightDispProBook"><?php echo $f_home_let_title ?></h2>
                <div class="s-start_text">
                    <?php echo $f_home_let_desc ?>
                </div>
            </div>
            <div class="s-start__img">
                <img src="<?php echo $f_home_let_img['url']; ?>" alt="<?php echo $f_home_let_img['alt']; ?>">
            </div>
        </div>
        <div class="sta-top-bg"></div>
    </div>

    <div class="s-start_bot">
        <!-- don't show on phone -->
        <div class="sing-gib mob-none FreightDispProBook"><span>gibson</span></div>
        <div class="container">
            <button class="bnt-def bnt-def_bigget_height js-btn-open-modal  bnt-def_gold">
                <i>
                    <svg>
                        <use xlink:href="<?php echo get_template_directory_uri(); ?>/icons/sprite.svg#line-btn" />
                    </svg>
                </i>
                <span>get it touch</span>
            </button>
        </div>
    </div>
</section>

<?php
$f_home_portfolio_title = get_field('f_home_portfolio_title');
$portfolio_ids = get_field('f_home_portfoli_portfolio');
$f_home_portfolio_des = get_field('f_home_portfolio_des');
$f_home_portfolio_lin = get_field('f_home_portfolio_link');
?>

<section class="s-porfolio">
    <div class="container">
        <h2 class="title-2 title_mod FreightDispProBook"><?php echo $f_home_portfolio_title; ?></h2>
    </div>
    <div class="port-items">
        <?php
        if ($portfolio_ids) :
            foreach ($portfolio_ids as $post_id) :
                $title = get_field('f_portfolio_name', $post_id);
                $link = get_field('f_portfolio_link', $post_id);
                $image = get_field('f_portfolio_img', $post_id);
                $image_url = is_array($image) ? $image['url'] : $image;
        ?>

                <a href="<?php echo esc_url($link); ?>" class="item-port">
                    <figure style="background-image: url('<?php echo $image_url; ?>');"></figure>
                    <span class="item-port_title MercuryDisplayRegular">
                        <?php echo esc_html($title); ?>
                    </span>
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
            endforeach;
        endif;
        ?>
    </div>
</section>

<div class="bg-romb">
    <div class="s-prog">
        <div class="container">
            <div class="s-prog_row">
                <div class="s-prog_des">
                    <?php echo $f_home_portfolio_des; ?>
                </div>
                <div class="s-prog_btn">
                    <a href="<?php echo $f_home_portfolio_lin; ?>" class="bnt-def bnt-def_bigger  bnt-def_gold">
                        <i>
                            <svg>
                                <use xlink:href="<?php echo get_template_directory_uri(); ?>/icons/sprite.svg#line-btn" />
                            </svg>
                        </i>
                        <span>read more</span>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <?php
    $f_home_services_title = get_field('f_home_services_title');
    $f_home_services_edito = get_field('f_home_services_editor');
    $f_home_services_link = get_field('f_home_services_link');
    $services = get_field('f_home_service_repeater_fields');
    ?>

    <section class="s-service">
        <div class="container">
            <div class="s-service__row">
                <div class="servic-left">
                    <h2 class="title-2 title_mod FreightDispProBook"><?php echo $f_home_services_title; ?></h2>
                    <div class="s-abo-desc">
                        <?php echo $f_home_services_edito; ?>
                        <!-- don't show on phone -->
                        <div class="lin-left mob-none"><span></span></div>
                    </div>
                    <!-- don't show on phone -->
                    <div class="servic-left__btn mob-none">
                        <a href="<?php echo $f_home_services_link; ?>" class="bnt-def bnt-def_bigget_height  bnt-def_gold">
                            <i>
                                <svg>
                                    <use xlink:href="<?php echo get_template_directory_uri(); ?>/icons/sprite.svg#line-btn" />
                                </svg>
                            </i>
                            <span>explore services</span>
                        </a>
                    </div>
                </div>
                <div class="servic-right">
                    <ul class="servis-items">
                        <?php if ($services) :
                            $i = 1;
                            foreach ($services as $service) :
                                $number = str_pad($i, 2, '0', STR_PAD_LEFT);
                                $name = $service['name'];
                        ?>
                                <li>
                                    <div>
                                        <span><?php echo $number; ?></span>
                                        <p><?php echo esc_html($name); ?></p>
                                    </div>
                                </li>
                        <?php
                                $i++;
                            endforeach;
                        endif;
                        ?>
                    </ul>
                </div>

                <!-- don't show on pc -->
                <div class="servic-left__btn pc-none">
                    <a href="<?php echo $f_home_services_link; ?>" class="bnt-def bnt-def_bigget_height  bnt-def_gold">
                        <i>
                            <svg>
                                <use xlink:href="<?php echo get_template_directory_uri(); ?>/icons/sprite.svg#line-btn" />
                            </svg>
                        </i>
                        <span>explore services</span>
                    </a>
                </div>
            </div>
        </div>
    </section>
</div>

<?php
$f_home_bottom_picture = get_field('f_home_bottom_picture');
?>

<div class="pos-block-r">
    <div class="s-imga" style="background-image: url('<?php echo $f_home_bottom_picture['url']; ?>');"></div>
    <div class="b-r-s"></div>
    <div class="s-about-fixed">
        <div class="sf-line sf-line_top"></div>
        <div class="sf-text FreightDispProBook">GIBSON</div>
        <div class="sf-line sf-line_bot"></div>
        <div class="lin-left"><span></span></div>
    </div>
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

    <div class="s-gb-con-bot">
        <div class="s-form-bot">
            <div class="container">
                <div class="s-form-wr">
                    <?php get_template_part('template-parts/contact-form'); ?>
                </div>
            </div>

            <!-- don't show on phone -->
            <div class="s-form-bot_f mob-none">
                <div class="f_inscription FreightDispProBook">GIBSON CRE</div>
                <div class="lin-left"><span></span></div>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>