<!DOCTYPE HTML>
<html>
	<head>
		<meta charset="UTF-8">
	 	<title>@yield('title')</title>

	 	<!-- meta -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width,initial-scale=1.0">
		<meta name="description" content="@yield('description')">

		<!-- Google fonts -->
		<link rel='stylesheet' href="http://fonts.googleapis.com/css?family=Cabin:400,100,300,100italic,300italic,400italic,500,500italic,700,700italic,900,900italic">
		<link rel='stylesheet' href="http://fonts.googleapis.com/css?family=Merriweather:400,100,300,100italic,300italic,400italic,500,500italic,700,700italic,900,900italic">
		<link rel='stylesheet' href="http://fonts.googleapis.com/css?family=Lora:400,100,300,100italic,300italic,400italic,500,500italic,700,700italic,900,900italic">

		<!-- icons -->
		<link href="http://themes.digitalcookers.net/wp-content/uploads/2013/09/favicon.jpg" rel="shortcut icon">		
		<link href="http://themes.digitalcookers.net/wp-content/themes/cotton/img/icons/touch.png" rel="apple-touch-icon-precomposed">

		<!-- css + javascript -->
		<meta name='robots' content='noindex,nofollow' />
		<link rel='stylesheet' id='google-fonts-css'  href='http://fonts.googleapis.com/css?family=Cabin%3A400%2C700%2C400italic%7CMerriweather%3A900%7CLora%3A400%2C700%2C400italic&#038;ver=1.0' media='all' />
		
		<link rel="stylesheet" src="http://normalize-css.googlecode.com/svn/trunk/normalize.css" />

		<?php 
			echo HTML::style('css/bootstrap.min.css'); 
			echo HTML::style('css/font-awesome.css');
			echo HTML::style('css/style.css',array('id'=>'main-css'));
			echo HTML::style('css/custom.css',array('id'=>'custom-css')); 
		?>

		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
		<script type='text/javascript' src='http://cdnjs.cloudflare.com/ajax/libs/conditionizr.js/2.2.0/conditionizr.min.js?ver=2.2.0'></script>

		<?php echo HTML::script('js/modernizr.dev.js'); ?>
		<?php echo HTML::script('js/jquery.easing.js'); ?>
		<?php echo HTML::script('js/idangerous.swiper.js'); ?>
		<?php echo HTML::script('js/jquery.mixitup.js'); ?>
		<?php echo HTML::script('js/jquery.jplayer.js'); ?>
		<?php echo HTML::script('js/jquery.flickr.js'); ?>
		<?php echo HTML::script('js/jquery.instagram.js'); ?>
		<?php echo HTML::script('js/jquery.twitter.js'); ?>
		<?php echo HTML::script('js/jquery.timeago.js'); ?>

		<script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
		<?php echo HTML::script('js/script.js'); ?>

			<script>
				var templateUrl = 'http://themes.digitalcookers.net/wp-content/themes/cotton';
				!function(){
					// configure legacy, retina, touch requirements @ conditionizr.com
					conditionizr()
				}()
			</script>

		<?php echo HTML::script('js/fluidvids.js'); ?>
		<?php echo HTML::script('js/masonry.js'); ?>
		<?php echo HTML::script('js/imagesloaded.js'); ?>

	</head>

<body class="home custom-background">
	
		<!-- wrapper -->
		<div id="page">
			
			<!-- START HEADER -->
			<header id="header" class="header clear" role="banner">		
				<div class="align-horizontal">
					<div class="align-vertical">
						<div id="intro" class="text-container">
							<!-- logo -->
							<div id="logo" class="logo">
								<a href="<?php echo URL::to('/'); ?>">
									<img src="http://themes.digitalcookers.net/wp-content/uploads/2013/09/logo.svg" alt="Logo" class="logo-img">
								</a>
							</div>
							<!-- /logo -->
							<h1 id="caption">Melbourne Best Cooling System.</h1>
							<h2 id="sub-caption">Finally here!</h2>
							<div id="explore"><a class="scroll"><i class="icon-angle-down icon-4x"></i></a></div>
						</div>
					</div>
				</div>
			<!-- END HEADER -->
			</header>
			
			<!-- START TOP-BAR -->
			<div id="top-bar">
				<div class="container">
					<div class="row">
						<div class="col-md-4">
							
									<div id="logo-lettering">
										<a class="scroll header" href="#header"><img src="http://themes.digitalcookers.net/wp-content/uploads/2013/09/logo_lettering.svg" alt="Logo Lettering"/></a>
									</div>
															
							<div id="menu-mobile" class="hidden-md hidden-lg">
								<i class="icon-reorder icon-2x"></i>
							</div>
						</div>
						<div class="col-md-8">
							<nav id="top-navigation" role="navigation">
								<ul class="list-inline">
									<li class="active"><a href="#team-2">Team</a></li>
									<li><a href="#studio">Studio</a></li>
									<li><a href="#services">Services</a></li>
									<li><a href="#works">Works</a></li>
									<li><a href="#social-feed">Social</a></li>
									<li><a href="#blog">Blog</a></li>
									<li><a href="#contact">Contact</a></li>
								</ul>							
							</nav>
						</div>
					</div>
				</div>
			</div>
			<!-- END TOP-BAR -->	
			
			<!-- OFFCANVAS NAVIGATION -->
			<div id="offcanvas">
			
				<div class="show-offcanvas">
					<i class="icon-reorder icon-2x"></i>
					<i class="icon-remove icon-2x"></i>
				</div>
			
				<nav id="offcanvas-navigation">
				
					<!-- sidebar -->

