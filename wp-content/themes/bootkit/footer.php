<!-- Footer -->
<footer class="py-5 bg-dark">
    <div class="container">
        <p class="m-0 text-center text-white"><?php echo get_theme_mod('bootkit_footer_copyright_text'); ?> </p>
        <!-- Top Social ============================================= -->
        <div id="top-social" class="text-center ">
            <ul>
                <?php
if (get_theme_mod('bootkit_facebook_handle')) {
    ?>
                <li><a href="<?php echo get_theme_mod('bootkit_facebook_handle'); ?>" target="_blank">
                        <i class="fa fa-facebook"></i></a>
                </li>
                <?php
}
if (get_theme_mod('bootkit_instagram_handle')) {
    ?>
                <li><a href="<?php echo get_theme_mod('bootkit_instagram_handle'); ?>" target="_blank">
                        <i class="fa fa-instagram"></i></a>
                </li>
                <?php
}
if (get_theme_mod('bootkit_email')) {
    ?><li><a href="mailto:<?php echo get_theme_mod('bootkit_email'); ?>">
                        <i class="fa fa-envelope"></i><?php echo get_theme_mod('bootkit_email'); ?></a></li>
                <?php
}
if (get_theme_mod('bootkit_phone_number')) {
    ?><li><a href="tel:+<?php echo get_theme_mod('bootkit_phone_number'); ?>">
                        <i class="fa fa-phone"></i>+<?php echo get_theme_mod('bootkit_phone_number'); ?></a></li>
                <?php
}
?>

            </ul>
        </div><!-- #top-social end -->
    </div>

    <!-- /.container -->
</footer>

<?php wp_footer();?>
<!-- Ajax button -->
<button id="bootkit_button">Отправить</button>
    <script>
jQuery(function($) {
    $('#bootkit_button').click(function() {
        $.ajax({
            url: '<?php echo admin_url("admin-ajax.php") ?>',
            type: 'POST',
            data: 'action=bootkit&param1=2&param2=3', // передаем данные – 2 и 3
            beforeSend: function(xhr) {
                $('#bootkit_button').text('Загрузка, 5 сек...');
            },
            success: function(data) {
                $('#bootkit_button').text('Отправить');
                alert(data);
            }
        });
    });
});
    </script>
</body>

</html>
<div class="my-new-sidebar">

  <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Sidebar Area") ) : ?>

  <?php endif; ?>

</div>