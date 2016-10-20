<!-- technology-top -->
<div class="soci">
	<ul>
		<li><a href="#" class="facebook-1"> </a></li>
		<li><a href="#" class="facebook-1 twitter"> </a></li>
		<li><a href="#" class="facebook-1 chrome"> </a></li>
		<li><a href="#"><i class="glyphicon glyphicon-envelope"> </i></a></li>
		<li><a href="#"><i class="glyphicon glyphicon-print"> </i></a></li>
		<li><a href="#"><i class="glyphicon glyphicon-plus"> </i></a></li>
	</ul>
</div>
 <div class="tc-ch">
		<div class="tch-img">
			<?php if ( has_post_thumbnail()) { ?>
	            <a href="<?php the_permalink(); ?>"><?php echo get_the_post_thumbnail($post->ID,'post-blogImg') ?></a>
	        <?php } else {?>
	            <a href="<?php the_permalink(); ?>"><img src="http://placehold.it/656x308"></a>
	        <?php }?>
		</div>
		<a class="blog orn" href="singlepage.html">Business</a>
		<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
			<p><?php echo get_the_excerpt(); ?></p>
		
			<div class="blog-poast-info">
				<ul>
					<li><i class="glyphicon glyphicon-user"> </i> <?php echo the_author_posts_link(); ?></li>
					<li><i class="glyphicon glyphicon-calendar"> </i><?php echo get_the_date('d-m-Y');?></li>
					<li>
						<i class="glyphicon glyphicon-comment"> </i>
						<a class="p-blog" href="<?php the_permalink() ?>#comments">
							<?php comments_number('пока нет комментариев', '1 комменатрий', '% комментариев'); ?> 
						</a>
					</li>
					<li><i class="glyphicon glyphicon-heart"> </i><a class="admin" href="#">5 favourites </a></li>
					<li>
						<i class="glyphicon glyphicon-eye-open"> </i>
						<?php echo ale_getPostViews(get_the_ID());?> 
						<?php _e('views', 'aletheme')?>
					</li>
				</ul>
			</div>
</div>
<!-- technology-top -->