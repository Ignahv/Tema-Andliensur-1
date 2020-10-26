<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Relativity
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
  
</head>

<body <?php body_class(); ?>>

	<div class="alert alert-info " style="background-color:lightblue" role="alert">

	</div>
<div id="page" class="hfeed site">

	<div class="fusion-row">
		<div class="nav">
			<nav class="navbar navbar-expand-lg">
				<a class="navbar-brand text-white">
					<img src="https://chinchorro.educacionpublica.cl/wp-content/uploads/2019/12/Logotipo-Andalien-Sur-01.png" height="150px" width="150px">
				</a>
				<button class="navbar-toggler" data-target="#menu" data-toggle="collapse" type="button">
					<span class="navbar-toggler-icon"></span>	
				</button>
				<div class="collapse navbar-collapse" id="menu">
					<ul class="navbar-nav mr-auto">
						<li class="nav-item">
							<a href="#" class="nav-link">Inicio</a>
						</li>
						<li class="nav-item">
							<a href="#servicio" class="nav-link">Servicio Local</a>
						</li>
						<li class="nav-item">
							<a href="#Establecimientos Educacionales" class="nav-link">Establecimientos Educacionales</a>
						</li>
						<li class="nav-item">
							<a href="#noticias" class="nav-link">Noticias</a>
						</li>
						<li class="nav-item">
							<a href="#participacion" class="nav-link">Participación</a>
						</li>
					</ul>
				</div>
			</nav>
		</div>
		<div class="fullwidth-box" style="background-color:rgba(255,255,255,0);background-image:url('https://images8.alphacoders.com/793/thumb-1920-793736.jpg'); 
			background-position: center center; background-repeat: no-repeat;padding-top:17rem;padding-right:30px;padding-bottom:200px;paddingleft:30px;-webkit-background-size:cover;background-size:cover;background-attachment:fixed;">
			
		</div>
		
	</div>

<div id="content" class="site-content">
