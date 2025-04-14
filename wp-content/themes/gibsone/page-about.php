<?php

/**
 * Template Name: About
 */
?>

<?php get_header();

$f_p_about_bg = get_field('f_p_about_bg');
$f_p_about_title = get_field('f_p_about_title');
$f_p_about_sub_title = get_field('f_p_about_sub_title');
$f_p_about_p = get_field('f_p_about_p');
?>

<div class="sec-top-page no_bg">
    <section class="banner-page" style="background-image: url('<?php echo $f_p_about_bg['url']; ?>');">
        <div class="ban-left">
            <h1 class="banner-page-title title-2 title_mod FreightDispProBook"><?php echo $f_p_about_title; ?></h1>
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
            <div class="banner-box__title MercuryDisplayRoman"><?php echo $f_p_about_sub_title; ?></div>
            <div class="lin-left"><span></span></div>
            <p class="banner-box_des FreightDispProBook"><?php echo $f_p_about_p; ?></p>
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
        <button class="bnt-def js-btn-open-modal bnt-def_bigger bnt-def_gold">
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
$f_about_p_leader_title = get_field('f_about_p_leader_title');
$f_about_p_text_editor = get_field('f_about_p_text_editor');
$f_about_p_img = get_field('f_about_p_img');
?>

<div class="s-bg-all-about">
    <section class="s-about s-about-page">
        <div class="container">
            <div class="s-abo-grid">
                <div class="s-abo-left">
                    <h2 class="title-2 title_mod FreightDispProBook"><?php echo $f_about_p_leader_title; ?></h2>
                    <div class="s-abo-desc">
                        <?php echo $f_about_p_text_editor; ?>
                    </div>
                </div>
                <!-- don't show on phone -->
                <?php $items = get_field('f_about_p_repeater_fields'); ?>
                <div class="s-abo-right mob-none">
                    <div class="abo-table">
                        <div class="abo-item">
                            <div class="abo-item_top FreightDispProBook">
                                <?php echo esc_html($items[0]['text_field_1']); ?>
                                <?php if (!empty($items[0]['text_field_2'])): ?>
                                    <span><?php echo esc_html($items[0]['text_field_2']); ?></span>
                                <?php endif; ?>
                            </div>
                            <p class="abo-item_des"><?php echo esc_html($items[0]['text_field_3']); ?></p>
                        </div>
                        <div class="abo-item">
                            <div class="abo-item_top FreightDispProBook">
                                <?php echo esc_html($items[1]['text_field_1']); ?>
                                <?php if (!empty($items[1]['text_field_2'])): ?>
                                    <span><?php echo esc_html($items[1]['text_field_2']); ?></span>
                                <?php endif; ?>
                            </div>
                            <p class="abo-item_des"><?php echo esc_html($items[1]['text_field_3']); ?></p>
                        </div>
                        <div class="abo-item"></div>
                        <div class="abo-item"></div>
                        <div class="abo-item">
                            <div class="abo-item_top FreightDispProBook">
                                <?php echo esc_html($items[2]['text_field_1']); ?>
                                <?php if (!empty($items[2]['text_field_2'])): ?>
                                    <span><?php echo esc_html($items[2]['text_field_2']); ?></span>
                                <?php endif; ?>
                            </div>
                            <p class="abo-item_des"><?php echo esc_html($items[2]['text_field_3']); ?></p>
                        </div>
                        <div class="abo-item">
                            <div class="abo-item_top FreightDispProBook">
                                <?php echo esc_html($items[3]['text_field_1']); ?>
                                <?php if (!empty($items[3]['text_field_2'])): ?>
                                    <span><?php echo esc_html($items[3]['text_field_2']); ?></span>
                                <?php endif; ?>
                            </div>
                            <p class="abo-item_des"><?php echo esc_html($items[3]['text_field_3']); ?></p>
                        </div>
                    </div>
                </div>

                <div class="s-abo-img">
                    <img src="<?php echo $f_about_p_img['url']; ?>" alt="<?php echo $f_about_p_img['alt']; ?>">
                </div>

                <!-- show om phone -->
                <div class="s-abo-mob">
                    <div class="slid-about-mob">
                        <div class="swiper  js-mob-swip-abo">
                            <div class="swiper-wrapper">
                                <?php foreach ($items as $item): ?>
                                    <div class="swiper-slide item-swip">
                                        <div class="s-item-ab-mob">
                                            <div class="s-item-ab-mob_title FreightDispProBook">
                                                <?php echo esc_html($item['text_field_1']); ?>
                                                <?php if (!empty($item['text_field_2'])): ?>
                                                    <span><?php echo esc_html($item['text_field_2']); ?></span>
                                                <?php endif; ?>
                                            </div>
                                            <p class="s-item-ab-mob_p"><?php echo esc_html($item['text_field_3']); ?></p>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php $f_about_p_bot_text = get_field('f_about_p_bot_text'); ?>

    <div class="ms-in-gib">
        <div class="container">
            <!-- don't show on phone -->
            <div class="ms-ga-pa mob-none">
                <div class="ms-ga-pa__inscription FreightDispProBook ">GIBSON CRE</div>
                <div class="lin-left"><span></span></div>
            </div>
            <div class="ms-in-gib__right">
                <div class="ms-in-gib_des FreightDispProBook">
                    <p>
                        <?php echo $f_about_p_bot_text; ?>
                    </p>
                </div>
                <div class="ms-in-gib_wr_btn">
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

    <?php
    $f_about_p_team_title = get_field('f_about_p_team_title');
    $f_about_p_team_text_editor = get_field('f_about_p_team_text_editor');
    ?>

    <div class="ms-text-left">
        <div class="container">
            <div class="ms-text-left__cont">
                <div class="title-2 title_mod FreightDispProBook"><?php echo $f_about_p_team_title; ?></div>
                <div class="ms-text-left__des t-def-t">
                    <?php echo $f_about_p_team_text_editor; ?>
                </div>
            </div>
        </div>
        <!-- don't show on phone -->
        <div class="lin-left mob-none"><span></span></div>
    </div>
