<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Finaedge
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<title>Finaedge Business Consultancy Service -Build strategies, build confidence, build your business</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<?php wp_head(); ?>
		<link rel="stylesheet" href="dist/css/app.css">
		<link rel="preconnect" href="https://fonts.gstatic.com">
		<link rel="stylesheet" href="https://use.typekit.net/ybn4fni.css">
	</head>
	<body <?php body_class(); ?>>
		<?php wp_body_open(); ?>
		<!-- Header -->
		<header class="page-header">
			<div class="container">
				<div class="row ">
					<div class="col-12 col-md-5">
						<img src="<?php bloginfo('template_url'); ?>/assets/src/images/finaedge-logo.png" alt="" width="59%">
					</div>
					<div class="col-md-7 fg-contact-row">
						<p class="text-white contact-text">Email : <span class="green-text">connect@finaedge.in</span> &nbsp; | &nbsp; Call Us : <span class="green-text">9830564310</span> &nbsp;&nbsp; <a href="#" class="btn green-btn">contact</a></p>
					</div>
				</div>
				<div class="row fg-menu-row">
					<div class="col-12 col-md-10">
						<ul>
							<li>
								<a href="#">Embark On Business</a>
								<ul>
									<li><a href="#">Private Limited Company</a></li>
									<li><a href="#">Public Limited Company</a></li>
									<li><a href="#">One Person Company</a></li>
									<li><a href="#">LLP Registration</a></li>
									<li><a href="#">Section 8 Company</a></li>
									<li><a href="#">Partnership Firm Registration</a></li>
									<li><a href="#">Proprietorship</a></li>
								</ul>
							</li>

							<li>
								<a href="#">Business Compliance</a>
								<ul>
									<li><a href="#">Appointment of Auditor</a></li>
									<li><a href="#">Business Commencement Declaration</a></li>
									<li><a href="#">Appointment of Director</a></li>
									<li><a href="#">Resignation of Director</a></li>
									<li><a href="#">Increase in Share CapitalIncrease in Share Capital</a></li>
									<li><a href="#">Change of Name</a></li>
									<li><a href="#">Closure of Company</a></li>
									<li><a href="#">Change in Registered Office</a></li>
									<li><a href="#">KYC of Directors</a></li>
									<li><a href="#">Annual Return of Company</a></li>
								</ul>
							</li>
							<li><a href="#">Business Solutions</a>
							<ul>
								<li><a href="#">Accounting Solutions</a></li>
								<li><a href="#">Book keeping</a></li>
								<li><a href="#">Taxation &amp; GST Assistance</a></li>
								<li><a href="#">Drafting of Legal Documents</a></li>
							</ul>
							</li>
							<li>
								<a href="#">Registration &amp; Returns</a>
								
								<ul>
									<li>
										<a href="#">Registration</a>

										<ul>
											<li><a href="#">GST Registration</a></li>
											<li><a href="#">MSME Registration</a></li>
											<li><a href="#">Professional Tax Registration</a></li>
											<li><a href="#">TAN Registration</a></li>
											<li><a href="#">IEC Registration</a></li>
											<li><a href="#">PF &amp; ESI Registration</a></li>
											<li><a href="#">Trade License (Location Basis)</a></li>
											<li><a href="#">ISO Certification</a></li>
											<li><a href="#">FSSAI Registration</a></li>
										</ul>
									</li>
									<li>
										<a href="#">Return</a>

										<ul>
											<li><a href="#">GST Return</a></li>
											<li><a href="#">Professional Tax Renewal</a></li>
											<li><a href="#">TDS Return</a></li>
											<li><a href="#">PF &amp; ESI Return</a></li>
										</ul>
									</li>
								</ul>
							</li>
							<!-- <li><a href="#">Registration &amp; Return</a></li> -->
							<li><a href="#">Labour Law</a></li>
						</ul>
					</div>
				</div>
				<div class="burger-nav">
					<div id="menu-bar">
						<div id="menu" >
							<div id="bar1" class="bar"></div>
							<div id="bar2" class="bar"></div>
							<div id="bar3" class="bar"></div>
						</div>
						<ul class="nav" id="nav">
							<li><a href="#">Start Your business</a></li>
							<li><a href="#">Corporate Compliance</a></li>
							<li><a href="#">Account and Drafting</a></li>
							<li><a href="#">Protect & Promote</a></li>
							<li><a href="#">Registration & Return</a></li>
						</ul>
					</div>
					<div class="menu-bg-container">
						<div class="menu-bg" id="menu-bg"></div>
					</div>
				</div>
			</div>
		</header>
		<!-- End header -->
