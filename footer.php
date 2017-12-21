        <footer class="footer footer-default">
            <div class="container">
                <nav>
                    <ul>
                        <?php
                          $menu_name = 'Footer'; // this is the registered menu name
                          if ( ( $locations = get_nav_menu_locations() ) && isset( $locations[ $menu_name ] ) ) :
                            $menu = wp_get_nav_menu_object( $locations[ $menu_name ] );
                            $menu_items = wp_get_nav_menu_items($menu->term_id);
                            foreach ( (array) $menu_items as $key => $menu_item ) :
                            $title = $menu_item->title;
                            $url = $menu_item->url;
                            echo '<li><a class="dropdown-item" target="_blank" href="' . $url . '">'.$title.'</a></li>';
                        endforeach;
                        endif;
                        ?>
                    </ul>
                </nav>                
                <div class="copyright">
                    <?php bloginfo('name'); ?>, <?=date('Y');?>. Powered by Said Llamas
                </div>
            </div>
        </footer>
    </div>
</body>

<?php wp_footer(); ?>

</html>