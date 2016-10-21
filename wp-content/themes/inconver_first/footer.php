    <!-- Footer -->
    <?php /*?>
    <nav class="footer-menu <?php if($post->post_type == "gallery" and !is_single()) { echo""; } elseif(is_page_template('template-contact.php') or is_page_template('template-about.php') or is_404() or is_page_template('template-award.php') or is_page_template('page-home.php')  or is_page_template('template-press.php')){  echo ""; } else { echo "no-fixed";}    ?>">

        <!-- Social -->
        <ul class="left">
            <?php if(ale_get_option('fb')){ echo '<li class="facebook"><a href="'.ale_get_option('fb').'" rel="external"></a></li>'; } ?>
            <?php if(ale_get_option('twi')){ echo '<li class="twitter"><a href="'.ale_get_option('twi').'" rel="external"></a></li>'; } ?>
            <?php if(ale_get_option('gog')){ echo '<li class="google"><a href="'.ale_get_option('gog').'" rel="external"></a></li>'; } ?>
            <?php if(ale_get_option('pint')){ echo '<li class="pinterest"><a href="'.ale_get_option('pint').'" rel="external"></a></li>'; } ?>
            <?php if(ale_get_option('flickr')){ echo '<li class="flickr"><a href="'.ale_get_option('flickr').'" rel="external"></a></li>'; } ?>
            <?php if(ale_get_option('linked')){ echo '<li class="linkedin"><a href="'.ale_get_option('linked').'" rel="external"></a></li>'; } ?>
            <?php if(ale_get_option('insta')){ echo '<li class="instagram"><a href="'.ale_get_option('insta').'" rel="external"></a></li>'; } ?>
            <?php if(ale_get_option('emailcont')){ echo '<li class="mail"><a href="mailto:'.ale_get_option('emailcont').'" rel="external"></a></li>'; } ?>
            <?php if(ale_get_option('rssicon')){?><li class="rss"><a href="<?php echo home_url(); ?>/feed" rel="external"></a></li><?php } ?>
        </ul>

        <?php if(is_page_template('page-home.php')){ ?>
        <!-- Footer Menu -->
        <div class="center">
            <ul class="nav">
                <li><span><?php echo ale_get_option('footermenutitle'); ?></span>
                    <?php
                    if ( has_nav_menu( 'footer_menu' ) ) {
                        wp_nav_menu(array(
                            'theme_location'=> 'footer_menu',
                            'menu'			=> 'Footer Menu',
                            'menu_class'	=> 'footermenu cf',
                            'walker'		=> new Aletheme_Nav_Walker(),
                            'container'		=> '',
                        ));
                    }
                    ?>
                </li>
            </ul>
        </div>
        <?php } ?>

        <!-- Copy -->
        <?php if (ale_get_option('copyrights')) : ?>
            <p class="right"><?php echo ale_option('copyrights'); ?></p>
        <?php else: ?>
            <p class="right">&copy; <?php _e('2013 ALL RIGHTS RESERVED', 'aletheme')?></p>
        <?php endif; ?>

    </nav>
    <!-- Scripts -->
    <?php */?>
            <!-- technology-right -->

            </div>
            <?php get_sidebar(); ?>
            
        </div>
    </div>
<!-- technology -->

<!-- footer -->
    <div class="footer_pagination">
        <div class="copyright">
            <div class="container">
                <span class="prev_pagination_link">
                    <?php
                        if (get_next_posts_link() || get_previous_posts_link()) {
                            if ( get_previous_posts_link()) {
                                echo get_previous_posts_link('<i class="glyphicon glyphicon-chevron-left"></i>');
                            } else{
                                echo '<span><i class="glyphicon glyphicon-chevron-left"></i></pan>';
                            }
                            ?>
                            </span>
                            <?php ale_page_links();?>
                            <span class="next_pagination_link">
                                <?php if (get_next_posts_link()) {
                                echo get_next_posts_link('<i class="glyphicon glyphicon-chevron-right"></i>');
                            }else{
                                echo '<span><i class="glyphicon glyphicon-chevron-right"></i></pan>';
                            }
                        }
                    ?>
                </span>
            </div>
        </div>  
    </div>
    <div class="footer">
        <div class="container">
            <div class="col-md-4 footer-left">
                <h6>THIS LOOKS GREAT</h6>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt consectetur adipisicing elit,</p>
            </div>
            <div class="col-md-4 footer-middle">
            <h4>Twitter Feed</h4>
            <div class="mid-btm">
                <p>Consectetur adipisicing</p>
                <p>Sed do eiusmod tempor</p>
                <a href="https://w3layouts.com/">https://w3layouts.com/</a>
            </div>
            
                <p>Consectetur adipisicing</p>
                <p>Sed do eiusmod tempor</p>
                <a href="https://w3layouts.com/">https://w3layouts.com/</a>
        
            </div>
            <div class="col-md-4 footer-right">
                <h4>Quick Links</h4>
                <li><a href="#">Eiusmod tempor</a></li>
                <li><a href="#">Consectetur </a></li>
                <li><a href="#">Adipisicing elit</a></li>
                <li><a href="#">Eiusmod tempor</a></li>
                <li><a href="#">Consectetur </a></li>
                <li><a href="#">Adipisicing elit</a></li>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
<!-- footer -->
<!-- footer-bottom -->
    <div class="foot-nav">
    <div class="container">
        <ul>
           <?php if(has_nav_menu('header_menu')){
                        wp_nav_menu( array(
                            'theme_location' => 'header_menu', 
                            'menu' => 'Header Menu',
                            'menu_class' => '',
                            'walker' => new Aletheme_Nav_Walker(),
                            'container' => '',
                            ));
                    } ?>
            <div class="clearfix"></div>
        </ul>
        </div>
                </div>
<!-- footer-bottom -->
    <div class="copyright">
        <div class="container">
            <p><?php if(ale_get_option('footercopyright')){?>
                    <p><?php echo ale_get_option('footercopyright');?></p>
                <?php } ?></p>
        </div>
    </div>
    <?php wp_footer(); ?>
</body>
</html>