<!-- search -->
<form class="search" method="get" action="http://themes.digitalcookers.net" role="search">
	<input class="search-input" type="search" name="s" placeholder="Search">
	
	<button class="search-submit" type="submit" role="button"><i id="submit-search" class="icon-search  icon-rotate-90 icon-large"></i></button>
</form>
<!-- /search -->
<ul class="sidebar-nav"><li class="current_page_item"><a href="http://themes.digitalcookers.net/" title="Home">Home</a></li><li class="page_item page-item-1937"><a href="http://themes.digitalcookers.net/?page_id=1937">Blog</a></li><li class="page_item page-item-1954"><a href="http://themes.digitalcookers.net/?page_id=1954">Portfolio</a></li></ul>

<div class="sidebar-widget">
			<div id="recent-posts-3" class="widget_recent_entries">		<h3>Latest Posts</h3><div class="collapse">		<ul>
					<li>
				<a href="http://themes.digitalcookers.net/?p=1939" title="Post Image">Post Image</a>
						</li>
					<li>
				<a href="http://themes.digitalcookers.net/?p=1964" title="Standard Post &#8211; Image">Standard Post &#8211; Image</a>
						</li>
					<li>
				<a href="http://themes.digitalcookers.net/?p=1960" title="Gallery Post">Gallery Post</a>
						</li>
					<li>
				<a href="http://themes.digitalcookers.net/?p=1962" title="Standard Post">Standard Post</a>
						</li>
					<li>
				<a href="http://themes.digitalcookers.net/?p=1943" title="Video Post &#8211; Vimeo">Video Post &#8211; Vimeo</a>
						</li>
				</ul>
		</div></div><div id="categories-4" class="widget_categories"><h3>Categories</h3><div class="collapse">		<ul>
	<li class="cat-item cat-item-86"><a href="http://themes.digitalcookers.net/?cat=86" title="View all posts filed under audio">audio</a>
</li>
	<li class="cat-item cat-item-29"><a href="http://themes.digitalcookers.net/?cat=29" title="View all posts filed under branding">branding</a>
</li>
	<li class="cat-item cat-item-81"><a href="http://themes.digitalcookers.net/?cat=81" title="View all posts filed under photography">photography</a>
</li>
	<li class="cat-item cat-item-1"><a href="http://themes.digitalcookers.net/?cat=1" title="View all posts filed under Uncategorized">Uncategorized</a>
</li>
	<li class="cat-item cat-item-82"><a href="http://themes.digitalcookers.net/?cat=82" title="View all posts filed under video">video</a>
</li>
		</ul>
</div></div></div>
		
<!-- /sidebar -->					
				</nav>	
	
	<!-- section -->
	<section id="team-2" class="post-1885 sections type-sections status-publish hentry" style="background-color:#fff">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-6 col-sm-offset-3 intro">
										<h1>Meet our team.<span style="font-size: 13px;"><br />
