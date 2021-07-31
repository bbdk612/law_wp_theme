<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Law
 */
get_header();
?>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <?php if (have_posts()): while (have_posts()): the_post(); ?>
                    <?php the_content() ?>
                <?php endwhile; ?>
                <!--post navigation -->
            <?php else: ?>
                <!-- no posts found -->
            <?php endif; ?>
        </div>
    </div>
</div>


<?php
//get_sidebar();
get_footer();
