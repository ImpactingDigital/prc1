<?php
/**
 * Template Name: Clean Landing Page
 * Description: Page template for Landing Pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?>

	<!DOCTYPE html>
	<html <?php language_attributes(); ?> class="no-js no-svg">

	<?php remove_filter('the_content', 'wpautop'); ?>

	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<meta property="og:title" content="Primavera Academy Skills">
		<meta property="og:image" content="https://skills.primaveraacademy.com/wp-content/uploads/2017/11/primavera-academy-rocket-image.jpg">
		<meta property="og:description" content="Dê o próximo passo sua carreira">

		<!-- Global site tag (gtag.js) - Google Analytics -->
		<script async src="https://www.googletagmanager.com/gtag/js?id=UA-109126622-1"></script>
		<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());

		gtag('config', 'UA-109126622-1');
		</script>

		<link rel="profile" href="http://gmpg.org/xfn/11">
		<link href="https://fonts.googleapis.com/css?family=Montserrat:300,700" rel="stylesheet">
				
		<?php wp_head(); ?>


		<!-- Facebook Pixel Code -->
		<script>
		!function(f,b,e,v,n,t,s)
		{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
		n.callMethod.apply(n,arguments):n.queue.push(arguments)};
		if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
		n.queue=[];t=b.createElement(e);t.async=!0;
		t.src=v;s=b.getElementsByTagName(e)[0];
		s.parentNode.insertBefore(t,s)}(window,document,'script',
		'https://connect.facebook.net/en_US/fbevents.js');
		fbq('init', '1743244072654630'); 
		fbq('track', 'PageView');
		</script>
		<noscript>
		<img height="1" width="1" src="https://www.facebook.com/tr?id=1743244072654630&ev=PageView&noscript=1"/>
		</noscript>
		<!-- End Facebook Pixel Code -->
		

		<script type="text/javascript" src="//app.p.smrk.io/mcf.min.js"></script>
	</head>

	<body <?php body_class(); ?>>
		<div id="page" class="landing-page">
			<a class="skip-link screen-reader-text" href="#content">
				<?php _e( 'Skip to content', 'twentyseventeen' ); ?>
			</a>

			<header class="lp-header">
				<div class="logo-primavera-academy"></div>
				<div class="site-branding-text">
					<h1 class="site-title">PRIMAVERA Academy</h1>
				</div>
			</header>
			<div class="site-content-contain">
				<div id="content" class="site-content">

							<main id="main" class="site-main" role="main">
								<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
									<header class="entry-header">
									</header>
									<div class="entry-content">
										<?php
												the_content();
											?>
									</div>
									<!-- .entry-content -->
								</article>
								<!-- #post-## -->
							</main>
							<!-- #main -->

				</div>
				<!-- #content -->
				<footer id="colophon" class="site-footer" role="contentinfo">
					<div class="wrap">
						<div class="site-info">
						<div class="cert-dgert"></div>
						<div class="info-footer">
								<a href="http://primaverabss.com/" class="logo-primavera"></a>
								PRIMAVERA Business Software Solutions, S.A. © 2017 - Todos os Direitos Resevados
						</div>
						<!-- <a href="<?php echo esc_url( __( 'https://wordpress.org/', 'twentyseventeen' ) ); ?>"><?php printf( __( 'Proudly powered by %s', 'twentyseventeen' ), 'WordPress' ); ?></a> -->
					</div><!-- .site-info -->
					</div>
					<!-- .wrap -->
				</footer>
				<!-- #colophon -->
			</div>
			<!-- .site-content-contain -->
		</div>
		<!-- #page -->
		<script type="text/javascript" async src="//p.smrk.io/sm.js?b=d21344db675d4a981bc77916723341ce4c54d9b9"></script>
		<?php wp_footer(); ?>



	</body>

	</html>