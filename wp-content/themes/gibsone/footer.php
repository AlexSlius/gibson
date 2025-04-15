</main>

<footer class="footer">
    <?php
    $logo = get_field('footer_logo', 'option');
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
    $link_private = get_field('footer_link_private', 'option');
    $text_copy = get_field('footer_copy', 'option');

    $modal_picture = get_field('modal_picture', 'option');
    $modal_title_pc = get_field('modal_title_pc', 'option');
    $modal_title_phone = get_field('modal_title_phone', 'option');
    $modal_title_successfull_title = get_field('modal_title_successfull_title', 'option');
    $modal_sub_successfull_title = get_field('modal_sub_successfull_title', 'option');
    ?>

    <div class="footer_top">
        <div class="container">
            <div class="row-fot">
                <div class="fot-left">
                    <div class="fot-logo">
                        <a href="#">
                            <?php if ($logo): ?>
                                <img src="<?php echo esc_url($logo['url']); ?>" alt="<?php echo esc_attr($logo['alt']); ?>" />
                            <?php endif; ?>
                        </a>
                    </div>
                    <!-- don't show on phone -->
                    <?php if ($link_private): ?>
                        <div class="fot-priv mob-none">
                            <a href="#"><?php echo $link_private ?></a>
                        </div>
                    <?php endif; ?>
                </div>
                <?php
                wp_nav_menu([
                    'theme_location' => 'footer_menu',
                    'container' => 'div',
                    'container_class' => 'f-menu',
                    'items_wrap' => '%3$s',
                    'link_before' => '',
                    'link_after' => '',
                    'walker' => new class extends Walker_Nav_Menu {
                        function start_el(&$output, $item, $depth = 0, $args = null, $id = 0)
                        {
                            $output .= sprintf(
                                '<a href="%s">%s</a>',
                                esc_url($item->url),
                                esc_html($item->title)
                            );
                        }
                    }
                ]);
                ?>
                <div class="f-contact">
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

                <?php if ($link_fb || $link_ins || $logo_link): ?>
                    <div class="fot-social">
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

                <!-- don't show on pc -->
                <?php if ($link_private): ?>
                    <div class="bot_mob-private">
                        <a href="#"><?php echo $link_private ?></a>
                    </div>
                <?php endif; ?>
            </div>
        </div>
        <!-- don't show on phone -->
        <div class="footer_inscription mob-none FreightDispProBook">GIBSON </div>
    </div>
    <div class="footer_bot">
        <p><?php echo $text_copy ?></p>
    </div>
</footer>
<?php wp_footer(); ?>

<div class="modale js-modale">
    <div class="modale__opas js-modale-opas js-btn-close-modal"></div>

    <div class="modale__cont js-modale-cont">
        <div class="modale_btn_close js-btn-close-modal">
            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" fill="none">
                <path
                    d="M23.4662 24.4107L24.4102 23.4667L16.9435 16L24.4102 8.53336L23.4662 7.58936L15.9995 15.056L8.53282 7.58936L7.58882 8.53336L15.0555 16L7.58882 23.4667L8.53282 24.4107L15.9995 16.944L23.4662 24.4107Z" />
            </svg>
        </div>

        <div class="modale_row">
            <!-- don't show on phone -->
            <div class="modale_left mob-none">
                <div class="modale_logo">
                    <img src="<?php echo esc_url($logo['url']); ?>" alt="<?php echo esc_attr($logo['alt']); ?>" />
                </div>
                <div class="lin-left modale_left_top-line"><span></span></div>
                <div class="m-contacts">
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

                <?php if ($link_fb || $link_ins || $logo_link): ?>
                    <div class="m-social">
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
                <div class="lin-left modale_left_bot-line"><span></span></div>

                <div class="modale_img_w">
                    <img src="<?php echo esc_url($modal_picture['url']); ?>" alt="<?php echo esc_attr($modal_picture['alt']); ?>" />
                </div>
            </div>
            <div class="modale_form js-form-wrap">
                <div class="modale_form_wr">
                    <!-- don't show on phone -->
                    <div class="modale_title MercuryDisplayRoman mob-none"><?php echo $modal_title_pc ?></div>
                    <!-- don't show pc -->
                    <div class="modale_title FreightDispProBook pc-none"><?php echo $modal_title_phone ?></div>
                    <form class="js-form-cont">
                        <div class="form-container">
                            <div class="ite-in-w js-item-w">
                                <label>
                                    <p class="title-input">Your name*</p>
                                    <div class="in-w">
                                        <input type="text" class="int" required placeholder="Your name">
                                    </div>
                                </label>
                            </div>
                            <div class="ite-in-w js-item-w">
                                <label>
                                    <p class="title-input">Your e-mail*</p>
                                    <div class="in-w">
                                        <input type="text" class="int" required placeholder="Your e-mail">
                                    </div>
                                </label>
                            </div>
                            <div class="ite-in-w js-item-w">
                                <label>
                                    <p class="title-input">Your phone</p>
                                    <div class="in-w">
                                        <input type="text" class="int" placeholder="Your phone">
                                    </div>
                                </label>
                            </div>
                            <div class="ite-in-w js-item-w">
                                <label>
                                    <p class="title-input">Message</p>
                                    <div class="in-w">
                                        <textarea name="" class="int textarea" placeholder="Message"></textarea>
                                    </div>
                                </label>
                            </div>
                            <div class="born-wr-bot">
                                <button class="bnt-def bnt-def_bigger_big bnt-def_blue">
                                    <i>
                                        <svg>
                                            <use xlink:href="<?php echo get_template_directory_uri(); ?>/icons/sprite.svg#line-btn" />
                                        </svg>
                                    </i>
                                    <span>send</span>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="form-successful js-cussess-form">
                    <div class="form-successful__wr">
                        <div class="form-successful_title MercuryDisplayRoman"><?php echo $modal_title_successfull_title ?></div>
                        <div class="form-successful_sub-title MercuryDisplayRoman"><?php echo $modal_sub_successfull_title ?></div>
                    </div>
                </div>

                <div class="form-successful form-ussuccessful js-uncussess-form">
                    <div class="form-successful__wr">
                        <div class="form-successful_title MercuryDisplayRoman">Oops! There was an error sending the form</div>
                        <div class="form-successful_sub-title MercuryDisplayRoman">Please, try again</div>
                        <div class="form-successful_btn-wr">
                            <button class="bnt-def bnt-def_bigget_height bnt-def_gold js-try-againe">
                                <i>
                                    <svg>
                                        <use xlink:href="<?php echo get_template_directory_uri(); ?>/icons/sprite.svg#line-btn" />
                                    </svg>
                                </i>
                                <span>Try againe</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</div>
</body>

</html>