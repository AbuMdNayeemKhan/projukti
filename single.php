<?php get_header(); ?>
<section class="blog-details">
    <div class="container">
        <div class="blog-details-wrapper">

            <!-- Blog Content -->
            <div class="blog-content">
                <?php if(have_posts()) : while(have_posts()) : the_post() ; ?>
                <div class="blog-meta">
                    <div class="date">
                        <div class="yellow-circle"></div>
                        <span><?php echo get_the_date();?></span>
                    </div>
                </div>

                <h1 class="blog-title"><?php echo the_title();?></h1>

                <div class="author">
                    <div class="author-avatar">
                        <img src="<?php echo get_avatar_url( get_the_author_meta('ID') ); ?>" alt="Author">
                    </div>
                    <span class="author-name">By <?php the_author(); ?></span>
                </div>

                <div class="featured-image">
                    <?php the_post_thumbnail('full');?>
                    <!-- <img src="featured.jpg" alt="Featured Image"> -->
                </div>

                <div class="blog-text">
                    <?php the_content(); ?>
                </div>

                <!-- Tags -->
                <div class="blog-tags">
                    <span>Tags:</span>
                    <?php the_tags('','',''); ?>
                </div>

                <!-- Social Share -->
                <div class="social-share">
                    <span>Share:</span>
                    <a href="https://www.facebook.com/sharer.php?u=<?php the_permalink(); ?>" target="_blank" ><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="https://twitter.com/intent/tweet?&url=<?php the_permalink(); ?>" target="_blank" ><i class="fa-brands fa-x-twitter"></i></a>
                    <a href="https://www.linkedin.com/shareArticle?mini=true&url=<?php the_permalink(); ?>" target="_blank" ><i class="fa-brands fa-linkedin-in"></i></a>
                </div>

                <!-- Author Box -->
                <div class="author-box">
                    <div class="author-avatar">
                        <img src="<?php echo get_avatar_url( get_the_author_meta('ID') ); ?>" alt="Author">
                    </div>
                    <div class="author-info">
                        <h3><?php the_author(); ?></h3>
                        <p><? echo get_the_author_meta('description'); ?></p>
                        <div class="author-social">
                            <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                            <a href="#"><i class="fa-brands fa-x-twitter"></i></a>
                            <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>

                <!-- Comments Section -->
                <div class="comments-section">
                    <h2 class="section-title">2 Comments</h2>

                    <div class="comment">
                        <div class="comment-avatar">
                            <img src="user1.jpg" alt="User">
                        </div>
                        <div class="comment-content">
                            <div class="comment-meta">
                                <h4>John Doe</h4>
                                <span class="comment-date">February 24, 2026</span>
                            </div>
                            <p>This article was very helpful. Thank you for sharing!</p>
                            <div class="comment-actions">
                                <a href="#" class="reply-btn">Reply</a>
                            </div>
                        </div>
                    </div>

                    <div class="comment reply">
                        <div class="comment-avatar">
                            <img src="user2.jpg" alt="User">
                        </div>
                        <div class="comment-content">
                            <div class="comment-meta">
                                <h4>Admin</h4>
                                <span class="comment-date">February 25, 2026</span>
                            </div>
                            <p>Thank you for your feedback!</p>
                            <div class="comment-actions">
                                <a href="#" class="reply-btn">Reply</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Comment Form -->
                <div class="comment-form">
                    <h2 class="section-title">Leave a Comment</h2>

                    <form>
                        <div class="form-group">
                            <textarea placeholder="Your Comment"></textarea>
                        </div>

                        <div class="form-row">
                            <div class="form-group">
                                <input type="text" placeholder="Your Name">
                            </div>
                            <div class="form-group">
                                <input type="email" placeholder="Your Email">
                            </div>
                        </div>

                        <button type="submit" class="submit-btn">Post Comment</button>
                    </form>
                </div>
                <?php endwhile; endif; ?>
            </div>

        </div>
    </div>
</section>
<?php get_footer();?>