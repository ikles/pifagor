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
			<div class="center">		
				<div class="col-content">
					<div class="content">					
						<h1>Ошибка 404</h1>		
						<p>Такой страницы не существует</p>				
					</div>
				</div>
				<?php dynamic_sidebar('col-left-mnu'); ?>
			</div><!--center-->
		</div>
	</div><!--logo_mnu_banner-->
	<div class="bottom">
		<a id="order_call" name="order_call"></a>
		<?php dynamic_sidebar('form'); ?>
	</div><!--bottom-->
	<?php get_footer(); ?>