<?php
/**
 * Footer
 */$socials = get_field('socials', 'options');
?>
<footer>
    <div class="container">
        <div class="footer__wrap">
            <div class="footer_img">
                <a href="<?php echo home_url('/'); ?>"><?php if ( $footer_logo = get_field( 'footer_logo', 'options' ) ):
                    echo wp_get_attachment_image( $footer_logo['id'], 'small' );
                endif; ?></a> 
                

            </div>
            <?php  
                wp_nav_menu(
                    array(
                        'theme_location' => 'main-menu',
                        'menu_id'        => 'main-menu',
                    )
                );
                ?>
                <?php if (!empty($socials)) : ?>
                <ul class="social">
                    <?php foreach ($socials as $row): ?>
                        <?php $social_img = $row['social_img']; ?> 
                        <?php $social_url = $row['social_url']; ?>
                        <?php if ($social_img && $social_img): ?>
                            <li>
                                <a target="_blank" href="<?php echo esc_url($social_url); ?>">
                                    <img src="<?php echo esc_url($social_img['url']); ?>" alt="">
                                </a>
                            </li>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </ul>
            <?php endif; ?>



        </div>
    </div>
    <div class="container">
        <div class="copyright">
            <p>© 2020 All rights reserved</p>
            <a href="https://abricodia.com/dev/privacy-policy/">Privacy Policy</a>
            <a href="https://abricodia.com/dev/terms-of-payment-and-deliver/">Terms of payment and delivery</a>
            <p>Website developed: <span>megasite</span><span>.</span></p>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
