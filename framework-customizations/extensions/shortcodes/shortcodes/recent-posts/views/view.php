<?php
if (!defined('FW')) {
    die('Forbidden');
}

/**
 * @var array $atts
 */
//debug($atts);
?>

<?php
if (!empty($atts['posts_how_many'])) {
    $query = new WP_Query(array(
        'posts_per_page' => intval($atts['posts_how_many']),
    ));
}
?>    
        <div class="row animate-box">
            <?php if (boolval($atts['posts_check'])): ?>
            <div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
                <h2><?php
                if (!empty($atts['posts_bg_title'])) {
                    echo $atts['posts_bg_title'];
                }
                ?></h2>
                <p><?php
                if (!empty($atts['posts_bg_desc'])) {
                    echo $atts['posts_bg_desc'];
                }
                ?></p>
            </div>
            <?php endif; ?>
        </div>
        
        <div class="row">
            <?php if ($query->have_posts()): while ($query->have_posts()): $query->the_post(); ?>
                <div class="col-lg-4 col-md-4">
                    <div class="fh5co-blog animate-box">
                        <a href="<?php the_permalink(); ?>">
                            <?php if (has_post_thumbnail()): ?>
                                <?php the_post_thumbnail(); ?>
                            <?php else: ?>
                                <img src="https://picsum.photos/360/256" alt="alt"/>
                            <?php endif; ?>
                        </a>
                        <div class="blog-text">
                            <span class="posted_on"><?php the_date('M. j'); ?></span>
                            <span class="comment"><a href=""><?php comments_number(); ?><i class="icon-speech-bubble"></i></a></span>
                            <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                            <p><?php the_content(''); ?></p>
                            <a href="<?php the_permalink(); ?>" class="btn btn-primary">Read More</a>
                        </div> 
                    </div>
                </div>
            <?php endwhile; ?>
                <!-- post pagination -->
            <?php else: ?>
                <!-- no posts found -->
            <?php endif; ?>
        </div>
