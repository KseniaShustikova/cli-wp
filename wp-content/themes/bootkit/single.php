<?php
get_header();
?>
<!-- Page Content -->
<div class="container">


    <!-- Marketing Icons Section -->
    <div class="row">

        <!-- Blog Entries Column -->
        <div class="col-md-8">
            <?php if (have_posts()) {
    while (have_posts()) {
        the_post();
        global $post;
        $author_ID = $post->post_author;
        $author_URL = get_author_posts_url($author_ID);
        ?>
            <!-- Title -->
            <h1 class="mt-4"><?php the_title()?></h1>
            <!-- Post category: -->
            <h2 class="mt-4"><?php the_category(" ")?></h2>

            <!-- Date/Time -->
            <p><?php the_time(get_option('date_format'));
        echo " ";
        the_time(get_option('time_format'));?></p>
            <hr>


            <!-- Author -->
            <p class="lead">
                by
                <a href="<?php echo $author_URL; ?>"><?php the_author();?></a>
            </p>
            <hr>

            <!-- Preview Image -->
            <?php
if (has_post_thumbnail()) {
            the_post_thumbnail("full", ["class" => "card-img-top"]);
        }
        ?>
            <hr>


            <!-- Post Content -->
            <?php the_content();

        $defaults = array(
            'before' => '<div class="row justify-content-center align-items-center">' . __('Pages:'),
            'after' => '</div>',
        );
        wp_link_pages($defaults);
        edit_post_link();
        ?>
            <!-- Post Author Info -->
            <div class="card">
                <div class="card-header">
                    <strong>
                        Posted by
                        <a href="<?php echo $author_URL; ?>"><?php the_author();?></a>
                    </strong>
                </div>
                <div class="card-body">
                    <div class="author-image">
                        <?php echo get_avatar($author_ID, 90, '', false, ['class' => 'img-circle']); ?>
                    </div>
                    <?php echo nl2br(get_the_author_meta('description')); ?>
                </div>
            </div><!-- Post Single - Author End -->

            <hr>
            <!-- Tag cloud -->
            <?php the_tags('', ', ');?>
            <hr>
            <!-- Pagination -->
            <ul class="pagination justify-content-center mb-4">
                <li class="page-item">
                    <?php previous_post_link();?>
                </li>
                <li class="page-item">
                    <?php next_post_link();?>
                </li>
            </ul>

            <?php
if (comments_open() || get_comments_number()) {
            comments_template();
        }
        ?>
            <?php
}
}
?>


            <h4>Related Posts:</h4>
            <div class="related-posts clearfix">
                <?php
$categories = get_the_category();
$rp_query = new WP_Query([
    'posts_per_page' => 2,
    'post__not_in' => [$post->ID],
    'cat' => !empty($categories) ? $categories[0]->term_id : null,
]);
if ($rp_query->have_posts()) {
    while ($rp_query->have_posts()) {
        $rp_query->the_post();
        ?>
                <div class="mpost clearfix">
                    <?php
if (has_post_thumbnail()) {
            ?>
                    <div class="entry-image">
                        <a href="<?php the_permalink();?>">
                            <?php the_post_thumbnail('thumbnail');?>
                        </a>
                    </div>
                    <?php
}
        ?>
                    <div class="entry-c">
                        <div class="entry-title">
                            <h4>
                                <a href="<?php the_permalink();?>">
                                    <?php the_title();?>
                                </a>
                            </h4>
                        </div>


                    </div>
                </div>
                <?php
}
    wp_reset_postdata();
}
?>
            </div>

        </div>

        <?php get_sidebar();?>
    </div>
    <!-- /.row -->
    <hr>
    <!-- Post meta data begin -->
    <h5>Post meta data:</h5>
    <div class="row">
        <div class="col-md-8">
            <?php
// the_meta();

$arr = get_post_custom();
foreach ($arr as $key => $fields) {
    if (!is_protected_meta($key, 'post')) {
        print_r("<strong>{$key}</strong> :");
        foreach ($fields as $field) {
            print_r($field . " ");
        }
        echo "<br>";
    }
}
?>
        </div>
    </div>
    <!-- Post meta data end -->
</div>
<!-- /.container -->


<?php
get_footer();
?>