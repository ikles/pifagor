<?php get_header(); ?>
	<div class="wrapper">
		<div class="left_and_right">
			<div class="left">
				<a href="/" class="logo">
					<div>vodoem<span>.su</span></div>
					<span class="desc_logo">Строительство водоемов</span>
				</a>
				<?php dynamic_sidebar('left_mnu'); ?>
				<?php dynamic_sidebar('left_phones'); ?>
				<?php dynamic_sidebar('blue_block'); ?>
				<?php dynamic_sidebar('left_licenz'); ?>	
				<?php dynamic_sidebar('left_interst'); ?>		
				</div><!--left-->
				<div class="right">
					<?php dynamic_sidebar('slider'); ?>
					<div class="inner_center">
						<?php dynamic_sidebar('cats'); ?>
					</div>
					<div class="inner_right">
						<?php dynamic_sidebar('right_news'); ?>
						<?php dynamic_sidebar('right_photogal'); ?>
						<?php dynamic_sidebar('right_cart'); ?>
					</div><!--inner_right-->
				</div><!--right-->
			</div><!--left_and_right-->
			<?php dynamic_sidebar('brands'); ?>
			<?php get_footer(); ?>