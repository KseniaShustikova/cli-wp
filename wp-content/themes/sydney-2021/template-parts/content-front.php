<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Sydney_2021
 */

?>

<div class="articleSpace">
    <div class="imgBlock">
        <?php sydney_2021_post_thumbnail();?>
    </div>
    <div class="contentText">
        <h5 class="titleArticle"><a href="<?php the_permalink()?>"> <?php the_title();?></a></h5>
        <?php

the_content(
    sprintf(
        ('MORE INFO'),
        array(
            'a' => array(
                'class' => array("moreInfo"),
            ),
        )
    )

);
?>
        <p> <a href="<?php the_permalink()?>" class="bookNow"><?php _e('Read More', 'sidney-2021')?> &rarr;</a></p>
    </div><!-- .entry-content -->
</div><!-- #post-<?php the_ID();?> -->