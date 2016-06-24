<?php get_header(); ?>
<div class="wrapper">
	<div class="black_line">
		<div class="w_897">
			<?php dynamic_sidebar('black_line_icons'); ?>
			<?php dynamic_sidebar('top_phone_call'); ?>
		</div>
	</div><!--black_line-->
	<div class="logo_mnu_banner">
		<div class="w_897">
			<div class="col-mnu-logo">
				<a href="/" class="logo"><img src="<? bloginfo('template_url') ?>/img/logo.png" alt=""></a>
				<div class="col-mnu">
					<div class="hidden-lg">
						<a href="#" class="toggle-mnu"><span></span></a>
					</div>
					<?php dynamic_sidebar('top_mnu'); ?>
				</div><!--col-mnu-->
			</div>
			<?php dynamic_sidebar('top_banner'); ?>
		</div>
	</div><!--logo_mnu_banner-->
	<div class="services">
		<div class="w_897">
			<?php dynamic_sidebar('services'); ?>
		</div>
	</div><!--services-->
	<div class="bottom">
		<div class="w_897">
			<div id="production">
				<?php dynamic_sidebar('production'); ?>
				<?php wp_nav_menu(array('theme_location' => 'prod-menu1', 'container' => false)); ?>
				<?php wp_nav_menu(array('theme_location' => 'prod-menu2', 'container' => false)); ?>
				<?php wp_nav_menu(array('theme_location' => 'prod-menu3', 'container' => false)); ?>
			</div>
		</div>
		<?php dynamic_sidebar('work_with_us'); ?>
		<a id="order_call" name="order_call"></a>
		<?php dynamic_sidebar('form'); ?>
	</div><!--bottom-->
	<?php get_footer(); ?>

	