<?php
add_theme_support('post-thumbnails');

register_nav_menu('top-menu', 'Верхнее меню');
register_nav_menu('prod-menu1', 'first_mnu');
register_nav_menu('prod-menu2', 'second_mnu');
register_nav_menu('prod-menu3', 'third_mnu');

register_sidebar(array(
'name' => 'Иконки вверху',
'id' => 'black_line_icons',
'description' => '',
'before_widget' => '<div class="black_line_icons">',
'after_widget' => '</div>',
'before_title' => '',
'after_title' => ''
));

register_sidebar(array(
'name' => 'Телефон и обратный звонок вверху',
'id' => 'top_phone_call',
'description' => '',
'before_widget' => '<div class="top_phone_call">',
'after_widget' => '</div>',
'before_title' => '',
'after_title' => ''
));

register_sidebar(array(
'name' => 'Верхнее меню',
'id' => 'top_mnu',
'description' => '',
'before_widget' => '<div class="top_mnu main-mnu">',
'after_widget' => '</div>',
'before_title' => '',
'after_title' => ''
));

register_sidebar(array(
'name' => 'Баннер вверху',
'id' => 'top_banner',
'description' => '',
'before_widget' => '<div class="top_banner">',
'after_widget' => '</div>',
'before_title' => '',
'after_title' => ''
));

register_sidebar(array(
'name' => 'Услуги на главной',
'id' => 'services',
'description' => '',
'before_widget' => '<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 nopadding">',
'after_widget' => '</div>',
'before_title' => '',
'after_title' => ''
));

register_sidebar(array(
'name' => 'Наша продукция на главной',
'id' => 'production',
'description' => '',
'before_widget' => '',
'after_widget' => '',
'before_title' => '<h2>',
'after_title' => '<h2>'
));

register_sidebar(array(
'name' => 'C нами работают на главной',
'id' => 'work_with_us',
'description' => '',
'before_widget' => '<div class="work_with_us"><div class="w_897">',
'after_widget' => '</div></div>',
'before_title' => '<h2>',
'after_title' => '</h2>'
));


register_sidebar(array(
'name' => 'Форма',
'id' => 'form',
'description' => '',
'before_widget' => '<div class="form"><div class="w_897">',
'after_widget' => '</div></div>',
'before_title' => '<h2>',
'after_title' => '</h2>'
));


register_sidebar(array(
'name' => 'Копирайт',
'id' => 'copy',
'description' => '',
'before_widget' => '<div class="copy"><div class="w_897">',
'after_widget' => '</div></div>',
'before_title' => '<h2>',
'after_title' => '</h2>'
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