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

		<?php wp_head(); ?>
        
        
        <!-- Google Tag Manager -->
        <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
        new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
        j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
        'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-NH5WM66');</script>
        <!-- End Google Tag Manager -->
		

		<script type="text/javascript" src="//app.p.smrk.io/mcf.min.js"></script>
	</head>

	<body <?php body_class(); ?>>
        <!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NH5WM66"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
        
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