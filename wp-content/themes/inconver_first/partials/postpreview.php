<!-- Blog Item -->
<div class="rev-1">
    <div class="rev-img">
        <?php if ( has_post_thumbnail()) { ?>
            <a href="<?php the_permalink(); ?>"><?php echo get_the_post_thumbnail($post->ID,'post-blogThumb') ?></a>
        <?php } else {?>
            <a href="<?php the_permalink(); ?>"><img src="http://placehold.it/282x132"></a>
        <?php }?>
    </div>
    <div class="rev-info">
        <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
        <p><?php echo ale_trim_excerpt('22'); ?></p>
    </div>
    <div class="clearfix"></div>
</div>