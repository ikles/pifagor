<?php
add_theme_support('post-thumbnails');

register_nav_menu('left-mnu', 'Левое меню');

register_sidebar(array(
'name' => 'Левое меню',
'id' => 'left_mnu',
'description' => '',
'before_widget' => '<div class="left_mnu">',
'after_widget' => '</div>',
'before_title' => '',
'after_title' => ''
));

register_sidebar(array(
'name' => 'Слайдер',
'id' => 'slider',
'description' => '',
'before_widget' => '<div class="slider">',
'after_widget' => '</div>',
'before_title' => '',
'after_title' => ''
));

register_sidebar(array(
'name' => 'Телефоны слева',
'id' => 'left_phones',
'description' => '',
'before_widget' => '<div class="left_phones">',
'after_widget' => '</div>',
'before_title' => '',
'after_title' => ''
));

register_sidebar(array(
'name' => 'Пруд под ключ',
'id' => 'blue_block',
'description' => '',
'before_widget' => '<div class="blue_block">',
'after_widget' => '</div>',
'before_title' => '<div class="blue_block_heading">',
'after_title' => '</div>'
));

register_sidebar(array(
'name' => 'Лицензия',
'id' => 'left_licenz',
'description' => '',
'before_widget' => '<div class="left_licenz">',
'after_widget' => '</div>',
'before_title' => '',
'after_title' => ''
));

register_sidebar(array(
'name' => 'Интересное',
'id' => 'left_interst',
'description' => '',
'before_widget' => '<div class="left_interst">',
'after_widget' => '</div>',
'before_title' => '<div class="left_interst_heading">',
'after_title' => '</div>'
));

register_sidebar(array(
'name' => 'Новости справа',
'id' => 'right_news',
'description' => '',
'before_widget' => '<div class="right_news">',
'after_widget' => '</div>',
'before_title' => '<div class="right_news_heading">',
'after_title' => '</div>'
));

register_sidebar(array(
'name' => 'Галерея справа',
'id' => 'right_photogal',
'description' => '',
'before_widget' => '<div class="right_photogal">',
'after_widget' => '</div>',
'before_title' => '<div class="right_photogal_heading">',
'after_title' => '</div>'
));

register_sidebar(array(
'name' => 'Галерея справа',
'id' => 'right_photogal',
'description' => '',
'before_widget' => '<div class="right_photogal">',
'after_widget' => '</div>',
'before_title' => '<div class="right_photogal_heading">',
'after_title' => '</div>'
));

register_sidebar(array(
'name' => 'Большая галерея',
'id' => 'main_gal',
'description' => '',
'before_widget' => '<div class="main_gal">',
'after_widget' => '</div>',
'before_title' => '<h1>',
'after_title' => '</h1>'
));

register_sidebar(array(
'name' => 'Новости слева',
'id' => 'left_news',
'description' => '',
'before_widget' => '<div class="right_news">',
'after_widget' => '</div>',
'before_title' => '<div class="right_news_heading">',
'after_title' => '</div>'
));

register_sidebar(array(
'name' => 'Категории на главной',
'id' => 'cats',
'description' => '',
'before_widget' => '<div class="cats">',
'after_widget' => '</div>',
'before_title' => '',
'after_title' => ''
));

register_sidebar(array(
'name' => 'Бренды на главной',
'id' => 'brands',
'description' => '',
'before_widget' => '<div class="brands">',
'after_widget' => '</div>',
'before_title' => '',
'after_title' => ''
));

register_sidebar(array(
'name' => 'Копирайт',
'id' => 'copyright',
'description' => '',
'before_widget' => '<div class="copyright">',
'after_widget' => '</div>',
'before_title' => '',
'after_title' => ''
));

register_sidebar(array(
'name' => 'Адрес в футере',
'id' => 'footer_adress',
'description' => '',
'before_widget' => '<div class="footer_adress">',
'after_widget' => '</div>',
'before_title' => '',
'after_title' => ''
));

register_sidebar(array(
'name' => 'Телефон в футере',
'id' => 'footer_phone',
'description' => '',
'before_widget' => '<div class="footer_phone">',
'after_widget' => '</div>',
'before_title' => '',
'after_title' => ''
));

