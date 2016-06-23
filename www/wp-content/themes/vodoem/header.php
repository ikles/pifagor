<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?php bloginfo('name'); ?> <?php wp_title(); ?></title>
	<?php wp_head(); ?>
	<link rel="stylesheet" href="<? bloginfo('template_url') ?>/style.css">
	<script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
	<script src="<? bloginfo('template_url') ?>/js/common.js"></script>
</head>
<body <?php body_class(); ?>>
	