
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
                            <div class="post-info"><p>By <?php the_author_posts_link(); ?> at <?php the_time('d/m/y'); ?> in <?php echo(get_the_category_list(' ')); ?></p></div>
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
        echo("<h1>" . "You Have no psts Yet" . "</h1>");
    }
    get_footer();
?>