</div>

<?php $team = get_field('f_about_p_team_repeater_fields'); ?>

<div class="teams">
    <!-- don't show on phone -->
    <?php
    if ($team):
        foreach ($team as $index => $member):
            $name = esc_html($member['name']);
            $position = esc_html($member['position']);
            $description = $member['f_about_p_team_description'];
            $avatar = '';

            if (!empty($member['f_about_p_team_avatar'])) {
                $avatar_url = $member['f_about_p_team_avatar']['url'];
                if ($avatar_url) {
                    $avatar = esc_url($avatar_url);
                }
            }
    ?>
            <div class="teams_cards mob-none">
                <div class="team-card js-team-card <?php echo $index === 0 ? 'active' : ''; ?>" data-item="<?php echo $index; ?>">
                    <div class="team-card__img">
                        <img src="<?php echo esc_url($avatar); ?>" alt="<?php echo esc_attr($name); ?>">
                    </div>
                    <div class="team-card__right">
                        <div class="team-card_name MercuryDisplayRoman"><?php echo $name; ?></div>
                        <p class="team-card_profession"><?php echo $position; ?></p>
                        <div class="lin-left"><span></span></div>
                        <div class="team-card_desc">
                            <p><?php echo $description; ?></p>
                        </div>
                    </div>
                </div>
            </div>
    <?php endforeach;
    endif; ?>

    <div class="temms-slider-wr">
        <div class="swiper swiper-team js-team-swipre">
            <div class="swiper-wrapper">
                <?php

                if ($team):
                    foreach ($team as $index => $member):
                        $name = esc_html($member['name']);
                        $position = esc_html($member['position']);
                        $description = $member['f_about_p_team_description'];
                        $avatar = '';

                        if (!empty($member['f_about_p_team_avatar'])) {
                            $avatar_url = $member['f_about_p_team_avatar']['url'];
                            if ($avatar_url) {
                                $avatar = esc_url($avatar_url);
                            }
                        }
                ?>
                        <div class="swiper-slide">
                            <div class="item-tem-card js-item-card-btn" data-item="<?php echo $index; ?>">
                                <div class="item-tem-card_img img_contin">
                                    <img src="<?php echo esc_url($avatar); ?>" alt="<?php echo esc_attr($name); ?>">
                                </div>
                                <div class="item-tem-card_bot">
                                    <div class="lin-left"><span></span></div>
                                    <div class="item-tem-card_name MercuryDisplayRoma"><?php echo $name; ?></div>
                                    <p class="item-tem-card_profesion"><?php echo $position; ?></p>
                                </div>
                            </div>
                        </div>
                <?php endforeach;
                endif; ?>
            </div>
        </div>
    </div>
</div>

<?php
$f_about_except_title = get_field('f_about_except_title');
$f_about_except_text = get_field('f_about_except_text');
$f_about_except_label = get_field('f_about_except_label');
?>
<div class="about-me">
    <div class="container">
        <div class="about-me_left">
            <div class="about-me_left_top">
                <div class="title-2 title_mod FreightDispProBook"><?php echo $f_about_except_title; ?></div>
                <div class="lin-left"><span></span></div>
            </div>
            <div class="about-me_des t-def-t">
                <?php echo $f_about_except_text; ?>
            </div>
        </div>
        <div class="about-me_right FreightDispProBook"><?php echo $f_about_except_label; ?></div>
    </div>
</div>

<?php
$lets_title = get_field('field_tab_lets_title', 'option');
$sub_title = get_field('field_tab_lets_sub_title', 'option');
$f_about_bottom_picture = get_field('f_about_bottom_picture');
?>

<div class="s-form">
    <div class="s-form_top s-form_no_pad">
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
            <div class="s-imga" style="background-image: url('<?php echo $f_about_bottom_picture['url']; ?>');"></div>
        </div>
    </div>
</div>

<?php get_footer(); ?>