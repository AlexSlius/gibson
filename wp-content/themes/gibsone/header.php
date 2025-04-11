<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="img/icon/favicone.ico">

    <?php wp_head(); ?>
</head>

<body>
    <div class="wrapper">

        <?php
        $logo_black = get_field('header_logo_black', 'option');
        $logo_light = get_field('header_logo_light', 'option');
        ?>

        <header class="header js-header">
            <div class="container">
                <div class="header_row">
                    <div class="header_logo">
                        <a href="/">
                            <?php if ($logo_black): ?>
                                <img src="<?php echo esc_url($logo_black['url']); ?>" alt="<?php echo esc_attr($logo_black['alt']); ?>" />
                            <?php endif; ?>

                            <?php if ($logo_light): ?>
                                <img src="<?php echo esc_url($logo_light['url']); ?>" alt="<?php echo esc_attr($logo_light['alt']); ?>" />
                            <?php endif; ?>
                        </a>
                    </div>
                    <div class="mob-none">
                        <nav class="header_menu">
                            <?php
                            wp_nav_menu([
                                'theme_location' => 'main_menu',
                                'container' => false,
                                'items_wrap' => '%3$s',
                                'walker' => new Custom_Main_Menu_Walker(),
                            ]);
                            ?>
                        </nav>
                    </div>
                    <div class="mob-none">
                        <button class="bnt-def bnt-def_header js-btn-open-modal">
                            <i>
                                <svg>
                                    <use xlink:href="<?php echo get_template_directory_uri(); ?>/icons/sprite.svg#line-btn" />
                                </svg>
                            </i>
                            <span>Contact us</span></button>
                    </div>
                    <div class="burger-menu js-burger">
                        <span></span>
                    </div>
                </div>
            </div>
        </header>

        <div class="mob-menu js-mob-menu">
            <div class="mob-menu_wr">
                <div class="mob_ul">
                    <?php
                    wp_nav_menu([
                        'theme_location' => 'main_menu',
                        'container' => false,
                        'menu_class' => '',
                        'items_wrap' => '<ul>%3$s</ul>'
                    ]);
                    ?>
                </div>
                <div class="lin-left"><span></span></div>
                <div class="mob-menu-bot">
                    <?php
                    $link_fb = get_field('footer_con_soc_f', 'option');
                    $link_ins = get_field('footer_con_soc_insta', 'option');
                    $logo_link = get_field('footer_con_soc_linken', 'option');

                    $name_cood = get_field('footer_con_coordin_name', 'option');
                    $address_name = get_field('footer_con_address_name', 'option');
                    $address_link = get_field('footer_con_address_link', 'option');
                    $phone_name = get_field('footer_con_phone_name', 'option');
                    $phone_number = get_field('footer_con_phone_number', 'option');
                    $email_name = get_field('footer_con_email_name', 'option');
                    $email_link = get_field('footer_con_email_link', 'option');
                    ?>

                    <?php if ($link_fb || $link_ins || $logo_link): ?>
                        <div class="mob-social">
                            <?php if ($link_fb): ?>
                                <a href="<?php echo $link_fb ?>">
                                    <svg>
                                        <use xlink:href="<?php echo get_template_directory_uri(); ?>/icons/sprite.svg#soc-f" />
                                    </svg>
                                </a>
                            <?php endif; ?>

                            <?php if ($link_ins): ?>
                                <a href="<?php echo $link_ins ?>">
                                    <svg>
                                        <use xlink:href="<?php echo get_template_directory_uri(); ?>/icons/sprite.svg#soc-inst" />
                                    </svg>
                                </a>
                            <?php endif; ?>

                            <?php if ($logo_link): ?>
                                <a href="<?php echo $logo_link ?>">
                                    <svg>
                                        <use xlink:href="<?php echo get_template_directory_uri(); ?>/icons/sprite.svg#soc-in" />
                                    </svg>
                                </a>
                            <?php endif; ?>
                        </div>
                    <?php endif; ?>

                    <div class="mob-contacts">
                        <?php if ($name_cood): ?>
                            <p><?php echo $name_cood; ?></p>
                        <?php endif; ?>

                        <?php if ($address_link): ?>
                            <a href="<?php echo $address_link; ?>">
                                <svg>
                                    <use xlink:href="<?php echo get_template_directory_uri(); ?>/icons/sprite.svg#i-address" />
                                </svg>
                                <span><?php echo $address_name; ?></span>
                            </a>
                        <?php endif; ?>

                        <?php if ($phone_number): ?>
                            <a href="tel:<?php echo $phone_number; ?>">
                                <svg>
                                    <use xlink:href="<?php echo get_template_directory_uri(); ?>/icons/sprite.svg#i-phone" />
                                </svg>
                                <span><?php echo $phone_name; ?></span>
                            </a>
                        <?php endif; ?>

                        <?php if ($email_link): ?>
                            <a href="mailto:<?php echo $email_link; ?>">
                                <svg>
                                    <use xlink:href="<?php echo get_template_directory_uri(); ?>/icons/sprite.svg#i-email" />
                                </svg>
                                <span><?php echo $email_name; ?></span>
                            </a>
                        <?php endif; ?>
                    </div>

                    <div class="mob-wr-btn">
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
            </div>
        </div>

        <main class="main">