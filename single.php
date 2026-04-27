<?php get_header(); ?>

<div class="container">
    <?php if(has_post_thumbnail()): ?>
        <img class="img-fluid object-cover mb-4" src="<?php the_post_thumbnail_url();?>" alt="<?php the_title(); ?>">
    <?php endif; ?>
    <?php get_template_part('includes/section', 'blogcontent'); ?>
</div>

<?php get_footer(); ?>