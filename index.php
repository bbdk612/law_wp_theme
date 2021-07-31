<?php get_header(); ?>

<div id="fh5co-blog" class="fh5co-bg-section">
                <div class="container">
                    <div class="row">
                        <?php if (have_posts()): while (have_posts()): the_post(); ?>
                        
                        <div class="col-lg-4 col-md-4">
                            <div class="fh5co-blog animate-box">
                                <a href="<?php the_permalink() ?>">
                                <?php if (has_post_thumbnail()): ?>
                                    <?php the_post_thumbnail(); ?>
                                <?php else: ?>
                                    <img src="https://picsum.photos/360/256" alt="alt"/>
                                <?php endif; ?>
                                </a>
                                <div class="blog-text">
                                    <span class="posted_on">
                                        <?php the_date('M. j');?>
                                    </span>
                                    <span class="comment"><a href="<?php comments_link() ?>"><?php comments_number(); ?><i class="icon-speech-bubble"></i></a></span>
                                    <h3><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3>
                                    <p><?php the_content(''); ?></p>
                                    <a href="<?php the_permalink(); ?>" class="btn btn-primary">Read More</a>
                                </div> 
                            </div>
                        </div>
                        
                        <?php endwhile; ?>
                            <!--post navigation -->
                        <?php else: ?>
                            <!-- no posts found -->
                        <?php endif; ?>
                    </div>
                </div>
            </div>

<?php get_footer(); ?>