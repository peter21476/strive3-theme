<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <img class="s3-footer-logo" src="<?php echo Kirki::get_option('strive3_theme_kirki_fields', 'strive3_bottom_logo') ?>" alt="logo" class="img-responsive center-block">
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
            <?php wp_nav_menu(
                        array(
                            'theme_location' => 'footer-menu',
                            'menu_class' => 'footer-menu'
                        )
                    ); ?>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="s3-footer-logos">
                    <div class="s3-gsa-wrapper">
                        <img src="<?php echo Kirki::get_option('strive3_theme_kirki_fields', 'strive3_gsa_logo') ?>" alt="logo" class="img-responsive center-block s3-gsa-logo" />
                    </div>

                    <div class="s3-sdvosb-wrapper">
                        <img src="<?php echo Kirki::get_option('strive3_theme_kirki_fields', 'strive3_sdvosb_logo') ?>" alt="logo" class="img-responsive center-block s3-sdvosb-logo" />
                    </div>

                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
            <div class="s3-social-media">
                <a href="<?php echo Kirki::get_option('strive3_theme_kirki_fields', 'strive3_facebook_url') ?>"><i class="fa-brands fa-facebook-f"></i></a> 
                <a href="<?php echo Kirki::get_option('strive3_theme_kirki_fields', 'strive3_x_url') ?>"><i class="fa-brands fa-x-twitter"></i></a>
                <a href="<?php echo Kirki::get_option('strive3_theme_kirki_fields', 'strive3_linkedin_url') ?>"><i class="fa-brands fa-linkedin-in"></i></a>
                <a href="<?php echo Kirki::get_option('strive3_theme_kirki_fields', 'strive3_youtube_url') ?>"><i class="fa-brands fa-youtube"></i></a>
                <a href="<?php echo Kirki::get_option('strive3_theme_kirki_fields', 'strive3_vimeo_url') ?>"><i class="fa-brands fa-vimeo-v"></i></a>
                <a href="<?php echo Kirki::get_option('strive3_theme_kirki_fields', 'strive3_instagram_url') ?>"><i class="fa-brands fa-instagram"></i></a>
                <a href="<?php echo Kirki::get_option('strive3_theme_kirki_fields', 'strive3_pinterest_url') ?>"><i class="fa-brands fa-pinterest-p"></i></a>
            </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <p class="s3-address"><span>STRIVE3</span> <span>1900 Reston Metro Plaza</span> <span>6th Floor</span> <span>Reston, VA 20190</span><br /><span><?php echo Kirki::get_option('strive3_theme_kirki_fields', 'strive3_phone_number') ?></span> <span>Email: <a href="mailto:<?php echo Kirki::get_option('strive3_theme_kirki_fields', 'strive3_email_text') ?>"><?php echo Kirki::get_option('strive3_theme_kirki_fields', 'strive3_email_text') ?></a></span>
            </div>
        </div>
    </div>
</footer>


<?php wp_footer(); ?>

</body>
</html>