<?php get_header(); ?>

<div class="container">
    <h2 class="my-3 font-bold primary-color"><?php echo single_cat_title(); ?></h2>
    <?php get_template_part('includes/section', 'archive'); ?>
    <p class="float-end nav-link text-white text-decoration-none primary-color"><?php the_posts_pagination(); ?></p>
</div>

<?php get_footer(); ?>