</span></h1>
<p>We said we&#8217;d say it was the snow that killed the other two, but it wasn&#8217;t. Nature is lethal but it doesn&#8217;t hold a candle to man.</p>
				</div>
			</div>
		</div>
		
				
			<div class="row-layout">
		 
							 
					<div class="container">
	
	<div class="row">

				
						
						
				<div class="col-xs-6 col-sm-6 col-md-3 member">
					<div class="member-photo">
						<div class="image">
							<img src="http://themes.digitalcookers.net/wp-content/uploads/2013/09/member1.jpg" alt="Renato Leão">
						</div>
						<div class="image-hover">
															<img src="http://themes.digitalcookers.net/wp-content/uploads/2013/09/member1-hover.jpg" alt="Renato Leão">
													</div>
						<div class="member-hover hidden-xs hidden-sm">
							<div class="list-container">
								<ul class="list-inline social">
																														<li><a href="https://twitter.com/digitalcookers" target="_blank"><i class="icon-twitter icon-3x"></i></a></li>
																					<li><a href="https://facebook.com" target="_blank"><i class="icon-facebook icon-3x"></i></a></li>
																					<li><a href="https://linkedin.com" target="_blank"><i class="icon-linkedin icon-3x"></i></a></li>
																											</ul>
							</div>
						</div>
					</div>
					<h5>Renato Leão</h5>
					<p>Lead Designer</p>
					<div class="list-container visible-xs visible-sm">
						<ul class="list-inline">
																								<li><a href="https://twitter.com/digitalcookers" target="_blank"><i class="icon-twitter icon-2x"></i></a></li>
																	<li><a href="https://facebook.com" target="_blank"><i class="icon-facebook icon-2x"></i></a></li>
																	<li><a href="https://linkedin.com" target="_blank"><i class="icon-linkedin icon-2x"></i></a></li>
																					</ul>
					</div>				
				</div>
				
						
				<div class="col-xs-6 col-sm-6 col-md-3 member">
					<div class="member-photo">
						<div class="image">
							<img src="http://themes.digitalcookers.net/wp-content/uploads/2013/09/member2.jpg" alt="Capitão Barbosa">
						</div>
						<div class="image-hover">
															<img src="http://themes.digitalcookers.net/wp-content/uploads/2013/09/member2-hover.jpg" alt="Capitão Barbosa">
													</div>
						<div class="member-hover hidden-xs hidden-sm">
							<div class="list-container">
								<ul class="list-inline social">
																														<li><a href="https://linkedin.com" target="_blank"><i class="icon-facebook icon-3x"></i></a></li>
																					<li><a href="https://plus.google.com" target="_blank"><i class="icon-google-plus icon-3x"></i></a></li>
																											</ul>
							</div>
						</div>
					</div>
					<h5>Capitão Barbosa</h5>
					<p>Lead Developer</p>
					<div class="list-container visible-xs visible-sm">
						<ul class="list-inline">
																								<li><a href="https://linkedin.com" target="_blank"><i class="icon-facebook icon-2x"></i></a></li>
																	<li><a href="https://plus.google.com" target="_blank"><i class="icon-google-plus icon-2x"></i></a></li>
																					</ul>
					</div>				
				</div>
				
						
				<div class="col-xs-6 col-sm-6 col-md-3 member">
					<div class="member-photo">
						<div class="image">
							<img src="http://themes.digitalcookers.net/wp-content/uploads/2013/09/member3.jpg" alt="Sara Baião">
						</div>
						<div class="image-hover">
															<img src="http://themes.digitalcookers.net/wp-content/uploads/2013/09/member3-hover.jpg" alt="Sara Baião">
													</div>
						<div class="member-hover hidden-xs hidden-sm">
							<div class="list-container">
								<ul class="list-inline social">
																														<li><a href="https://linkedin.com" target="_blank"><i class="icon-linkedin icon-3x"></i></a></li>
																											</ul>
							</div>
						</div>
					</div>
					<h5>Sara Baião</h5>
					<p>Junior Designer</p>
					<div class="list-container visible-xs visible-sm">
						<ul class="list-inline">
																								<li><a href="https://linkedin.com" target="_blank"><i class="icon-linkedin icon-2x"></i></a></li>
																					</ul>
					</div>				
				</div>
				
						
				<div class="col-xs-6 col-sm-6 col-md-3 member">
					<div class="member-photo">
						<div class="image">
							<img src="http://themes.digitalcookers.net/wp-content/uploads/2013/09/you.jpg" alt="We're hiring.">
						</div>
						<div class="image-hover">
															<img src="http://themes.digitalcookers.net/wp-content/uploads/2013/09/you.jpg" alt="We're hiring.">
													</div>
						<div class="member-hover hidden-xs hidden-sm">
							<div class="list-container">
								<ul class="list-inline social">
																	</ul>
							</div>
						</div>
					</div>
					<h5>We're hiring.</h5>
					<p>This can be your change!</p>
					<div class="list-container visible-xs visible-sm">
						<ul class="list-inline">
													</ul>
					</div>				
				</div>
				
					
			</div>

</div>				
								
			</div>
			 
					
	</section>
	<!-- /section -->
	
	
	<!-- section -->
	<section id="studio" class="post-1891 sections type-sections status-publish hentry" style="background-color:#f2f2f2">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-6 col-sm-offset-3 intro">
										<h1>Our studio.</h1>
<p>My money&#8217;s in that office, right? If she start giving me some bullshit about it ain&#8217;t there, and we got to go someplace else and get it, I&#8217;m gonna shoot you in the head then and there.</p>
				</div>
			</div>
		</div>
		
				
			<div class="row-layout">
		 
							 
					<div class="row">

			
		<div class="col-xs-12">
			<div id="swiper-container-1891" class="swiper-container">
				<div class="swiper-wrapper">
									        				            <div class="swiper-slide"><img src="http://themes.digitalcookers.net/wp-content/uploads/2013/09/studio1.jpg" alt="" /></div>
				        				            <div class="swiper-slide"><img src="http://themes.digitalcookers.net/wp-content/uploads/2013/09/studio2.jpg" alt="" /></div>
				        				            <div class="swiper-slide"><img src="http://themes.digitalcookers.net/wp-content/uploads/2013/09/studio4.jpg" alt="" /></div>
				        				            <div class="swiper-slide"><img src="http://themes.digitalcookers.net/wp-content/uploads/2013/09/studio6.jpg" alt="" /></div>
				        				            <div class="swiper-slide"><img src="http://themes.digitalcookers.net/wp-content/uploads/2013/09/studio3.jpg" alt="" /></div>
				        				            <div class="swiper-slide"><img src="http://themes.digitalcookers.net/wp-content/uploads/2013/09/studio5.jpg" alt="" /></div>
				        				    				</div>
			</div>
		</div>
		
		<script>
			var swiper = {};
			swiper[1891] = new Swiper('#swiper-container-1891',{
				loop:true,
				grabCursor: true
			})
			/* On Load swiper height should adjust to img size */
			jQuery('#swiper-container-1891 .swiper-slide img').load(function() {
				jQuery('#swiper-container-1891').height(jQuery('#swiper-container-1891 .swiper-slide img').height());
			});
		</script>
						         
		
