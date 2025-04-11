<form class="js-form-cont">
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
</form>