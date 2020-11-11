<?php  
        get_header();
        while (have_posts()){
            the_post();
            ?>
            <?php
                if(has_children() or $post->post_parent >0){
            
            ?>
              <?php
                    $args=array(
                        'child_of' => get_top_ancestor_id(),
                        'title_li' => null
                    );
                    wp_list_pages($args);
                ?>
                <?php } 
                
                    else{?>
                        <div class="childre-links">
                         <span class="parent-link"><a href="<?php get_the_permalink(get_top_ancestor_id()); ?>"><?php echo(get_the_title(get_top_ancestor_id())); ?></a></span>
                        </div>
                    <?php
                        
                    }
                ?>
                <h2> <?php the_title(); ?></h2>
                <p><?php the_content(); ?></p>
            <?php
        }
        get_footer();

?>