</div>

					
								
			</div>
			 
					
	</section>
	<!-- /section -->
	
	
	<!-- section -->
	<section id="services" class="post-1899 sections type-sections status-publish hentry" style="background-color:#fff">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-6 col-sm-offset-3 intro">
										<h1>What we do.</h1>
<p>However unreal it may seem, we are connected, you and I. We&#8217;re on the same curve, just on opposite ends.</p>
				</div>
			</div>
		</div>
		
				
			<div class="row-layout">
		 
							 
					
	
	<div class="container">
	
		<div class="row">
		
			<div id="services-list">
			
							<div class="col-xs-3 col-sm-6 col-md-3">
					<div id="branding" class="service smooth">
													<img  src="http://themes.digitalcookers.net/wp-content/uploads/2013/09/branding2.svg" alt="Branding">	
												<h5 class="hidden-xs">Branding</h5>
						<p class="hidden-xs">Tattooed aliquip pariatur art party actually. Ut chillwave pour-over narwhal.</p>
					</div>
				</div>
							<div class="col-xs-3 col-sm-6 col-md-3">
					<div id="web-design" class="service smooth">
													<img  src="http://themes.digitalcookers.net/wp-content/uploads/2013/09/web1.svg" alt="Web Design">	
												<h5 class="hidden-xs">Web Design</h5>
						<p class="hidden-xs">Tattooed aliquip pariatur art party actually. Ut chillwave pour-over narwhal.</p>
					</div>
				</div>
							<div class="col-xs-3 col-sm-6 col-md-3">
					<div id="ilustration" class="service smooth">
													<img  src="http://themes.digitalcookers.net/wp-content/uploads/2013/09/illustration1.svg" alt="Ilustration">	
												<h5 class="hidden-xs">Ilustration</h5>
						<p class="hidden-xs">Tattooed aliquip pariatur art party actually. Ut chillwave pour-over narwhal.</p>
					</div>
				</div>
							<div class="col-xs-3 col-sm-6 col-md-3">
					<div id="video" class="service smooth">
													<img  src="http://themes.digitalcookers.net/wp-content/uploads/2013/09/video1.svg" alt="Video">	
												<h5 class="hidden-xs">Video</h5>
						<p class="hidden-xs">Tattooed aliquip pariatur art party actually. Ut chillwave pour-over narwhal.</p>
					</div>
				</div>
						
			</div>
		</div>
		<div class="row">
		
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
							
				    <ul id="branding-skills" class="skills-bar">
												 
															<li><span class="expand" data-width="90%"></span><em>Photoshop</em></li>
															<li><span class="expand" data-width="100%"></span><em>Illustrator</em></li>
															<li><span class="expand" data-width="60%"></span><em>inDesign</em></li>
																	    </ul>
							
				    <ul id="web-design-skills" class="skills-bar">
												 
															<li><span class="expand" data-width="100%"></span><em>HTML</em></li>
															<li><span class="expand" data-width="100%"></span><em>CSS</em></li>
															<li><span class="expand" data-width="90%"></span><em>Javascript</em></li>
																	    </ul>
							
				    <ul id="ilustration-skills" class="skills-bar">
												 
															<li><span class="expand" data-width="30%"></span><em>Pen</em></li>
															<li><span class="expand" data-width="70%"></span><em>Pencil</em></li>
																	    </ul>
							
				    <ul id="video-skills" class="skills-bar">
												 
															<li><span class="expand" data-width="90%"></span><em>Premiere</em></li>
															<li><span class="expand" data-width="30%"></span><em>Final Cut</em></li>
															<li><span class="expand" data-width="80%"></span><em>After Effects</em></li>
																	    </ul>
					
			</div>
		</div>
	</div>
								         
					
								
			</div>
			 
					
	</section>
	<!-- /section -->
	
	
	<!-- section -->
	<section id="works" class="post-1924 sections type-sections status-publish hentry" style="background-color:#f2f2f2">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-6 col-sm-offset-3 intro">
										<h1>Our projects.</h1>
<p>Blessed is he who, in the name of charity and good will, shepherds the weak through the valley of darkness, for he is truly his brother&#8217;s keeper and the finder of lost children.</p>
				</div>
			</div>
		</div>
		
				
			<div class="row-layout">
		 
							 
					
