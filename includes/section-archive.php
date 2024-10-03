<?php if(have_posts() ): while( have_posts() ): the_post(); ?>

    <?php
    $fname = get_the_author_meta('first_name');
    $lname = get_the_author_meta('last_name');
    ?> 
    <div class="card mb-2 primary-background text-white">
        <div class="card-body">
            
            <div class="row justify-content-center align-items-center">
                <?php if(has_post_thumbnail()): ?>
                <div class="col-lg-2 col-md-4 col-sm-12">
                    <a href="<?php the_permalink(); ?>">
                        <img class="img-thumbnail mb-3" src="<?php the_post_thumbnail_url();?>" alt="<?php the_title(); ?>">
                    </a>
                </div>
                <?php endif; ?>
                <div class="col remove-link-style-normal">
                    <a href="<?php the_permalink(); ?>"><h2 class="font-bold"><?php the_title(); ?></h2></a>
                    <a href="<?php the_permalink(); ?>"><p><?php echo get_the_date();?> By <?php echo $fname; ?> <?php echo $lname; ?></p></a>
                    <a class="<?php the_permalink(); ?>"><?php the_excerpt(); ?></a>
                    <a class="btn btn-primary font-semibold py-2" href="<?php the_permalink(); ?>">Read More</a>
                </div>
            </div>
        </div>
    </div>

<?php endwhile; else: endif;?>