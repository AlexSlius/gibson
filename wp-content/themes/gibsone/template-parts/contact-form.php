<form class="js-form-cont js-form-wrap">
    <div class="form-container">
        <div class="ite-in-w js-item-w">
            <label>
                <p class="title-input">Your name*</p>
                <div class="in-w">
                    <input type="text" required name="name" class="int"
                        placeholder="Your name">
                </div>
            </label>
        </div>
        <div class="ite-in-w js-item-w">
            <label>
                <p class="title-input">Your e-mail*</p>
                <div class="in-w">
                    <input type="text" required name="email" class="int"
                        placeholder="Your e-mail">
                </div>
            </label>
        </div>
        <div class="ite-in-w js-item-w">
            <label>
                <p class="title-input">Your phone</p>
                <div class="in-w">
                    <input type="text" name="phone" class="int"
                        placeholder="Your phone">
                </div>
            </label>
        </div>
        <div class="ite-in-w js-item-w">
            <label>
                <p class="title-input">Message</p>
                <div class="in-w">
                    <textarea name="message" class="int textarea"
                        placeholder="Message"></textarea>
                </div>
            </label>
        </div>

        <div class="born-wr-bot">
            <!-- load -->
            <button class="bnt-def bnt-def_bigger bnt-def_blue">
                <i>
                    <svg>
                        <use xlink:href="<?php echo get_template_directory_uri(); ?>/icons/sprite.svg#line-btn" />
                    </svg>
                </i>
                <span>send</span>
            </button>
        </div>
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
</form>