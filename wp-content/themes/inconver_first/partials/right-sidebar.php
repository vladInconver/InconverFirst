<div class="col-md-3 technology-right-1">
                <div class="blo-top">
                    <div class="tech-btm">
                    <img src="images/banner1.jpg" class="img-responsive" alt=""/>
                    </div>
                </div>
                <div class="blo-top">
                    <div class="tech-btm">
                    <h4>Sign up to our newsletter</h4>
                    <p>Pellentesque dui, non felis. Maecenas male</p>
                        <div class="name">
                            <form>
                                <input type="text" placeholder="Email" required="">
                            </form>
                        </div>  
                        <div class="button">
                            <form>
                                <input type="submit" value="Subscribe">
                            </form>
                        </div>
                            <div class="clearfix"> </div>
                    </div>
                </div>
                <div class="blo-top1">
                    <div class="tech-btm">
                        <?php 
                            $args = array(
                                'orderby' => 'meta_value_num',
                                'meta_query' => array( 
                                    array('key' => 'post_views_count',
                                        'compare' => '=', 
                                        'type' => 'NUMERIC'
                                    )
                                ),
                            );    
                            $query = new WP_Query( $args );
                        ?>
                        <h4>Top stories of the week </h4>
                        <?php if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post(); ?>
                            <div class="blog-grids">
                                <div class="blog-grid-left">
                                    <?php if ( has_post_thumbnail()) { ?>
                                        <a href="<?php the_permalink(); ?>"><?php echo get_the_post_thumbnail($post->ID,'post-sidebarThumb') ?></a>
                                    <?php } else {?>
                                        <a href="<?php the_permalink(); ?>"><img src="http://placehold.it/89x85"></a>
                                    <?php }?>
                                </div>
                                <div class="blog-grid-right">
                                    
                                    <h5><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
                                </div>
                                <div class="clearfix"> </div>
                            </div>
                        <?php endwhile; endif; ?>
                    </div>
                </div>
            
        </div>
        <div class="clearfix"></div>
        <!-- technology-right -->