<?php include ('includes/header.php'); ?>
	<link rel="stylesheet" href="assets/css/normalize.css">
	<link rel="stylesheet" href="assets/css/layout.css">

	<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>a
	<![endif]-->
	<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	<script type="text/javascript" src="js/jquery.easing.min.js"></script>	
	<script type="text/javascript" src="js/jquery.mixitup.min.js"></script>
	<script type="text/javascript" src="http://www.queness.com/js/bsa.js"></script>
	
	<script type="text/javascript">
	$(function () {
		
		var filterList = {
		
			init: function () {
			
				// MixItUp plugin
				// http://mixitup.io
				$('#portfoliolist').mixitup({
					targetSelector: '.portfolio',
					filterSelector: '.filter',
					effects: ['fade'],
					easing: 'snap',
					// call the hover effect
					onMixEnd: filterList.hoverEffect()
				});				
			
			},
			
			hoverEffect: function () {
			
				// Simple parallax effect
				$('#portfoliolist .portfolio').hover(
					function () {
						$(this).find('.label').stop().animate({bottom: 0}, 200, 'easeOutQuad');
						$(this).find('img').stop().animate({top: -30}, 500, 'easeOutQuad');				
					},
					function () {
						$(this).find('.label').stop().animate({bottom: -40}, 200, 'easeInQuad');
						$(this).find('img').stop().animate({top: 0}, 300, 'easeOutQuad');								
					}		
				);				
			
			}

		};
		
		// Run the show!
		filterList.init();
		
		
	});	
	</script>
	<div id="info">
	<div class="info-wrapper">
	</div>
</div>	

	<div class="container">

		<ul id="filters" class="clearfix">
			<li><span class="filter active" data-filter="design icon logo web">All</span></li>
			<li><span class="filter" data-filter="design">Design</span></li>
			<li><span class="filter" data-filter="icon">Icon</span></li>
			<li><span class="filter" data-filter="logo">Logo</span></li>
			<li><span class="filter" data-filter="web">Web</span></li>
		</ul>

		<div id="portfoliolist">
						
			<div class="portfolio app" data-cat="web">
				<div class="portfolio-wrapper">			
					<img src="img/portfolios/web/tshpreview.jpg" alt="" />
					<div class="label">
						<div class="label-text">
							<a class="text-title">Team Stronk Haven</a>
							<span class="text-category">Design &amp; Front-end</span>
						</div>
						<div class="label-bg"></div>
					</div>
				</div>
			</div>		

				<div class="portfolio app" data-cat="web">
				<div class="portfolio-wrapper">			
					<img src="img/portfolios/web/extronium.jpg" alt="" />
					<div class="label">
						<div class="label-text">
							<a class="text-title">Extronium Hosting</a>
							<span class="text-category">Design &amp; Front-end</span>
						</div>
						<div class="label-bg"></div>
					</div>
				</div>
			</div>		

					<div class="portfolio app" data-cat="web">
				<div class="portfolio-wrapper">			
					<img src="img/portfolios/web/extronium.jpg" alt="" />
					<div class="label">
						<div class="label-text">
							<a class="text-title">Extronium Hosting</a>
							<span class="text-category">Design &amp; Front-end</span>
						</div>
						<div class="label-bg"></div>
					</div>
				</div>
			</div>		

					<div class="portfolio app" data-cat="logo">
				<div class="portfolio-wrapper">			
					<img src="img/portfolios/logo/konnect.jpg" alt="" />
					<div class="label">
						<div class="label-text">
							<a class="text-title">Konnect</a>
							<span class="text-category">Branding</span>
						</div>
						<div class="label-bg"></div>
					</div>
				</div>
			</div>	

					<div class="portfolio app" data-cat="logo">
				<div class="portfolio-wrapper">			
					<img src="img/portfolios/logo/devjs.jpg" alt="" />
					<div class="label">
						<div class="label-text">
							<a class="text-title">DevelopJS</a>
							<span class="text-category">Branding</span>
						</div>
						<div class="label-bg"></div>
					</div>
				</div>
			</div>	

					<div class="portfolio app" data-cat="logo">
				<div class="portfolio-wrapper">			
					<img src="img/portfolios/logo/extro.jpg" alt="" />
					<div class="label">
						<div class="label-text">
							<a class="text-title">Extronium</a>
							<span class="text-category">Branding</span>
						</div>
						<div class="label-bg"></div>
					</div>
				</div>
			</div>	

				<div class="portfolio app" data-cat="logo">
				<div class="portfolio-wrapper">			
					<img src="img/portfolios/logo/anthera.jpg" alt="" />
					<div class="label">
						<div class="label-text">
							<a class="text-title">Gates of Anthera Network</a>
							<span class="text-category">Branding</span>
						</div>
						<div class="label-bg"></div>
					</div>
				</div>
			</div>	

		
													
		</div>
		
	</div><!-- container -->