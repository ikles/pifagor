<div class="footer">
	<div class="footer_left">
		<a href="/" class="footer_logo"><img src="<? bloginfo('template_url') ?>/img/logo_footer.png" alt=""></a>
		<?php dynamic_sidebar('copyright'); ?>
	</div><!--footer_left-->
	<div class="footer_center">
		<?php dynamic_sidebar('footer_adress'); ?>
		<?php dynamic_sidebar('footer_phone'); ?>	
		<?php dynamic_sidebar('footer_mail'); ?>
	</div><!--footer_center-->
	<div class="footer_right">
		<div class="dev">
			<span>ПРОДВИЖЕНИЕ САЙТА С ОПЛАТОЙ ПО ФАКТУ:</span>
			<a href="http://whitelab.pro/" target="_blank">WHITELAB.PRO</a>
		</div>
		<?php dynamic_sidebar('footer_social'); ?>
	</div><!--footer_right-->
</div><!--footer-->
</div><!--wrapper-->
<? wp_footer(); ?>
</body>
</html>