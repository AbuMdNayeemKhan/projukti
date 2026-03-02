        <section class="blog">
            <div class="container">

                <div class="blog-heading">
                    <h3><?php echo esc_html(get_theme_mod('projukti_blog_title'));?></h3>
                    <p><?php echo esc_html(get_theme_mod('projukti_blog_discription'));?></p>
                </div>

                <div class="blog-wrapper">
                    <?php 
                        $posts = new WP_Query(array(
                            'post_type' => 'post',
                            'posts_per_page' => 6,
                            'order' => 'DESC'
                        ));
                        if($posts->have_posts()) : 
                            while($posts->have_posts()) : $posts -> the_post();
                    ?>
                    <!----- blog-1 ----->
                    <div class="sngle-blog blog-1">
                        <div class="img">
                            <a href="<?php the_permalink(); ?>"></a>
                            <?php
                                if(has_post_thumbnail()){
                                    the_post_thumbnail('medium');
                                } else {
                                    echo '<img src="<?php echo get_template_directory_uri(); ?>/assets/images/blog-1.png" alt="course-1">';
                                }
                            ?>
                        </div>

                        <div class="single-blog-details">
                            <!----- blog-details ----->
                            <div class="date">
                                <div class="yellow-cercel"></div>
                                <span><?php echo get_the_date('d F Y'); ?></span>
                            </div>

                            <hr>

                            <div class="blog-title">
                                <span>
                                    <a href="<?php the_permalink(); ?>">
                                        <?php the_title(); ?>
                                    </a>
                                </span>
                            </div>

                            <!----- btn ----->
                            <div class="yellow-bg-btn read-more">
                                <a href="<?php the_permalink(); ?>">
                                    <?php echo __('Read More', 'projukti') ?>
                                </a>
                            </div>
                        </div>
                    </div>
                    <?php
                        endwhile;
                        wp_reset_postdata();
                    else: echo '<p>'.__('No Blog Post Found').'</p>';
                    endif;
                    ?>
                </div>
            </div>
        </section>