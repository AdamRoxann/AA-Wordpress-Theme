<?php if(have_posts() ): while( have_posts() ): the_post(); ?>

    <h1 class="font-bold primary-color"><?php the_title(); ?></h1>

    <?php
    $fname = get_the_author_meta('first_name');
    $lname = get_the_author_meta('last_name');
    ?> 
    <p class="primary-color"><?php echo get_the_date();?> By <?php echo $fname; ?> <?php echo $lname; ?></p>

    <?php the_content(); ?>

    <div class="d-flex primary-color">
    <p>Related Tags & Categories :</p>
    <?php
    $categories = get_the_category();
    foreach($categories as $cat): ?>
        <p>
            <a href="<?php echo get_tag_link($cat->term_id) ?>" class="badge rounded bg-info text-decoration-none mx-1">
                <?php echo $cat->name ?>
            </a>
        </p>
    <?php endforeach; ?>
    <?php
    $tags = get_the_tags();
    foreach($tags as $tag): ?>
        <p>
            <a href="<?php echo get_tag_link($tag->term_id) ?>" class="badge rounded bg-info text-decoration-none mx-1">
                #<?php echo $tag->name ?>
            </a>
        </p>
    <?php endforeach; ?>
    </div>

<?php endwhile; else: endif;?>