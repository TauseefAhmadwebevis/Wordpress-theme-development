
<?php  
    get_header();
    if(have_posts()){
        ?>
                 <h3><?php 
                    if(is_category()){
                        single_cat_title();
                    }
                    elseif(is_tag()){
                        single_tag_title();
                    }
                    elseif(is_author()){
                        the_post();
                        echo("Author Archive: " . get_the_author());
                        rewind_posts();
                    }
                    elseif(is_day()){
                        echo("The Daily Archive: " . get_the_date());
                    }
                    elseif(is_month()){
                        echo("The Month Archive: " . get_the_date('F Y'));
                    }
                    elseif(is_year()){
                        echo("The Month Archive: " . get_the_date('Y'));

                    }
                    else{
                        echo 'Archive';
                    }
                ?></h3>
        <?php
        while (have_posts()){
            the_post();
            ?>
                <h2><a href="<?php the_permalink(); ?>"> <?php the_title(); ?></a></h2>
                <div class="post-info"><p>By <?php the_author_posts_link(); ?> at <?php the_time('d/m/y'); ?> in <?php echo(get_the_category_list(' ')); ?></p></div>
                <p><?php the_excerpt(); ?></p>
                <hr>
            <?php
        }
    }
    else{
        echo("<h1>" . "You Have no psts Yet" . "</h1>");
    }
    get_footer();
?>