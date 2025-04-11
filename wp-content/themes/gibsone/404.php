<?php get_header(); ?>
<div class="error-page">
    <div class="container">
        <div class="title-error FreightDispProBook">Oops! <br /> Page Not Found :(</div>
        <div class="lin-left"><span></span></div>
        <div class="error-page__row">
            <!-- don't show mob -->
            <div class="error-t-s FreightDispProBook mob-none">It looks like the page you're looking for
                doesn’t
                exist or has
                been moved</div>
            <div class="error-404 FreightDispProBook">404</div>
        </div>
        <!-- don't show on pc -->
        <div class="error-t-s FreightDispProBook pc-none ">It looks like the page you're looking for
            doesn’t
            exist or has
            been moved</div>
        <div class="row_error_btn">
            <a href="/" class="bnt-def bnt-def_bigger bnt-def_blue">
                <i>
                    <svg>
                        <use xlink:href="<?php echo get_template_directory_uri(); ?>/icons/sprite.svg#line-btn" />
                    </svg>
                </i>
                <span>home page</span>
            </a>
        </div>
    </div>
</div>
<?php get_footer(); ?>