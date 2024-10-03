<?php get_header(); ?>

<div class="container">
    <h3 class="my-3 font-bold"><?php echo single_cat_title(); ?></h3>
    <?php get_template_part('includes/section', 'archive'); ?>
    <p class="float-end nav-link text-white text-decoration-none"><?php the_posts_pagination(); ?></p>
</div>

<?php get_footer(); ?>