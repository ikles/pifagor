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
			<div class="production">
				<h2>Наша продукция</h2>
				<ul class="first_mnu">
					<li><a href="#">Визитки</a></li>
					<li><a href="#">Листовки</a></li>
					<li><a href="#">Буклеты</a></li>
					<li><a href="#">Брошюры</a></li>
					<li><a href="#">Календари</a></li>						
				</ul>
				<ul class="second_mnu">
					<li><a href="#">Открытки/Приглашения</a></li>
					<li><a href="#">Флаеры</a></li>
					<li><a href="#">Постеры</a></li>
					<li><a href="#">Папки</a></li>
					<li><a href="#">Наклейки/Стикеры</a></li>
				</ul>
				<ul class="third_mnu">
					<li><a href="#">Пакеты бумажные</a></li>
					<li><a href="#">крафт пакеты</a></li>
					<li><a href="#">печать на пакетах</a></li>
					<li><a href="#">картонная упаковка</a></li>
					<li><a href="#">нанесение логотипа</a></li>
				</ul>
			</div>
		</div><!--production-->
		<div class="work_with_us">
			<div class="w_897">
				<h2>C нами работают</h2>
				<table>
					<tr>
						<td><img src="<? bloginfo('template_url') ?>/img/partner7.png" alt=""></td>
						<td><img src="<? bloginfo('template_url') ?>/img/partner6.png" alt=""></td>
						<td><img src="<? bloginfo('template_url') ?>/img/partner5.png" alt=""></td>
					</tr>
					<tr>
						<td><img src="<? bloginfo('template_url') ?>/img/partner4.png" alt=""></td>
						<td>
							<img src="<? bloginfo('template_url') ?>/img/partner34.png" alt="">	
						</td>
						<td><img src="<? bloginfo('template_url') ?>/img/partner1.png" alt=""></td>
					</tr>
				</table>
			</div>
		</div><!--work_with_us-->
		<div class="form">
			<div class="w_897">
				<h2>Оставьте заявку на расчет вашего заказа</h2>
				<span>В ближайшее время вам позвонит наш менеджер,<br>
					уточнит детали и сделает моментальный расчет стоимости вашей печатной продукции</span>
					<form>
						<input type="text" placeholder="Введите Ваше имя">
						<input type="text" placeholder="Введите Ваш телефон">
						<button>Рассчитать</button>
					</form>
					<div class="prot">Мы против спама!</div>
				</div>		
			</div><!--form-->
		</div><!--bottom-->
		<?php get_footer(); ?>