    <div class="footer">
    <?php 
                $args= array(
                    'theme_location' => 'footermenue',
                            );
                wp_nav_menu($args); 
            
        ?>
    </div>
</div>
<?php wp_footer(); ?>
</body>
</html>