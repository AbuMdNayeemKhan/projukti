<?php get_header();?>
    <main>
        <!----- hero section ----->
        <?php get_template_part('sections/hero');?>
        
        <!----- Courses section ----->
        <?php get_template_part('sections/courses');?>

        <!----- testimonial section ----->
        <?php get_template_part('sections/testimonial');?>

        <!----- features section ----->
        <?php get_template_part('sections/features')?>

        <!----- CTA section ----->
        <?php get_template_part('sections/cta')?>

        <!----- our blog section ----->
        <?php get_template_part('sections/blog')?>
    </main>
<?php get_footer();?>