<!doctype html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<title><?php wp_title('|', true, 'right'); bloginfo('name'); ?></title>
	<?php wp_head(); ?>
</head>
<body <?php body_class()?> >

	<!--start-main-->
           <div class="header">
		        <div class="header-top">
			        <div class="container">
						<div class="logo">
						<?php if(ale_get_option('sitelogo')){?>
							<a href="<?php echo home_url();?>"><h1><?php echo ale_get_option('sitelogo');?></h1></a>
							<?php } ?>
						</div>
						<div class="search">
						<?php get_search_form();?>
						</div>
						<div class="social">
							<ul>
								<?php if(ale_get_option('fb')){?>
									<li><a href="<?php echo ale_get_option('fb');?>" class="facebook"> </a></li>
								<?php } ?>
								<?php if(ale_get_option('twi')){?>
									<li><a href="<?php echo ale_get_option('twi');?>" class="facebook twitter"> </a></li>
								<?php } ?>
								<?php if(ale_get_option('gog')){?>
									<li><a href="<?php echo ale_get_option('gog');?>" class="facebook chrome"> </a></li>
								<?php } ?>
								<?php if(ale_get_option('linked')){?>
									<li><a href="<?php echo ale_get_option('linked');?>" class="facebook in"> </a></li>
								<?php } ?>
								<?php if(ale_get_option('beh')){?>
									<li><a href="<?php echo ale_get_option('beh');?>" class="facebook beh"> </a></li>
								<?php } ?>
								<?php if(ale_get_option('vim')){?>
									<li><a href="<?php echo ale_get_option('vim');?>" class="facebook vem"> </a></li>
								<?php } ?>
								<?php if(ale_get_option('yout')){?>
									<li><a href="<?php echo ale_get_option('yout');?>" class="facebook yout"> </a></li>
								<?php } ?>
							</ul>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
<!--head-bottom-->
<div class="head-bottom">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
	        <?php if(has_nav_menu('header_menu')){
	        	wp_nav_menu( array(
	        		'theme_location' => 'header_menu', 
	        		'menu' => 'Header Menu',
	        		'menu_class' => 'nav navbar-nav',
	        		'walker' => new Aletheme_Nav_Walker(),
	        		'container' => '',
	        		));
        	} ?>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
</div>
<!--head-bottom-->
