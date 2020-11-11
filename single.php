<?php  
        get_header();
        while (have_posts()){
            the_post();
            ?>
                <div class="container">
                    <div class="col-12">
                        <?php the_post_thumbnail('banner-image'); ?>
                    </div>
                    <h2> <?php the_title(); ?></h2>
                    <p><?php the_content(); ?></p>

                </div>
            <?php
        }
        get_footer();

?>