<!DOCTYPE html>

<html lang="en">
<head>
		<!-- Basic Page Needs
		================================================== -->
		<meta charset="utf-8">
		<title>HP Strathmore Research Lab</title>
		<meta name="description" content="HP Strathmore Research Lab">
		<meta name="author" >
		<!-- Mobile Specific Metas
		================================================== -->
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<!-- CSS
		================================================== -->
		<!-- Bootstrap  -->
		<link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>assets/bootstrap/css/bootstrap.min.css">
		<!-- web font  
		<link href="http:/fonts.googleapis.com/css?family=Open+Sans:300,400,600,800" rel="stylesheet" type="text/css">-->
		<!-- plugin css  -->
		<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/js-plugin/animation-framework/animate.css" />
		<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/js-plugin/magnific-popup/magnific-popup.css" />
		<link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>assets/js-plugin/isotope/css/style.css">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/js-plugin/flexslider/flexslider.css" />
		<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/js-plugin/pageSlide/jquery.pageslide.css" />
		<!-- Owl carousel-->
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/js-plugin/owl.carousel/owl-carousel/owl.carousel.css">
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/js-plugin/owl.carousel/owl-carousel/owl.theme.css">
		<!-- icon fonts -->
		<link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>assets/font-icons/custom-icons/css/custom-icons.css">
		<link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>assets/font-icons/custom-icons/css/custom-icons-ie7.css">
		<!-- Custom css 
		<link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>assets/css/neon.css">-->
		<link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>assets/css/layout.css">
		<link type="text/css" id="colors" rel="stylesheet" href="<?php echo base_url(); ?>assets/css/colors.css">
		<!--[if lt IE 9]><script src="http:/html5shim.googlecode.com/svn/trunk/html5.js"></script> <![endif]-->
		<script src="<?php echo base_url(); ?>assets/js/modernizr-2.6.1.min.js"></script>
		
		<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/slider/engine1/style.css" />
	    <script type="text/javascript" src="<?php echo base_url(); ?>assets/slider/engine1/jquery.js"></script>
	    <style>
      #map_canvas {
        width: 1100px;
        height: 400px;
      }
    </style>

	    <script src="https:/maps.googleapis.com/maps/api/js?sensor=false"></script>
	    <script>
			function initialize() {
			  var myLatlng = new google.maps.LatLng(-1.310019, 36.813252);
			  var mapOptions = {
			    zoom: 15,
			    center: myLatlng
			  }
			  var map = new google.maps.Map(document.getElementById('map_canvas'), mapOptions);
			
			  var marker = new google.maps.Marker({
			      position: myLatlng,
			      map: map,
			      title: 'HP Strathmore Research Lab'
			  });
			  marker.setMap(map);
			}
			google.maps.event.addDomListener(window, 'load', initialize);
	    </script>


		<!-- Favicons
		================================================== -->
		<link rel="shortcut icon" href="<?php echo base_url(); ?>assets/images/favicon(1).ico">
		
	</head>
	<body data-spy="scroll" data-target="#scrollTarget" data-offset="150">
		<!-- Primary Page Layout 
		================================================== -->
		<!-- globalWrapper -->
		<div id="globalWrapper" class="localscroll">
			<!-- header -->
			<header id="mainHeader" class="navbar-fixed-top" role="banner">
				<div class="container">
					<nav class="navbar navbar-default scrollMenu" role="navigation">
						<div class="navbar-header">
							<img src="<?php echo base_url(); ?>assets/images/offlogo.JPG" class="img-responsive"/>
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
								 <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> 
							</button>
							
							 </div>
							
							<div class="collapse navbar-collapse navbar-ex1-collapse" id="scrollTarget">
								<ul class="nav navbar-nav pull-right" style="padding-left: 20px">
									<li class="active"><a href="#home"><i class="icon-home-outline"></i>Home</a> </li>
									<li><a href="#about"><i class="icon-star"></i>About</a> </li>
									<!--<li><a href="#news"><i class="icon-comment"></i>News</a> </li>-->
									<li><a href="#services"><i class="icon-thumbs-up"></i>Services</a> </li>
									
									<li><a href="#works"><i class="icon-popup-1"></i>Works</a> </li>
									<li><a href="#team"><i class="icon-users"></i>Team</a> </li>
									<li><a href="#contactSlice"><i class="icon-mail"></i>Contact</a> </li>
								</ul>
							</div>

						</nav>
					</div>
				</header>
				<!-- header -->
				<!-- content -->
				<section id="home" data-stellar-background-ratio="0.5">
					
					<?php include('assets/slider/index.html'); ?>
							
							<!--<div class="col-lg-7 col-sm-6">
								<div class="flexslider" id="flexHome">
									<ul class="slides">
										<li>
											<h1>Local  talent </h1>
											<h2>Local solutions </h2>
										</li>
										<li>
											<h1>Modern and Creative</h1>
											<h2>web systems</h2>
										</li>
										<li>
											<h1>Web design</h1>
											<h2>Fully responsive</h2>
										</li>
									</ul>
								</div> 
							</div>
							<div class="col-lg-5 col-sm-6 hidden-xs">
								<img src="<?php echo base_url(); ?>assets/images/theme-pics/home-girl.png" alt="Ashley, Bootstrap website template" class="img-responsive"/>
							</div>
						</div>
					</div>-->
				</section>
				
				<section class="slice" id="about">
					<div class="container">
						<div class="row">
							<div class="col-xs-12">
								<h1>About us</h1>
								<h2 class="subTitle">Local Talents, Local Solutions</h2>
							</div>
						</div>

						<div class="row">
							
															
								<div class="col-sm-4">
									<section class="imgWrapper"> 
										<img alt="" src="<?php echo base_url(); ?>assets/images/portfolio/off.jpg" class="img-responsive"> 
									</section>
									<div class="mediaHover">
										<div class="mask"></div>
										
									</div>
									
								</div>
								
							
							<div class="col-sm-8" style="float: right">
							   
							    <p>
							    	 The HP Strathmore Research Lab is a research lab working under the auspices of the Faculty of Information
									 Technology at Strathmore University. Founded in 2010, the research lab has been working for different Government
									 divisions for Kenya, Uganda, Malawi, Zimbabwe and Nigeria. The lab has undertaken several development and training
									 on data management and web portals for various divisions of these Governments.
								</p>

								<p>
									Strathmore Research and Consultancy Center Ltd, SRCC, is the consulting arm of Strathmore University. SRCC co-ordinates 
									consultancy work of the university to ensure that clients receive high quality advisory work under generally accepted 
									commercial arrangements.Strathmore Research and Consultancy Center Ltd, SRCC, is the consulting arm of Strathmore University. 
									SRCC co-ordinates consultancy work of the university to ensure that clients receive high quality advisory work under generally
									accepted commercial arrangements.

								</p>
								<p>
									SRCC has been in operation from 2003. We work closely with university lecturers and alumni who run their own consultancies.
								</p>
								<p>
									Under this banner (HP Strathmore Research Lab and SRCC), many project for various clients have been successfully undertaken, 
									with a couple of clients coming back to have more work done for them.
								</p>
								<p>
								<div class="col-md-3">
											<a class="btn btn-lg" title="" href="https://youtube.com/watch?v=VKxUVXX_YWI" target="blank">
												<i class="icon-flash"></i> Watch Video
											</a>
									</div>
								</p>
							</div>
							

							</div>
						</div>
					
				</section>
				<!-- news -->

				<!--<section class="slice" id="news">
					<div class="container imgHover">
						<div class="row">
							<div class="col-lg-12">
								<h1>Breaking news</h1>
								<h2 class="subTitle">Here, there and everywhere... what we've been doing</h2>
							</div>

							<article class="col-sm-4">

								<section class="imgWrapper"> 
									<img src="<?php echo base_url(); ?>assets/images/news/newsk.jpg" class="img-responsive" alt="Ashleye template image news" /> 
								</section>

								<div class="mediaHover">
									<div class="mask"></div>
									<div class="iconLinks"> 

										<a href="<?php echo base_url(); ?>assets/images/news/news1.jpg" class="image-link" title="Zoom" ><i class="icon-search iconRounded iconBig"></i><span>zoom</span></a> 
									</div>
								</div>
								<section class="newsText color4">
									<h3>New hair cut today</h3>
									<h4 class="date">September 12</h4>
									<p>The Duchess took her choice, and was gone in a moment. 'Let's go on with the game,' the Queen said to Alice; and Alice was  too much frightened to say a word, but slowly followed her back to the  croquet-ground.</p>
									<a href="https:/wrapbootstrap.com/theme/ashley-one-page-parallax-bootstrap-3-WB0R11207" class="btn btn-sm"><i class="icon-right-open-mini "></i>read more</a>
								</section>
								
							</article>


							<article class="col-sm-4">
								<section class="imgWrapper"> 
									<img src="<?php echo base_url(); ?>assets/images/news/news2.jpg" class="img-responsive" alt="snowflake template image news" /> 
								</section>
								<div class="mediaHover">
									<div class="mask"></div>
									<div class="iconLinks"> 
										<a href="<?php echo base_url(); ?>assets/images/news/news2.jpg" class="image-link" title="Zoom" ><i class="icon-search iconRounded iconBig"></i><span>zoom</span></a> 
									</div>
								</div>
								<section class="newsText color4">
									<h3>We are a family</h3>
									<h4 class="date">November 24</h4>
									<p>The Duchess took her choice, and was gone in a moment. 'Let's go on with the game,' the Queen said to Alice; and Alice was  too much frightened to say a word, but slowly followed her back to the  croquet-ground.</p>
									<a href="https:/wrapbootstrap.com/theme/ashley-one-page-parallax-bootstrap-3-WB0R11207" class="btn btn-sm"><i class="icon-right-open-mini "></i>read more</a>
								</section>
							</article>


							<article class="col-sm-4">
								<section class="imgWrapper"> 
									<img src="<?php echo base_url(); ?>assets/images/news/news3.jpg" class="img-responsive" alt="snowflake template image news" /> 
								</section>
								<div class="mediaHover">
									<div class="mask"></div>
									<div class="iconLinks"> 
										<a href="<?php echo base_url(); ?>assets/images/news/news3.jpg" class="image-link" title="Zoom" ><i class="icon-search iconRounded iconBig"></i><span>zoom</span></a> 
									</div>
								</div>
								<section class="newsText color4">
									<h3>Call me if you can</h3>
									<h4 class="date">November 24</h4>
									<p>The Duchess took her choice, and was gone in a moment. 'Let's go on with the game,' the Queen said to Alice; and Alice was  too much frightened to say a word, but slowly followed her back to the  croquet-ground.</p>
									<a href="https:/wrapbootstrap.com/theme/ashley-one-page-parallax-bootstrap-3-WB0R11207" class="btn btn-sm"><i class="icon-right-open-mini"></i>read more</a>
								</section>
							</article>


						</div>
					</div>
				</section>-->
				<!-- news -->
				<div id="paralaxSlice2" data-stellar-background-ratio="0.5">
					<div class="maskParent">
						<div class="paralaxMask"></div>
						<div class="paralaxText container">
							<i class="icon-mobile iconBig"></i><i class="icon-tablet iconBig"></i><i class="icon-laptop iconBig"></i><i class="icon-desktop iconBig"></i>
							<blockquote class="bigTitle">Mobile first, truly responsive,<br /> based on bootstrap 3</blockquote>
						</div>
					</div>
				</div>
				<!-- services -->
				<section class="slice color1" id="services">
					<div class="container">
						<div class="row">
							<div class="col-xs-12">
								<h1>Our services</h1>
								<h2 class="subTitle">We are doing a couple of things you might be interested in</h2>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-6">
								<div class="row boxFeature">
									<div class="col-xs-3">
										<i class="icon-heart iconBig"></i>
									</div>
									<div class="col-xs-9">
										<h2>Clean design</h2>
										<p>Elegant layouts that help you organize your content in the best way.</p>
									</div>
								</div>
							</div>
							<div class="col-sm-6">
								<div class="row boxFeature">
									<div class="col-xs-3">
										<i class="icon-plane-outline  iconBig"></i>
									</div>
									<div class="col-xs-9">
										<h2>HTML5 & CSS3</h2>
										<p>Built with modern technologies like HTML5 and CSS3, SEO optimised.</p>
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-6">
								<div class="row boxFeature">
									<div class="col-xs-3">
										<i class="icon-resize-full-outline iconBig"></i>
									</div>
									<div class="col-xs-9">
										<h2>Responsive design</h2>
										<p>Compatible with various desktop, tablet, and mobile devices.</p>
									</div>
								</div>
							</div>
							<div class="col-sm-6">
								<div class="row boxFeature">
									<div class="col-xs-3">
										<i class="icon-edit iconBig"></i>
									</div>
									<div class="col-xs-9">
										<h2>Easy Customization</h2>
										<p>Clear code and documentation, base on Bootstrap 3.</p>
									</div>
								</div>
							</div>
							
					</div>
					<div class="row">
						<div class="col-sm-6">
								<div class="row boxFeature">
									<div class="col-xs-3">
										<i class="icon-mobile iconBig"></i>
									</div>
									<div class="col-xs-9">
										<h2>Android Apps</h2>
										<p>Mobile applcation for smart phones.</p>
									</div>
								</div>
							</div>
					</div>
				</section>
				<!-- services --> 


				<div id="paralaxSlice1" data-stellar-background-ratio="0.5">
					<div class="maskParent">
						<div class="paralaxMask"></div>
						<div class="paralaxText container">
							<i class="icon-megaphone "></i>
							<blockquote class="bigTitle">Being a famous designer<br/>is like being a famous dentist<br/><small>NOREEN MORIOKA</small></blockquote>
						</div>
					</div>
				</div>
		
				<section class="slice" id="works">
					<div class="container imgHover">
						<div class="row">
							<div class="col-sm-12">
								<h1>Our Work</h1>
								<h2 class="subTitle">Latest cool projects we've been working on</h2>
							</div>
						</div>
							<div class="row">
							<?php foreach($projects as $rows) { ?>
							<article class="col-sm-4">

								<section class="imgWrapper" style="height: 220px;"> 
									<img src="<?php echo base_url().'assets/'.$rows['img']; ?>" class="img-responsive" alt="<?php echo $rows['title']; ?>" /> 
								</section>

								<div class="mediaHover">
									<div class="mask"></div>
									<div class="iconLinks"> 
											<!--<a href="<?php echo $rows['link']; ?>" title="link" class="sizer portfolioSheet" target="blank">
												<i class="icon-picture iconRounded iconBig"></i>
												<span>link</span>
											</a>-->
											<a data-toggle="modal" href="#<?php echo $rows['project_id']; ?>"  title="<?php echo $rows['title']; ?>">
												<i class="icon-popup-1 iconRounded iconBig"></i>
												<span>Read More</span>
											</a> 
											
										</div>
								</div>
								<section class="newsText color4">
									<h4><?php echo $rows['title']; ?></h4>
									
								<!-- Modal -->
									  <div class="modal fade" id="<?php echo $rows['project_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
									    <div class="modal-dialog">
									      <div class="modal-content">
									        <div class="modal-header">
									          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
									          <h4 class="modal-title" style="color:#000;"><?php echo $rows['title']; ?></h4>
									        </div>
									        <div class="modal-body" style="font-size: 14px;color:#000;">
									          <?php echo $rows['desc']; ?>
									        </div>
									        <div class="modal-footer" >
									          <a style="font-size: 14px;color:#000;" href="<?php echo $rows['link']; ?>" target="_blank">Click to view the website</a>
									        </div>
									       
									      </div><!-- /.modal-content -->
									    </div><!-- /.modal-dialog -->
									  </div><!-- /.modal -->
																
								</section>
								
							</article>
							<?php } ?>
						</div>
					</div>
					</section>

					<div id="paralaxSlice3" data-stellar-background-ratio="0.5">
						<div class="maskParent">
							<div class="paralaxMask"></div>
							<div class="paralaxText">
								<i class="icon-star iconBig"></i>
								<blockquote class="mt15">Write drunk; edit sober.<br/><small>ERNEST HEMINGWAY </small></blockquote>
							</div>
						</div>
					</div>
					<section class="slice" id="team">
						<div class="container">
							<div class="row">
								<div class="col-xs-12">
									<h1>Meet our team</h1>
									<h2 class="subTitle">We are beautiful and smart</h2>
								</div>
								<?php foreach($staff as $row) { ?>
								<article class="col-sm-4">

									<section class="imgWrapper"> 
										<img src="<?php echo base_url().'assets/'.$row['img']; ?>" class="img-responsive" alt="<?php echo $row['fullname']; ?>" /> 
									</section>

									<div class="mediaHover">
										<div class="mask"></div>
										<div class="iconLinks"> 

											<a href="<?php echo base_url().'assets/'.$row['img']; ?>" class="image-link" title="Zoom" ><i class="icon-search iconRounded iconBig"></i><span>zoom</span></a> 
										</div>
									</div>
									<section class="newsText color4">
											<div><h3><?php echo $row['fullname']; ?></h3></div>
											<div style="min-height: 30px;"><h4 class="date"><?php echo $row['position']; ?></h4></div>
											
											<div style="min-height: 180px;">
											<p>
												<?php echo $row['jd']; ?>
											</p>
											<p>
												<?php echo $row['education']; ?>
											</p>
											</div>
										<div class="boxContent">Email: <?php echo $row['email']; ?>
											<ul class="socialNetwork mt15">
												<li><a href="https:/facebook.com/<?php echo $row['facebook']; ?>" class="tips" title="" data-original-title="follow me on Facebook"><i class="icon-facebook-1 iconRounded"></i></a></li>
												<li><a href="https:/twitter.com/<?php echo $row['twitter']; ?>" class="tips" title="" data-original-title="follow me on Twitter"><i class="icon-twitter-bird iconRounded"></i></a></li>
												<li><a href="https:/google.com/<?php echo $row['google']; ?>" class="tips" title="" data-original-title="follow me on Google+"><i class="icon-gplus-1 iconRounded"></i></a></li>
												<!--<li><a href="#" class="tips" title="" data-original-title="follow me on Linkedin"><i class="icon-linkedin-1 iconRounded"></i></a></li>
												<li><a href="#" class="tips" title="" data-original-title="follow me on Dribble"><i class="icon-dribbble iconRounded"></i></a></li>
											--></ul>
										</div>
									</section>

								</article>
							
								<?php } ?>
								
							</div>
						</div>
					</section>

					<div id="paralaxSlice4" data-stellar-background-ratio="0.5" >
						<div class="maskParent">
							<div class="paralaxMask"></div>

							<div class="paralaxText">
								<blockquote>Keep in touch with us</blockquote>

							</div>
						</div>
					</div>
					<section class="slice"  id="contactSlice" >
						<div class="container">
							<div class="row">

							<div class="col-sm-12">
								<h1 class="noSubtitle">Contact us</h1>
							</div>
							<div class="col-sm-12">
							
								<div id="map_canvas" class="mb30"></div>
								
							
						    </div>
								<div class="col-sm-4">
									<h3>Address:</h3>
									<address>
										HP Strathmore Research Lab<br/>
										Madaraka Estate, Ole Sangale Road,<br/>
										P.O Box 59857, 00200 City Square<br/>
										Nairobi, Kenya<br/>
										
									</address>
									
								</div>
								<div class="col-sm-4">
									<h3>Phone:</h3>
									<address>
										+254 721 499 437<br/>
									</address>
								</div>
								<div class="col-sm-4">
									<h3>Email:</h3>
									<address>
										info@hpstrathmore.or.ke<br/>
									</address>
								</div>
								<!--<form method="post" action="http:/ashley-bootstrap3-website-template.little-neko.com/main/files/js-plugin/neko-contact-ajax-plugin/php/form-handler.php" id="contactfrm" role="form">

									<div class="col-sm-4"> 
										<div class="form-group">
											<label for="name">Name</label>
											<input type="text" class="form-control" name="name" id="name" placeholder="Enter name"  title="Please enter your name (at least 2 characters)"/>
										</div>
										<div class="form-group">
											<label for="email">Email</label>
											<input type="email" class="form-control" name="email" id="email" placeholder="Enter email" title="Please enter a valid email address"/>
										</div>
										<div class="form-group">
											<label for="phone">Phone</label>
											<input name="phone" class="form-control required digits" type="tel" id="phone" size="30" value="" placeholder="Enter email phone" title="Please enter a valid phone number (at least 10 characters)">
										</div>
									</div>
									<div class="col-sm-4">
										<div class="form-group">
											<label for="comments">Comments</label>
											<textarea name="comment" class="form-control" id="comments" cols="3" rows="5" placeholder="Enter your message…" title="Please enter your message (at least 10 characters)"></textarea>
										</div>
										<fieldset class="clearfix securityCheck">
											<legend>Security</legend>
											<div class="form-group">
												<img src="<?php echo base_url(); ?>assets/js-plugin/neko-contact-ajax-plugin/php/image.html" alt="Image verification" id="verifyImg"/>
												<input class="required form-control"  id="verify" name="verify" type="text" >
											</div>
										</fieldset>
									</div>                        
									<div class="col-md-8 col-md-offset-4">
										<div class="result"></div>
										<button name="submit" type="submit" class="btn btn-lg" id="submit"> Submit</button>
									</div>
								</form>-->
							</div>
						</div>
					</section>

					<!-- content -->
					<!-- footer -->
					
						<section  id="footerRights">
							<div class="container">
								<div class="row">
									<div class="col-sm-6">
										<p>Copyright © <?php echo @date('Y'); ?> <a href="#home" target="blank">hp-Strathmore</a> / All rights reserved.</p>
									</div>
									<div class="col-sm-6">
										<ul class="socialNetwork pull-right">
											<li><a href="#" class="tips" title="follow me on Facebook"><i class="icon-facebook-1 iconRounded"></i></a></li>
											<li><a href="https:/twitter.com/LIttleNeko1" class="tips" title="follow me on Twitter" target="_blank"><i class="icon-twitter-bird iconRounded"></i></a></li>
											<li><a href="#" class="tips" title="follow me on Google+"><i class="icon-gplus-1 iconRounded"></i></a></li>
											<li><a href="#" class="tips" title="follow me on Linkedin"><i class="icon-linkedin-1 iconRounded"></i></a></li>
											<li><a href="#" class="tips" title="follow me on Dribble"><i class="icon-dribbble iconRounded"></i></a></li>
										</ul>     
									</div>
								</div>
							</div>
						</section>
						<!-- End footer -->
					</div>
					<!-- global wrapper -->
		<!-- End Document 
		================================================== -->
		<script type="text/javascript" src="<?php echo base_url(); ?>assets/js-plugin/respond/respond.min.js"></script>
		<script type="text/javascript" src="<?php echo base_url(); ?>assets/js-plugin/jquery/1.8.3/jquery.min.js"></script>
		<script type="text/javascript" src="<?php echo base_url(); ?>assets/js-plugin/jquery-ui/jquery-ui-1.8.23.custom.min.js"></script>
		<!-- third party plugins  -->
		<script type="text/javascript" src="<?php echo base_url(); ?>assets/bootstrap/js/bootstrap.js"></script>
		<script type="text/javascript" src="<?php echo base_url(); ?>assets/js-plugin/easing/jquery.easing.1.3.js"></script>

		<script type="text/javascript" src="<?php echo base_url(); ?>assets/js-plugin/flexslider/jquery.flexslider-min.js"></script>

		<script type="text/javascript" src="<?php echo base_url(); ?>assets/js-plugin/isotope/jquery.isotope.min.js"></script>
		<script type="text/javascript" src="<?php echo base_url(); ?>assets/js-plugin/neko-contact-ajax-plugin/js/jquery.form.js"></script>
		<script type="text/javascript" src="<?php echo base_url(); ?>assets/js-plugin/neko-contact-ajax-plugin/js/jquery.validate.min.js"></script>
		<script type="text/javascript" src="<?php echo base_url(); ?>assets/js-plugin/magnific-popup/jquery.magnific-popup.min.js"></script>
		<script type="text/javascript" src="<?php echo base_url(); ?>assets/js-plugin/parallax/js/jquery.scrollTo-1.4.3.1-min.js"></script>
		<script type="text/javascript" src="<?php echo base_url(); ?>assets/js-plugin/parallax/js/jquery.localscroll-1.2.7-min.js"></script>
		<script type="text/javascript" src="<?php echo base_url(); ?>assets/js-plugin/parallax/js/jquery.stellar.min.js"></script>
		<!-- <script type="text/javascript" src="<?php echo base_url(); ?>assets/js-plugin/smoothscroll/SmoothScroll.js"></script> -->
		<script type="text/javascript" src="<?php echo base_url(); ?>assets/js-plugin/pageSlide/jquery.pageslide-custom.js"></script>
		<script type="text/javascript" src="<?php echo base_url(); ?>assets/js-plugin/jquery.sharrre-1.3.4/jquery.sharrre-1.3.4.min.js"></script>

		<script type="text/javascript" src="<?php echo base_url(); ?>assets/js-plugin/owl.carousel/owl-carousel/owl.carousel.min.js"></script>


		<!-- Custom  -->
		<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/custom.js"></script>
	</body>
	
<!-- Mirrored from ashley-bootstrap3-website-template.little-neko.com/main/files/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 29 Aug 2014 10:11:53 GMT -->
</html>