<div class="container">

	<div id="portfolio" class="row">
			<div class="col-xs-12">
				<div class="work-filter center-list">
				    <ul class="list-inline hidden-xs">
				        <li class="filter active" data-filter="all">all</li>
				        <li class="filter" data-filter=branding>branding</li><li class="filter" data-filter=photography>photography</li><li class="filter" data-filter=video>video</li>				    </ul>
				</div>
			</div>
	</div>
	<div id="work-container" class="row work-container">

				
						
			<div class="col-xs-12 col-sm-6 col-md-4 mix all video ">
				<a href="http://themes.digitalcookers.net/?portfolio=for-dummies" class="load" title="For dummies">
					<div class="work">
														<img src="http://themes.digitalcookers.net/wp-content/uploads/2013/09/work9.jpg" class="attachment-post-thumbnail wp-post-image" alt="work9" />												<div class="work-info">
							<h3>For dummies</h3>
						</div>
					</div>
				</a>
			</div>	
			
							
						
			<div class="col-xs-12 col-sm-6 col-md-4 mix all photography ">
				<a href="http://themes.digitalcookers.net/?portfolio=feet-attached" class="load" title="Feet attached">
					<div class="work">
														<img src="http://themes.digitalcookers.net/wp-content/uploads/2013/09/work6.jpg" class="attachment-post-thumbnail wp-post-image" alt="work6" />												<div class="work-info">
							<h3>Feet attached</h3>
						</div>
					</div>
				</a>
			</div>	
			
							
						
			<div class="col-xs-12 col-sm-6 col-md-4 mix all branding ">
				<a href="http://themes.digitalcookers.net/?portfolio=my-first-project" class="load" title="António Garruço">
					<div class="work">
														<img src="http://themes.digitalcookers.net/wp-content/uploads/2013/09/work1.jpg" class="attachment-post-thumbnail wp-post-image" alt="work1" />												<div class="work-info">
							<h3>António Garruço</h3>
						</div>
					</div>
				</a>
			</div>	
			
							
		 
			</div>
			<div class="row">
				<div class="col-xs-12">
					<button class="btn btn-lg view-posts"><a href="http://themes.digitalcookers.net/?page_id=1954" class="load">All Projects</a></button>
				</div>
				
	</div>
</div>
	
	<script>
		jQuery('#work-container').mixitup({
			targetDisplayGrid: 'block' // required to fix bug in Chrome with images height
		});
	</script>


					
								
			</div>
			 
					
	</section>
	<!-- /section -->
	
	
	<!-- section -->
	<section id="social-feed" class="post-1932 sections type-sections status-publish hentry" style="background-color:#fff">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-6 col-sm-offset-3 intro">
										<h1>We are so social.</h1>
<p>And you must think you&#8217;re in a toy store, because you&#8217;re here shopping for an infant named Jeb.</p>
				</div>
			</div>
		</div>
		
				
			<div class="row-layout">
		 
									
	<div class="container">

		<div class="row">
			
			<script type="text/javascript">
				var flickrID = "36587311@N08", instagramUser = "alotofbradshaw", twitterUser = "digitalcookers";
			</script>
			
			<div class="col-xs-12">
		
			    <ul class="social-feed centerUl">
			    				    		<li id="flickr-feed" class="button-feed"><i class="icon-flickr icon-4x"></i></li>
			    				    				        	<li id="instagram-feed" class="button-feed"><i class="icon-instagram icon-4x"></i></li>
			    				    				        	<li id="twitter-feed" class="button-feed"><i class="icon-twitter icon-4x"></i></li>
			    				    </ul>
			    
			</div>
			
		</div>
	
	</div>
			
	<!-- START FLICKR FEED -->
	<div id="flickr" class="row feed">
	<!-- END TWITTER FEED -->		
	</div>
	
	<!-- START INSTAGRAM FEED -->
	<div id="instagram" class="row feed">
	<!-- END INSTAGRAM FEED -->
	</div>
	
	<!-- START TWITTER FEED -->
	<div id="twitter" class="row feed">
	<!-- END TWITTER FEED -->
	</div>
								         
					
								
			</div>
			 
					
	</section>
	<!-- /section -->
	
	
	<!-- section -->
	<section id="blog" class="post-1936 sections type-sections status-publish hentry" style="background-color:#f4594e">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-6 col-sm-offset-3 intro">
										<h1>Our journal.</h1>
<p>Do you see a little Asian child with a blank expression on his face sitting outside on a mechanical helicopter that shakes when you put quarters in it?</p>
				</div>
			</div>
		</div>
		
				
			<div class="row-layout">
		 
								
					<div class="container">

	<div id="featured-posts-container" class="row">
	
	 
	
								
				<div class=" featured-post col-xs-12 col-sm-6 col-md-4">
				
											<div class="featured-post-image">
							<a href="http://themes.digitalcookers.net/?p=1939" class="load"><img src="http://themes.digitalcookers.net/wp-content/uploads/2013/09/work4-header.jpg" alt="Blog post with image"></a>
						</div>
										
						
					
							
					
							
					
								
						
					<div class="featured-post-info">
						<h2><a href="http://themes.digitalcookers.net/?p=1939" title="Post Image">Post Image</a></h2>
						<hr>
						<p>written by <span class="author">Digital Cookers</span></p>
						<p><span class="date">on September 27, 2013 <!-- 8:26 pm --></span></p>
						<span class="comments"><a href="http://themes.digitalcookers.net/?p=1939#respond" title="Comment on Post Image">Leave a comment</a></span>
					</div>
				</div>				
					
								
				<div class=" featured-post col-xs-12 col-sm-6 col-md-4">
				
										
						
					
							
					
							
					
								
						
					<div class="featured-post-info">
						<h2><a href="http://themes.digitalcookers.net/?p=1964" title="Standard Post &#8211; Image">Standard Post &#8211; Image</a></h2>
						<hr>
						<p>written by <span class="author">Digital Cookers</span></p>
						<p><span class="date">on September 28, 2013 <!-- 5:38 am --></span></p>
						<span class="comments"><a href="http://themes.digitalcookers.net/?p=1964#comments" title="Comment on Standard Post &#8211; Image">3 Comments</a></span>
					</div>
				</div>				
					
								
				<div class=" featured-post col-xs-12 col-sm-6 col-md-4">
				
										
						
					
							
					
											<div class="featured-post-gallery">
							 
