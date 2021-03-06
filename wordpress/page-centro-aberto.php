<?php
/*
Template Name: centro-aberto
*/
?>
<?php get_header(); ?>
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/gh/openlayers/openlayers.github.io@master/en/v5.3.0/css/ol.css">
<link rel="stylesheet" href="https://unpkg.com/vuelayers/lib/style.css">

<div id="default-inner">
	<div class="wrapper">
		<div class="inner">
			<div id="app" class="app">
				<preloader v-if="loaded"></preloader>
				<mapa></mapa>
			</div>
	</div>
</div>

<?php get_footer(); ?>
<<script src="https://unpkg.com/vue/dist/vue.js"></script>
<script src="https://cdn.jsdelivr.net/gh/openlayers/openlayers.github.io@master/en/v5.3.0/build/ol.js"></script>
<script src="https://unpkg.com/vuelayers/lib/index.umd.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/SPA/centro-aberto/main.min.js"></script>