register_sidebar(array(
'name' => 'E-mail в футере',
'id' => 'footer_mail',
'description' => '',
'before_widget' => '<div class="footer_mail">',
'after_widget' => '</div>',
'before_title' => '',
'after_title' => ''
));

register_sidebar(array(
'name' => 'Кнопки соцсетей в футере',
'id' => 'footer_social',
'description' => '',
'before_widget' => '<div class="footer_social">',
'after_widget' => '</div>',
'before_title' => '',
'after_title' => ''
));

register_sidebar(array(
'name' => 'Карта справа',
'id' => 'right_cart',
'description' => '',
'before_widget' => '<div class="right_cart">',
'after_widget' => '</div>',
'before_title' => '',
'after_title' => ''
));



add_action( 'after_setup_theme', 'woocommerce_support' );
function woocommerce_support() {
add_theme_support( 'woocommerce' );
}

/*add_filter('loop_shop_per_page', create_function('$cols', 'return 3;'));

add_filter('loop_shop_columns', 'loop_columns');
if (!function_exists('loop_columns')) {
function loop_columns() {
	return 3;
}
}*/

add_action( 'product_cat_edit_form_fields', 'wpm_taxonomy_edit_meta_field', 10, 2 );

function wpm_taxonomy_edit_meta_field($term) {

$t_id = $term->term_id;
$term_meta = get_option( "taxonomy_$t_id" );
$content = $term_meta['custom_term_meta'] ? wp_kses_post( $term_meta['custom_term_meta'] ) : '';
$settings = array( 'textarea_name' => 'term_meta[custom_term_meta]' );
?>
<tr class="form-field">
	<th scope="row" valign="top"><label for="term_meta[custom_term_meta]">Описание под товарами</label></th>
	<td>
		<?php wp_editor( $content, 'product_cat_details', $settings ); ?>

	</td>
</tr>
<?php
}

add_action( 'edited_product_cat', 'save_taxonomy_custom_meta', 10, 2 );  
add_action( 'create_product_cat', 'save_taxonomy_custom_meta', 10, 2 );

function save_taxonomy_custom_meta( $term_id ) {
if ( isset( $_POST['term_meta'] ) ) {
	$t_id = $term_id;
	$term_meta = get_option( "taxonomy_$t_id" );
	$cat_keys = array_keys( $_POST['term_meta'] );
	foreach ( $cat_keys as $key ) {
		if ( isset ( $_POST['term_meta'][$key] ) ) {
			$term_meta[$key] = wp_kses_post( stripslashes($_POST['term_meta'][$key]) );
		}
	}

	update_option( "taxonomy_$t_id", $term_meta );
}
}

//add_action( 'woocommerce_after_shop_loop', 'wpm_product_cat_archive_add_meta' );



add_filter('widget_text', 'do_shortcode');

add_filter('loop_shop_per_page', create_function('$cols', 'return 20;'));

//переопределени стандартной функции

function woocommerce_content() {
	if ( is_singular( 'product' ) ) {
		while ( have_posts() ) : the_post();
			wc_get_template_part( 'content', 'single-product' );
		endwhile;
	} else { ?>
		<?php if ( apply_filters( 'woocommerce_show_page_title', true ) ) : ?>
			<div class="page-title"><?php woocommerce_page_title(); ?></div>
		<?php endif; ?>
		<?php do_action( 'woocommerce_archive_description' ); ?>
		<?php if ( have_posts() ) : ?>
			<?php do_action('woocommerce_before_shop_loop'); ?>
			<?php woocommerce_product_loop_start(); ?>
				<?php woocommerce_product_subcategories(); ?>
				<?php while ( have_posts() ) : the_post(); ?>
					<?php wc_get_template_part( 'content', 'product' ); ?>
				<?php endwhile; // end of the loop. ?>
			<?php woocommerce_product_loop_end(); ?>
			<?php do_action('woocommerce_after_shop_loop'); ?>
		<?php elseif ( ! woocommerce_product_subcategories( array( 'before' => woocommerce_product_loop_start( false ), 'after' => woocommerce_product_loop_end( false ) ) ) ) : ?>
			<?php wc_get_template( 'loop/no-products-found.php' ); ?>
		<?php endif;
	}
}

wp_dequeue_script ( 'prettyPhoto'); 
wp_dequeue_script ( 'prettyPhoto-Init');

remove_filter ( 'the_content', 'easy_image_gallery_append_to_content');