<div id="swiper-container-1960" class="swiper-container">
	<div class="swiper-wrapper">
			        	            <div class="swiper-slide"><img src="http://themes.digitalcookers.net/wp-content/uploads/2013/09/work6-header.jpg" alt="" /></div>
	        	            <div class="swiper-slide"><img src="http://themes.digitalcookers.net/wp-content/uploads/2013/09/work4-header.jpg" alt="" /></div>
	        	            <div class="swiper-slide"><img src="http://themes.digitalcookers.net/wp-content/uploads/2013/09/work5-header.jpg" alt="" /></div>
	        	    	</div>
</div>

<script>
	var swiper = {};
	swiper[1960] = new Swiper('#swiper-container-1960',{
		loop:true,
		grabCursor: true
	})

	/* On Load swiper height should adjust to img size */

		jQuery('#swiper-container-1960 .swiper-slide img').load(function() {
			jQuery('#swiper-container-1960').height(jQuery('#swiper-container-1960 .swiper-slide img').height());
		});

	
</script>						</div>
							
					
								
						
					<div class="featured-post-info">
						<h2><a href="http://themes.digitalcookers.net/?p=1960" title="Gallery Post">Gallery Post</a></h2>
						<hr>
						<p>written by <span class="author">Digital Cookers</span></p>
						<p><span class="date">on September 28, 2013 <!-- 5:36 am --></span></p>
						<span class="comments"><a href="http://themes.digitalcookers.net/?p=1960#respond" title="Comment on Gallery Post">Leave a comment</a></span>
					</div>
				</div>				
					
								
				<div class=" featured-post col-xs-12 col-sm-6 col-md-4">
				
										
						
					
							
					
							
					
								
						
					<div class="featured-post-info">
						<h2><a href="http://themes.digitalcookers.net/?p=1962" title="Standard Post">Standard Post</a></h2>
						<hr>
						<p>written by <span class="author">Digital Cookers</span></p>
						<p><span class="date">on September 28, 2013 <!-- 5:37 am --></span></p>
						<span class="comments"><a href="http://themes.digitalcookers.net/?p=1962#respond" title="Comment on Standard Post">Leave a comment</a></span>
					</div>
				</div>				
					
								
				<div class=" featured-post col-xs-12 col-sm-6 col-md-4">
				
										
						
					
											<div class="featured-post-video">
							 

    
<iframe src="//player.vimeo.com/video/68010006" width="900" height="506" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>

						</div>
							
					
							
					
								
						
					<div class="featured-post-info">
						<h2><a href="http://themes.digitalcookers.net/?p=1943" title="Video Post &#8211; Vimeo">Video Post &#8211; Vimeo</a></h2>
						<hr>
						<p>written by <span class="author">Digital Cookers</span></p>
						<p><span class="date">on September 27, 2013 <!-- 8:31 pm --></span></p>
						<span class="comments"><a href="http://themes.digitalcookers.net/?p=1943#respond" title="Comment on Video Post &#8211; Vimeo">Leave a comment</a></span>
					</div>
				</div>				
					
								
				<div class=" featured-post col-xs-12 col-sm-6 col-md-4">
				
										
											<div class="featured-post-audio">
							 
	
	


<script type="text/javascript">

    jQuery(document).ready(function($){

        if( $().jPlayer ) {
            $("#jquery-jplayer-audio-1945").jPlayer({
                ready: function () {
                    $(this).jPlayer("setMedia", {
                    	poster: "http://themes.digitalcookers.net/wp-content/uploads/2013/09/work5-header.jpg",
                    	mp3: "http://themes.digitalcookers.net/wp-content/uploads/2013/09/05-The-Pot.mp3",
                    	end: ""
                    });
                },
                size: {
                    width: "100%",
                    height: "auto"
                },
                preload: 'auto',
                swfPath: "http://themes.digitalcookers.net/wp-content/themes/cotton/js",
                cssSelectorAncestor: "#jp-audio-interface-1945",
                supplied: "mp3"
            });
        
        }
        
    });
    
</script>

<div id="jquery-jplayer-audio-1945" class="jp-jplayer"></div>

<div id="jp-container-1945" class="jp-audio">
    <div class="jp-type-single">
        <div id="jp-audio-interface-1945" class="jp-interface">
            <ul class="jp-controls">
                <li><a href="#" class="jp-play" tabindex="1" title="play" style="display: block;">play</a></li>
                <li><a href="#" class="jp-pause" tabindex="1" title="pause" style="display: none;">pause</a></li>
                <li><a href="#" class="jp-mute" tabindex="1" title="mute">mute</a></li>
                <li><a href="#" class="jp-unmute" tabindex="1" title="unmute" style="display: none;">unmute</a></li>
            </ul>
            <div class="jp-progress">
                <div class="jp-seek-bar">
                    <div class="jp-play-bar"></div>
                </div>
            </div>
            <div class="jp-volume-bar">
                <div class="jp-volume-bar-value"></div>
            </div>
        </div>
    </div>
