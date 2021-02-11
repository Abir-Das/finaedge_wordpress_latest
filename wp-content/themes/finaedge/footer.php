<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Finaedge
 */

?>

<!-- footer -->
<footer class="footer pb-5 pt-5">
	<div class="container">
		<div class="footer-custom-menu row justify-content-between" style="list-style:none;">
			<?php dynamic_sidebar( 'footer-sidebar-1' ) ?>
			<?php dynamic_sidebar( 'footer-sidebar-2' ) ?>
			<?php dynamic_sidebar( 'footer-sidebar-3' ) ?>
			<?php dynamic_sidebar( 'footer-sidebar-4' ) ?>
		</div>
	</div>
</footer>
<!-- End footer -->

<!-- bottom ribbon -->
<section class="bottom-ribbon">
	<div class="container">
		<div class="row">
			<div class="col-12 col-md-8 col-lg-8">
				<p class="copyright">  Copyright @ 2020  <span class="hulk">Finaedge Financial consultancy services</span> All Rights Reserved </p>
			</div>
			<div class="col-12 col-md-4 col-lg-4">
				<p class="developed-by">
					Designed & Developed by <a href="https://thinktoshare.com" target="_blank" class="text-white">Think To Share</a>
				</p>
			</div>
		</div>
	</div>
</section>
<!-- end bottom ribbon -->

<?php wp_footer(); ?>

<style>

	.menu
	{
		list-style: none;
    	padding-left: 0;
		margin: 0;
	}

	.menu a{
	
		color: #979cab;
		font-weight: 300;
		font-size: 16px;
		text-decoration: none;
		
	}
	.menu a:hover
	{
		color: #499007;
	}
	.widget_nav_menu h2
	{
		padding-bottom: 1rem;
	}

	.menu li 
	{
		margin-bottom: 25px;
	}

	.textwidget p
	{
		color: #979cab;
		font-weight: 300;
		font-size: 1.1em;
	}

	.textwidget p:nth-child(4) {
		color: #fff;
		font-weight: 300;
		font-size: 1.1em;
	}

	.textwidget a
	{
		color: #fff;
		font-weight: 300;
		font-size: 1.1em;
		text-decoration: none;
	}

	.custom-html-widget p
	{
		color: #fff;
		font-family: muli, sans-serif;
		font-size: 1em;
		font-weight: 700;
	}

	.footer-custom-menu
	{

	}

	/* .footer
	{
		a {
			color: #fff;
    		text-decoration: none;
		}
	} */
</style>

</body>
</html>
