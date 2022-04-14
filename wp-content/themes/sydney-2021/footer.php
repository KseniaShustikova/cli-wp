<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Sydney_2021
 */

?>

<footer>
    <h4 class="tittleBlock text-center">our partners.</h4>
    <div class="owl-carousel owl-theme logoList actSliderFooter">
        <div class="item">
            <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo/logo1.png" alt="logo1"
                    class="logo1"></a>
        </div>
        <div class="item">
            <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo/logo2.png" alt="logo2"
                    class="logo2"></a>
        </div>
        <div class="item">
            <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo/logo3.png" alt="logo3"
                    class="logo3"></a>
        </div>
        <div class="item">
            <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo/logo4.png" alt="logo4"
                    class="logo4"></a>
        </div>
        <div class="item">
            <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo/logo5.png" alt="logo5"
                    class="logo5"></a>
        </div>
        <div class="item">
            <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo/logo7.png" alt="logo7"
                    class="logo6"></a>
        </div>
        <div class="item">
            <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo/logo8.png" alt="logo8"
                    class="logo7"></a>
        </div>
    </div>

    <div class="back-to-top">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/upArroy.png" alt="up">
    </div>

    <p class="textFooter text-center">SYDNEY PHILHARMONIA CHOIRS</p>
    <p class="textFooter text-center">Pier 4, Hickson Road Walsh Bay NSW 2000</p>
    <p class="textFooter text-center">Phone:<a href="tel:0282746200" class="footerLinkNum"> 02 8274 6200</a></p>
    <a href="mailto:admin@sydneyphilharmonia.com.au" class="text-center footerLink">admin@sydneyphilharmonia.com.au</a>
    <a href="sydneyphilharmonia.com.au" class="text-center footerLink">sydneyphilharmonia.com.au </a>
    <a href="singwithpassion.com.au" class="text-center footerLink">singwithpassion.com.au </a>

    <ul class="footerListSoc">
        <li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/fb.png" alt="facebook"></a>
        </li>
        <li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/tw.png" alt="twiter"></a>
        </li>
        <li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/ins.png"
                    alt="instagram"></a></li>
        <li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/youtube.png"
                    alt="youtube"></a></li>
        <li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/search.png"
                    alt="search"></a></li>
    </ul>

    <p class="textFooter text-center">
        <?php
/* translators: 1: Theme name, 2: Theme author. */
printf(esc_html__('Theme: %1$s by %2$s.', 'sydney-2021'), 'sydney-2021', '<a href="https://github.com/miwanoff/">MAI</a>');
?>
    </p>
</footer>

</div><!-- #page -->
<?php wp_footer();?>

</body>

</html>