</div>						</div>
						
					
							
					
							
					
								
						
					<div class="featured-post-info">
						<h2><a href="http://themes.digitalcookers.net/?p=1945" title="Audio Post &#8211; Upload">Audio Post &#8211; Upload</a></h2>
						<hr>
						<p>written by <span class="author">Digital Cookers</span></p>
						<p><span class="date">on September 27, 2013 <!-- 8:34 pm --></span></p>
						<span class="comments"><a href="http://themes.digitalcookers.net/?p=1945#respond" title="Comment on Audio Post &#8211; Upload">Leave a comment</a></span>
					</div>
				</div>				
					
						
						
			 
				</div>
				<div class="row">
					<div class="col-xs-12">
						<button class="btn btn-lg view-posts"><a href="http://themes.digitalcookers.net/?page_id=1937" class="load">All Posts</a></button>
					</div>
					
		
	</div>

</div>				
								
			</div>
			 
					
	</section>
	<!-- /section -->
	
	
	<!-- section -->
	<section id="contact" class="post-1952 sections type-sections status-publish hentry" style="background-color:#ffffff">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-6 col-sm-offset-3 intro">
										<h1>Drop us a line.</h1>
<p>However unreal it may seem, we are connected, you and I. We&#8217;re on the same curve, just on opposite ends.</p>
				</div>
			</div>
		</div>
		
				
			<div class="row-layout">
		 
								
					
<div class="container">

	<div class="row">
		<div class="col-xs-12 col-sm-8 col-sm-offset-2">
			<form id="contact-form" action="/" method="post">
				<div class="row">	
					<div class="col-xs-12 formContainer">
						<input type="text" name="name" id="name" value="" class="requiredField" placeholder="Name">
					</div>
					<div class="col-xs-12 formContainer">
						<input type="text" name="email" id="email" value="" class="requiredField email" placeholder="Email">
					</div>
					<div class="col-xs-12 formContainer">
						<textarea name="message" id="message" rows="20" cols="30" class="requiredField" placeholder="Briefing"></textarea>
					</div>
					<div class="col-xs-12 formContainer">
						<input type="hidden" name="submitted" id="submitted" class="button" value="SEND"><button id="submit" class="btn btn-lg" type="submit">Send</button>
					</div>
					<div class="col-xs-12 formContainer">
						<p id="error" data-alert="" class="alert">Please fill in all data correctly.</p>
						<p id="thanks" data-alert="" class="alert alert-success">Thanks. We'll get back to you as soon as possible.</p>
						<p id="timedout" data-alert="" class="alert">The connection to the server timed out.</p>
						<p id="state" data-alert="" class="alert"></p>
					</div>
				</div>
			</form>
		</div>
	</div>
	
	
	<div class="row">
		<div class="col-xs-12 col-sm-6 col-sm-offset-3">
			<div class="contact-info">
				<div class="row">
											<div class="col-sm-4 contact">
							<div class="icon">
								<a><i class="icon-envelope icon-3x"></i></a>	
							</div>
							<p>test@test.com</p>
						</div>
																<div class="col-sm-4 contact">
							<div class="icon">
								<a href="https://www.google.pt/maps?q=Rua+Mo%C3%A7ambique&ie=UTF8&sll=38.726196600000044,-9.133097900000031&sspn=0.0058754924303444445,0.013732356659095496&t=m&hnear=Rua+Mo%C3%A7ambique,+Coimbra&z=16" target="_blank"><i class="icon-map-marker icon-3x"></i></a>	
							</div>
							<p>Street cookers<br />
0000-000<br />
Somewhere</p>
						</div>
																<div class="col-sm-4 contact">
							<div class="icon">
								<a><i class="icon-phone icon-3x"></i></a>	
							</div>
							<p>333 333 333</p>
						</div>
									</div>
			</div>
		</div>
	</div>

