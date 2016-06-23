$(function() {
	var sl_he = $('.slider').innerHeight();
	var m_gal = $('.main_gal').innerHeight();
	var he = $('.left').innerHeight() - sl_he;
	if (m_gal)  {
		he = he-m_gal;
		console.log('Высота галереи ' + m_gal + 'px');
	}
	else {
		console.log('Нет высоты галереи');
	}
	$('.main_content').css('minHeight',he);


	var h_cats = $('.cats').innerHeight();
	var h_r_news = $('.right_news').innerHeight();
	var h_r_photogal = $('.right_photogal').innerHeight();
	var h_cart = h_cats - h_r_news - h_r_photogal+'px';
	$('.right_cart').css('height',h_cart);


}); //ready 



