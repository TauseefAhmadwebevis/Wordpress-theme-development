
<?php  
    get_header();
    if(have_posts()){
        while (have_posts()){
            the_post();
            ?>
                <!-- ============ php post thumb nail=========== -->
                <div class="container">
                    <div class="row">
                        <div class="<?php if(has_post_thumbnail()){echo('col-lg-3');}else{echo('col-lg-12');} ?>">
                            <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('small-thumbnail'); ?></a>
                        </div>
                        <div class="<?php if(has_post_thumbnail()){echo('col-lg-9');}else{echo('col-lg-12');} ?>">
                <!-- ================for excrept coding===============  -->
                            <h2><a href="<?php the_permalink(); ?>"> <?php the_title(); ?></a></h2>
                            <p>
                                <?php echo(the_excerpt()); ?>
                                <a href="<?php the_permalink(); ?>">Read More&raquo;</a>
                            </p>
                        </div>
                    </div>
                    <hr>
                </div>
            <?php
        }
    }
    else{
        echo("<h3 class='container'>" . "No related content to your search" . "</h3>");
    }
    get_footer();
?>