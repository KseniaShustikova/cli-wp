<?php
// Template Name: Sydney 2021

get_header();

?>

<main id="primary" class="site-main">
    <section class="articleSpaceBlock container">
        <h4 class="tittleBlock padleft"><?php bloginfo('name');?></h4>
        <?php
// The Query
$the_query = new WP_Query(array(
    'post_type' => 'post', 'category_name' => 'news'));
if ($the_query->have_posts()):

    if (is_home() && !is_front_page()):
    ?>
        <header>
            <h1 class="page-title screen-reader-text"><?php single_post_title();?></h1>
        </header>
        <?php
endif;

/* Start the Loop */
while ($the_query->have_posts()):
    $the_query->the_post();

    /*
     * Include the Post-Type-specific template for the content.
     * If you want to override this in a child theme, then include a file
     * called content-___.php (where ___ is the Post Type name) and that will be used instead.
     */
    get_template_part('template-parts/content', "front");

endwhile;

the_posts_navigation();

else:

    get_template_part('template-parts/content', 'none');

endif;
wp_reset_postdata();
?>
    </section>

</main><!-- #main -->

<?php
get_footer();