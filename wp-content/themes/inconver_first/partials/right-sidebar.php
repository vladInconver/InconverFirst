<div class="col-md-3 technology-right-1">
    <div class="blo-top">
        <div class="tech-btm">
            <?php if(ale_get_option('image_rigt_sid')){?>
                <img src="<?php echo ale_get_option('image_rigt_sid')?>" class="img-responsive" alt=""/>
            <?php }?>
        </div>
    </div>
    <div class="blo-top">
        <div class="tech-btm">
            <?php if(ale_get_option('head_rigt_sid')){?>
                <h4><?php echo ale_get_option('head_rigt_sid')?></h4>
            <?php }?>
            <?php if(ale_get_option('text_rigt_sid')){?>
                <p><?php echo ale_get_option('text_rigt_sid')?></p>
            <?php }?>
            <form method="post" action="<?php the_permalink();?>">
                <?php if (isset($_GET['success'])) : ?>
                    <p class="success"><?php _e('Thank you for your message!', 'aletheme')?></p>
                <?php endif; ?>
                <?php if (isset($error) && isset($error['msg'])) : ?>
                    <p class="error"><?php echo $error['msg']?></p>
                <?php endif; ?>
                <div class="name">
                    <input name="contact[email]" type="emai" placeholder="Email (required)" value="<?php echo isset($_POST['contact']['email']) ? $_POST['contact']['email'] : ''?>" required="required" id="contact-form-email" />
                </div>
                <div class="button">
                    <input type="submit" class="submit" value="<?php _e('Submit', 'aletheme')?>"/>
                </div>
                <?php wp_nonce_field() ?>
            </form>
            <div class="clearfix"> </div>
        </div>
    </div>
    <div class="blo-top">
        <div class="tech-btm">
            <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('main-sidebar') ) : endif; ?>
        </div>
    </div>
    <div class="blo-top1">
        <div class="tech-btm">
            <h4>Top stories of the week </h4> 
           
            <?php 
                $recent_posts = wp_get_recent_posts();
                foreach( $recent_posts as $recent ){
                    if($recent['post_status']=="publish"){?>
                        <div class="blog-grids">
                            <div class="blog-grid-left">
                                <?php if ( has_post_thumbnail($recent["ID"])) { ?>
                                    <a href="<?php echo get_permalink($recent["ID"]); ?>" title="<?php echo esc_attr($recent["post_title"])?>"><?php echo get_the_post_thumbnail($recent["ID"], 'post-sidebarThumb'); ?></a>
                                <?php } else {?>
                                    <a href="<?php the_permalink(); ?>"><img src="http://placehold.it/89x85"></a>
                                <?php }?>
                            </div>
                            <div class="blog-grid-right">
                                <h5><a href="<?php echo get_permalink($recent["ID"]); ?>"><?php echo $recent["post_title"]; ?></a></h5>
                            </div>
                            <div class="clearfix"> </div>
                        </div>
            <?php       
                    }
                } 
            ?>
        </div>
    </div>
</div>
<div class="clearfix"></div>
<!-- technology-right -->