</div>
			
	<script>

		/*-----------------------------------------------------------------------------------*/
		/*	Contacts
		/*-----------------------------------------------------------------------------------*/	
			
		/* Validation Form with AJAX while typing for inputs */
		jQuery('input').bind('input propertychange', function() {
			jQuery(this).parent().find('.error').remove();
			jQuery(this).parent().find('.valid').remove();
		    if( jQuery(this).attr('id') == 'email' ){
				var checkEmail = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
				if (jQuery(this).val() == "" || jQuery(this).val() == " ") {
					jQuery(this).after("<span class='error'><i class='icon-remove icon-2x'></i></span>");
					jQuery(this).parent().find('.error').fadeIn('slow');
				} else if (!checkEmail.test(jQuery(this).val())) { 
					jQuery(this).after("<span class='error'><i class='icon-remove icon-2x'></i></span>");
					jQuery(this).parent().find('.error').fadeIn('slow');
				} else {
					jQuery(this).after("<span class='valid'><i class='icon-ok icon-2x'></i></span>");
					jQuery(this).parent().find('.valid').fadeIn('slow');	
				}    
		    } else {
				if(jQuery(this).val() == "" || jQuery(this).val() == " "){
					jQuery(this).after("<span class='error'><i class='icon-remove icon-2x'></i></span>");
					jQuery(this).parent().find('.error').fadeIn('slow');			   
				} else {
					jQuery(this).after("<span class='valid'><i class='icon-ok icon-2x'></i></span>");
					jQuery(this).parent().find('.valid').fadeIn('slow');	
				}
		    }
		});
		
		/* Validation Form with AJAX while typing for textarea */
		jQuery('textarea').bind('input propertychange', function() {
			jQuery(this).parent().find('.error').remove();
			jQuery(this).parent().find('.valid').remove();	
			if(jQuery(this).val() == "" || jQuery(this).val() == " "){
				jQuery(this).after("<span class='error'><i class='icon-remove icon-2x'></i></span>");
				jQuery(this).parent().find('.error').fadeIn('slow');			   
			} else {
				jQuery(this).after("<span class='valid'><i class='icon-ok icon-2x'></i></span>");
				jQuery(this).parent().find('.valid').fadeIn('slow');	
			}
		});	
		
		
		/* Validation Form with AJAX on Submit */
		jQuery('#submit').click(function(){
			jQuery('span.error').fadeOut('slow');
			jQuery('span.valid').fadeOut('slow');
			jQuery('#thanks').hide();
			jQuery('#error').hide();
			jQuery('#timedout').hide();
			jQuery('#state').hide();
			
			var error = false;
			
			var name = jQuery('#name').val(); 
			if(name == "" || name == " ") {
				jQuery('#name').after("<span class='error'><i class='icon-remove icon-2x'></i></span>");
				jQuery('#name').parent().find('.error').fadeIn('slow');
				error = true; 
			} else {
				jQuery('#name').after("<span class='valid'><i class='icon-ok icon-2x'></i></span>");
				jQuery('#name').parent().find('.valid').fadeIn('slow');			
			}
			
			var checkEmail = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/; 
			var email = jQuery('#email').val();
			if (email == "" || email == " ") {
				jQuery('#email').after("<span class='error'><i class='icon-remove icon-2x'></i></span>");
				jQuery('#email').parent().find('.error').fadeIn('slow');
				error = true;
			} else if (!checkEmail.test(email)) { 
				jQuery('#email').after("<span class='error'><i class='icon-remove icon-2x'></i></span>");
				jQuery('#email').parent().find('.error').fadeIn('slow');
				error = true;
			} else {
				jQuery('#email').after("<span class='valid'><i class='icon-ok icon-2x'></i></span>");
				jQuery('#email').parent().find('.valid').fadeIn('slow');			
			}
			
			var message = jQuery('#message').val(); 
			if(message == "" || message == " ") {
				jQuery('#message').after("<span class='error'><i class='icon-remove icon-2x'></i></span>");
				jQuery('#message').parent().find('.error').fadeIn('slow');
				error = true; 
			} else {
				jQuery('#message').after("<span class='valid'><i class='icon-ok icon-2x'></i></span>");
				jQuery('#message').parent().find('.valid').fadeIn('slow');			
			}
			
			if(error == true) {
				jQuery('#error').fadeIn('slow');
				setTimeout(function() {
				    jQuery('#error').fadeOut('slow');
				}, 3000);
				return false;
			}
			
			var data_string = jQuery('#contact-form').serialize();
			
			jQuery.ajax({
				type: "POST",
				url: templateUrl+"/inc/sendMail.php",
				data: {name:name,email:email,message:message,emailTo:'test@test.com'}, 
				timeout: 6000,
				error: function(request,error) {
					if (error == "timeout") {
						jQuery('#timedout').fadeIn('slow');
						setTimeout(function() {
						    jQuery('#timedout').fadeOut('slow');
						}, 3000);
					}
					else {
						jQuery('#state').fadeIn('slow');
						jQuery("#state").html('The following error occured: ' + error + '');
						setTimeout(function() {
						    jQuery('#state').fadeOut('slow');
						}, 3000);
					}
				},
				success: function() {
					jQuery('span.valid').remove();
					jQuery('#thanks').fadeIn('slow');
					jQuery('input').val('');
					jQuery('textarea').val('');
					setTimeout(function() {
					    jQuery('#thanks').fadeOut('slow');
					}, 3000);
				}
			});
			
			return false;
		});
	</script>

					
								
			</div>
			 
					
	</section>
	<!-- /section -->
	



			<!-- footer -->
			<footer id="footer" role="contentinfo">
			
				<div class="container">
				
					<div class="row">
					
						<div class="col-xs-12 col-sm-6 col-sm-offset-3">

							<div id="social-profiles">
								<ul class="centerUl">
																			    
										    	<li><a href="link" target="_blank"><i class="icon-twitter icon-2x"></i></a></li>
										
										    										    
										    	<li><a href="link" target="_blank"><i class="icon-flickr icon-2x"></i></a></li>
										
										    										    
										    	<li><a href="link" target="_blank"><i class="icon-facebook icon-2x"></i></a></li>
										
										    
								</ul>
							</div>
														
							<!-- copyright -->
							<p class="copyright">
								© 2013 Cotton made for you by digitalcookers™.							</p>
							<!-- /copyright -->
							
						</div>
						
					</div>
					
				</div>
				
			</footer>
			<!-- /footer -->
			</div>
		</div>
		<!-- /wrapper -->

		

	<!-- js section start -->
	

</body>
</html>