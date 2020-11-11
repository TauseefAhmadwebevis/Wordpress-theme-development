<?php  
        get_header();
        while (have_posts()){
            the_post();
            ?>
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <h2><?php the_title(); ?></h2>
                    </div>
                    <div class="col-lg-8">
                    <p><?php the_content(); ?></p>
                    </div>
                </div>
            </div>
            <?php
        }
        get_footer();

?>