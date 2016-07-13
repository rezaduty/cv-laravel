<!DOCTYPE html>
<html>
<head>
	<title>VR - Responsive vCard Template</title>
    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>

    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

{!! HTML::style('/css/style.css') !!}


    <link rel="stylesheet" type="text/css" href="css/style.css"/>
    <link rel="stylesheet" type="text/css" href="css/page_animations.css"/>
    <link rel="stylesheet" type="text/css" href="css/normalize.css"/>
    <link rel="stylesheet" type="text/css" href="css/animate.min.css"/>
  <link href='http://www.fontonline.ir/css/IranNastaliq.css' rel='stylesheet' type='text/css'>
  <link href='http://www.fontonline.ir/css/BNazanin.css' rel='stylesheet' type='text/css'>



    <style type="text/css">
    	h1 {
		    font-family:IranNastaliq,'IranNastaliq',tahoma;
		    font-size: 36px;
		    font-weight: bold;
		    text-align: center;
		}

		.mask-galaxy {
		    background: url(http://www.jpl.nasa.gov/spaceimages/v2/getMediumImage.php?id=PIA03519) center center;
		    -webkit-text-fill-color: transparent;
		    -webkit-background-clip: text;
		    -webkit-animation: travelGalaxy 35s linear infinite;
		    -moz-animation: travelGalaxy 35s linear infinite;
		    -moz-text-fill-color: transparent;
		    -moz-background-clip: text;
		    -moz-animation: travelGalaxy 35s linear infinite;
		    -o-text-fill-color: transparent;
		    -o-background-clip: text;
		    -o-animation: travelGalaxy 35s linear infinite;
		}

		@-webkit-keyframes travelGalaxy {
		    0% {background-position: right bottom;}
		    100% {background-position: left top;}
		}
		@-moz-keyframes travelGalaxy {
		    0% {background-position: right bottom;}
		    100% {background-position: left top;}
		}

.side_menu{
	float: right;
}
    </style>
</head>

<body class="theme_1" style="background: url('img/back.jpg') center 0 no-repeat;background-size: cover;background-attachment: fixed;">



<div class="mask-galaxy">
	<br />
	<h1>بسم الله رحمان رحیم</h1>
</div>

</div>




<div class="side_menu">


	
</div>






	<!-- Wrapper -->
	<div id="wrapper">

		<!-- Social Icons(Used for mobile) -->
		<div class="social_icons mobile">
			<ul>
				<li>
					<a href="#home" class="twitter">صفحه اول<i class="fa fa-twitter"></i></a>
				</li>
				<li>
					<a href="#resume" class="facebook">نمونه کار<i class="fa fa-facebook"></i></a>
				</li>
				<li>
					<a href="#blog" class="google-plus">بلاگ<i class="fa fa-google-plus"></i></a>
				</li>
				<li>
					<a href="#" class="linkedin">رزومه<i class="fa fa-linkedin-square"></i></a>
				</li>
				<li>
					<a href="#contact" class="github">تماس<i class="fa fa-github"></i></a>
				</li>
				<li>
					<a href="#about" class="youtube">درباره<i class="fa fa-youtube"></i></a>
				</li>
			</ul>
		</div>
		<!-- /Social -->

		<!-- Main Menu -->
		<div class="main_menu">
			<ul>
				<li>
					<a href="#home" class="active home" data-id="1"><i class="fa fa-home"></i></a>
				</li>
				<li>
					<a href="#about" class="about" data-id="2"><i class="fa fa-user"></i></a>
				</li>
				<li>
					<a href="#resume" class="resume" data-id="3"><i class="fa fa-tasks"></i></a>
				</li>
				<li>
					<a href="#portfolio" class="portfolio" data-id="4"><i class="fa fa-picture-o"></i></a>
				</li>
				<li>
					<a href="#blog" class="blog" data-id="5"><i class="fa fa-list"></i></a>
				</li>
				<li>
					<a href="#contact" class="contact" data-id="6"><i class="fa fa-envelope"></i></a>
				</li>
			</ul>
		</div>
		<!-- /Main Menu -->

		<!-- Main Content -->
		<div class="main_content">
			<div class="content">

				<!-- Home Page -->
				<div id="home" class="pt-page-current">

					<!-- Slider -->
					<div class="main_slider cycle-slideshow">
						<div class="overlay">
							<div class="name">
								Reza.duty
							</div>
							<div class="description">

								<!-- Description Rotator -->
								<div class="rotate">
									انجام پروژه های کامپوتری,,
									 طراحی انواع شبکه و تامین امنیت.,,
									برنامه نویس و طراح انواع برنامه های تحت وب و موبایل و دسکتاپ.
								</div>
								<!-- /Description Rotator -->

							</div>
						</div>
					    <img src="img/slider_1.jpg" alt="img" />
					    <img src="img/slider_2.jpg" alt="img" />
					    <img src="img/slider_3.jpg" alt="img" />
					</div>
					<!-- /Slider -->

					<div class="resume_btn goto_resume_btn"><i class="fa fa-list"></i>مشاهده رزومه</div>
					<a href="#" class="cv_download_btn"><i class="fa fa-download"></i>Download my CV</a>
				</div>
				<!-- /Home Page -->

				<!-- About Page -->
				<div id="about">
					<h1 class="title color">About Me</h1>

					<!-- Left Side -->
					<div class="left_side">

						<!-- Who i am -->
						<div class="box who_i_am">
							<div class="title">
								<div class="icon"><i class="fa fa-user"></i></div>
								<div class="text">WHO I AM</div>
								<div class="clear"></div>
							</div>

							<!-- Description -->
							<div class="text">
								My name is <strong>John Doe</strong> and I'm a <strong>Web Developer,
								UI Designer and Graphic &amp; Web Designer</strong>
								located in <strong>New York City, United States</strong>.
							</div>
							<!-- /Description -->

							<!-- Personal Details -->
							<div class="personal_details">
								<div class="item title">
									<div class="icon"><i class="fa fa-user"></i><span>Name</span></div>
									<div class="text">John Doe</div>
									<div class="clear"></div>
								</div>
								<div class="item title">
									<div class="icon"><i class="fa fa-calendar"></i><span>Birthday</span></div>
									<div class="text">January 17, 1992</div>
									<div class="clear"></div>
								</div>
								<div class="item title">
									<div class="icon"><i class="fa fa-map-marker"></i><span>Address</span></div>
									<div class="text">New York City</div>
									<div class="clear"></div>
								</div>
								<div class="item title">
									<div class="icon"><i class="fa fa-mobile"></i><span>Phone</span></div>
									<div class="text">+ 123-456-7890</div>
									<div class="clear"></div>
								</div>
								<div class="item title">
									<div class="icon"><i class="fa fa-envelope"></i><span>Email</span></div>
									<div class="text">john@site.com</div>
									<div class="clear"></div>
								</div>
								<div class="item title">
									<div class="icon"><i class="fa fa-external-link"></i><span>Website</span></div>
									<div class="text"><a href="#">www.website.com</a></div>
									<div class="clear"></div>
								</div>
							</div>
							<!-- /Personal Details -->

						</div>
						<!-- /Who i am -->

						<!-- What i do -->
						<div class="box what_i_do">
							<div class="title">
								<div class="icon"><i class="fa fa-certificate"></i></div>
								<div class="text">WHAT I DO</div>
								<div class="clear"></div>
							</div>
							<div class="text">
								Lorem ipsum dolor sit amet, consectetur
								adipiscing elit. Praesent condimentum sed elit
								vitae tristique. Aliquam erat volutpat. Nunc sit
								amet cursus libero. In fringilla egestas ornare.
								Vivamus enim tortor, ultricies nec lectus eget,
								interdum elementum elit. Ut laoreet neque sit
								amet velit auctor tempus. In ac lectus felis.
							</div>
						</div>
						<!-- /What i do -->

						<!-- Tools i use -->
						<div class="box tools_i_use">
							<div class="title">
								<div class="icon"><i class="fa fa-wrench"></i></div>
								<div class="text">TOOLS I USE</div>
								<div class="clear"></div>
							</div>
							<div class="tools">
								<a href="#" class="tool btn">Photoshop</a>
								<a href="#" class="tool btn">jQuery</a>
								<a href="#" class="tool btn">Wordpress</a>
								<a href="#" class="tool btn">After Effects</a>
								<a href="#" class="tool btn">Joomla</a>
								<a href="#" class="tool btn">Bootstrap</a>
								<a href="#" class="tool btn">Drupal</a>
							</div>
						</div>
						<!-- /Tools i use -->

					</div>
					<!-- /Left Side -->

					<!-- Right Side -->
					<div class="right_side">

						<!-- About Pictures -->
						<div class="box pictures cycle-slideshow">
						    <img src="img/about_1.jpg" class="first" alt="img" />
						    <img src="img/about_2.jpg" alt="img" />
						    <img src="img/about_3.jpg" alt="img" />
						</div>
						<!-- /About Pictures -->

						<!-- My Services -->
						<div class="box my_services">
							<div class="title">
								<div class="icon"><i class="fa fa-wrench"></i></div>
								<div class="text">MY SERVICES</div>
								<div class="clear"></div>
							</div>
							<div class="accordion">
								<div class="item">
									<div class="item_title">
										<div class="item_btn">
											<span class="text">Web Design</span>
											<span class="arrow"><i class="fa fa-plus-circle"></i></span>
											<div class="clear"></div>
										</div>
										<div class="clear"></div>
									</div>
									<div class="item_text">
										Lorem ipsum dolor sit amet, consectetur
										adipiscing elit. Praesent condimentum sed elit
										vitae tristique. Aliquam erat volutpat. Nunc sit
										amet cursus libero. In fringilla egestas ornare.
									</div>
									<div class="clear"></div>
								</div>
								<div class="item">
									<div class="item_title">
										<div class="item_btn">
											<span class="text">Web Development</span>
											<span class="arrow"><i class="fa fa-plus-circle"></i></span>
											<div class="clear"></div>
										</div>
										<div class="clear"></div>
									</div>
									<div class="item_text">
										Lorem ipsum dolor sit amet, consectetur
										adipiscing elit. Praesent condimentum sed elit
										vitae tristique. 
										<br /><br />
										Lorem ipsum dolor sit amet, consectetur
										adipiscing elit. 
									</div>
									<div class="clear"></div>
								</div>
								<div class="item">
									<div class="item_title">
										<div class="item_btn">
											<span class="text">Graphic Design</span>
											<span class="arrow"><i class="fa fa-plus-circle"></i></span>
											<div class="clear"></div>
										</div>
										<div class="clear"></div>
									</div>
									<div class="item_text">
										Lorem ipsum dolor sit amet, consectetur
										adipiscing elit. Praesent condimentum sed elit
										vitae tristique.
									</div>
									<div class="clear"></div>
								</div>
							</div>
						</div>
						<!-- /My Services -->

						<!-- Testimonials -->
						<div class="box testimonials">
							<div class="title">
								<div class="icon"><i class="fa fa-users"></i></div>
								<div class="text">TESTIMONIALS</div>
								<div class="clear"></div>
							</div>
							<div class="testimonials_btns">
								<div class="fa fa-caret-left left_btn"></div>
								<div class="fa fa-caret-right right_btn"></div>
								<div class="clear"></div>
							</div>
							<div class="testimonials cycle-slideshow" data-cycle-slides="div.testimonial">
								<div class="testimonial current">
									<div class="text">
										Lorem ipsum dolor sit amet, consectetur
										adipiscing elit. Praesent condimentum sed elit
										vitae tristique.
									</div>
									<div class="client">
										&dash; A Client
									</div>
								</div>
								<div class="testimonial">
									<div class="text">
										Lorem ipsum dolor sit amet, consectetur
										adipiscing elit. Praesent condimentum sed elit
										vitae tristique. Aliquam erat volutpat.
									</div>
									<div class="client">
										&dash; A Client
									</div>
								</div>
								<div class="testimonial">
									<div class="text">
										Lorem ipsum dolor sit amet, consectetur
										adipiscing elit.
									</div>
									<div class="client">
										&dash; A Client
									</div>
								</div>
							</div>
						</div>
						<!-- /Testimonials -->

					</div>
					<!-- /Right Side -->

					<div class="clear"></div>

					<!-- Awards -->
					<div class="box awards">
						<div class="title">
							<div class="icon"><i class="fa fa-trophy"></i></div>
							<div class="text">MY AWARDS</div>
							<div class="clear"></div>
						</div>
						<div class="awards">
							<div class="award">
								<div class="date">2014</div>
								<div class="body">
									<div class="award_title">1rst Award &bull; Name of Institute</div>
									Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent condimentum sed elit vitae tristique. Aliquam erat volutpat. Nunc sit amet cursus libero. In fringilla egestas ornare. Vivamus enim tortor, ultricies nec lectus eget, interdum elementum elit. Ut laoreet neque sit amet velit auctor tempus. In ac lectus felis.
								</div>
								<div class="clear"></div>
							</div>
							<div class="award">
								<div class="date">2013</div>
								<div class="body">
									<div class="award_title">2nd Award &bull; Name of Institute</div>
									Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent condimentum sed elit vitae tristique. Aliquam erat volutpat. Nunc sit amet cursus libero. In fringilla egestas ornare. Vivamus enim tortor, ultricies nec lectus eget, interdum elementum elit. Ut laoreet neque sit amet velit auctor tempus. In ac lectus felis.
								</div>
								<div class="clear"></div>
							</div>
							<div class="award">
								<div class="date">2012</div>
								<div class="body">
									<div class="award_title">3rd Award &bull; Name of Institute</div>
									Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent condimentum sed elit vitae tristique. Aliquam erat volutpat. Nunc sit amet cursus libero. In fringilla egestas ornare. Vivamus enim tortor, ultricies nec lectus eget, interdum elementum elit. Ut laoreet neque sit amet velit auctor tempus. In ac lectus felis.
								</div>
								<div class="clear"></div>
							</div>
						</div>
					</div>
					<!-- /Awards -->

					<div class="clear"></div>
				</div>
				<!-- /About Page -->

				<!-- Resume Page -->
				<div id="resume">
					<h1 class="title color">Resume</h1>

					<!-- Left Side -->
					<div class="left_side">

						<!-- Education -->
						<div class="education lists">
							<div class="box_title title">
								<div class="icon"><i class="fa fa-clock-o"></i></div>
								<div class="text">EDUCATION</div>
								<div class="clear"></div>
							</div>
							<div class="items">
								<div class="item">
									<div class="title">Name of University</div>
									<div class="subtitle"><span class="date_text">2010-2013</span>&bull;<span class="name">Computer Science</span></div>
									<div class="text">
										Lorem ipsum dolor sit amet, consectetur
										adipiscing elit. Praesent condimentum sed elit
										vitae tristique. Aliquam erat volutpat. Nunc sit
										amet cursus libero. In fringilla egestas ornare.
									</div>
								</div>
								<div class="item">
									<div class="title">Name of University</div>
									<div class="subtitle"><span class="date_text">2010-2013</span>&bull;<span class="name">Graphic Design</span></div>
									<div class="text">
										Lorem ipsum dolor sit amet, consectetur
										adipiscing elit. Praesent condimentum sed elit
										vitae tristique. Aliquam erat volutpat. Nunc sit
										amet cursus libero. In fringilla egestas ornare.
									</div>
								</div>
								<div class="item">
									<div class="title">Name of University</div>
									<div class="subtitle"><span class="date_text">2010-2013</span>&bull;<span class="name">Masters of Engineering</span></div>
									<div class="text">
										Lorem ipsum dolor sit amet, consectetur
										adipiscing elit. Praesent condimentum sed elit
										vitae tristique. Aliquam erat volutpat. Nunc sit
										amet cursus libero. In fringilla egestas ornare.
									</div>
								</div>
							</div>
						</div>
						<!-- /Education -->

						<!-- Employment -->
						<div class="employment lists">
							<div class="box_title title">
								<div class="icon"><i class="fa fa-bolt"></i></div>
								<div class="text">EMPLOYMENT</div>
								<div class="clear"></div>
							</div>
							<div class="items">
								<div class="item">
									<div class="title">Web Developer</div>
									<div class="subtitle"><span class="date"><i class="fa fa-calendar color"></i> 2010-2013</span>&bull;<span class="name">Company 2</span></div>
									<div class="text">
										Lorem ipsum dolor sit amet, consectetur
										adipiscing elit. Praesent condimentum sed elit
										vitae tristique. Aliquam erat volutpat. Nunc sit
										amet cursus libero. In fringilla egestas ornare.
									</div>
								</div>
								<div class="item">
									<div class="title">Graphics Designer</div>
									<div class="subtitle"><span class="date"><i class="fa fa-calendar color"></i> 2010-2013</span>&bull;<span class="name">Startup 1</span></div>
									<div class="text">
										Lorem ipsum dolor sit amet, consectetur
										adipiscing elit. Praesent condimentum sed elit
										vitae tristique. Aliquam erat volutpat. Nunc sit
										amet cursus libero. In fringilla egestas ornare.
									</div>
								</div>
								<div class="item">
									<div class="title">Animator</div>
									<div class="subtitle"><span class="date"><i class="fa fa-calendar color"></i> 2010-2013</span>&bull;<span class="name">Company 1</span></div>
									<div class="text">
										Lorem ipsum dolor sit amet, consectetur
										adipiscing elit. Praesent condimentum sed elit
										vitae tristique. Aliquam erat volutpat. Nunc sit
										amet cursus libero. In fringilla egestas ornare.
									</div>
								</div>
							</div>
						</div>
						<!-- /Employment -->

					</div>
					<!-- /Left Side -->

					<!-- Right Side -->
					<div class="right_side">

						<!-- Skills -->
						<div class="skills">
							<div class="box_title title">
								<div class="icon"><i class="fa fa-bolt"></i></div>
								<div class="text">SKILLS</div>
								<div class="clear"></div>
							</div>
							<div class="section">
								<div class="title"><i class="fa fa-pencil-square-o"></i>Graphic Design</div>
								<div class="items">
									<div class="item">
										<div class="name">Photoshop</div>
										<div class="bar_outer">
											<div class="bar_inner" data-width="100">
												<div class="text">100%</div>
											</div>
										</div>
									</div>
									<div class="item">
										<div class="name">Illustrator</div>
										<div class="bar_outer">
											<div class="bar_inner" data-width="75">
												<div class="text">75%</div>
											</div>
										</div>
									</div>
									<div class="item">
										<div class="name">Flash</div>
										<div class="bar_outer">
											<div class="bar_inner" data-width="0">
												<div class="text">0%</div>
											</div>
										</div>
									</div>
									<div class="item">
										<div class="name">After Effects</div>
										<div class="bar_outer">
											<div class="bar_inner" data-width="50">
												<div class="text">50%</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="section">
								<div class="title"><i class="fa fa-code"></i>Programming</div>
								<div class="items">
									<div class="item">
										<div class="name">HTML &amp; CSS</div>
										<div class="bar_outer">
											<div class="bar_inner" data-width="100">
												<div class="text">100%</div>
											</div>
										</div>
									</div>
									<div class="item">
										<div class="name">PHP</div>
										<div class="bar_outer">
											<div class="bar_inner" data-width="75">
												<div class="text">75%</div>
											</div>
										</div>
									</div>
									<div class="item">
										<div class="name">Javascript</div>
										<div class="bar_outer">
											<div class="bar_inner" data-width="0">
												<div class="text">0%</div>
											</div>
										</div>
									</div>
									<div class="item">
										<div class="name">jQuery</div>
										<div class="bar_outer">
											<div class="bar_inner" data-width="50">
												<div class="text">50%</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="section">
								<div class="title"><i class="fa fa-pencil-square-o"></i>Design</div>
								<div class="items">
									<div class="item">
										<div class="name">Web Design</div>
										<div class="bar_outer">
											<div class="bar_inner" data-width="100">
												<div class="text">100%</div>
											</div>
										</div>
									</div>
									<div class="item">
										<div class="name">Logo Design</div>
										<div class="bar_outer">
											<div class="bar_inner" data-width="75">
												<div class="text">75%</div>
											</div>
										</div>
									</div>
									<div class="item">
										<div class="name">Print Design</div>
										<div class="bar_outer">
											<div class="bar_inner" data-width="22">
												<div class="text">22%</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- /Skills -->

						<!-- Download CV -->
						<div class="resume_download lists">
							<div class="box_title title">
								<div class="icon"><i class="fa fa-file-text"></i></div>
								<div class="text">RESUME</div>
								<div class="clear"></div>
							</div>
							<a href="#" class="btn"><i class="fa fa-download"></i><span>Download my Resume</span><div class="clear"></div></a>
						</div>
						<!-- /Download CV -->

					</div>
					<!-- /Right Side -->

					<div class="clear"></div>
				</div>
				<!-- /Resume Page -->

				<!-- Portfolio Page -->
				<div id="portfolio">
					<h1 class="page_title title color">Portfolio</h1>

					<!-- Description -->
					<div class="page_info">
						Lorem ipsum dolor sit amet, consectetur
						adipiscing elit. Praesent condimentum sed elit
						vitae tristique. Aliquam erat volutpat. Nunc sit
						amet cursus libero. In fringilla egestas ornare.
					</div>
					<!-- /Description -->

					<!-- Portfolio Items Type Selector -->
					<ul class="portfolio_selector">
					    <li class="filter active btn" data-filter="all">All</li>
					    <li class="filter btn" data-filter="webdesign">Web Design</li>
					    <li class="filter btn" data-filter="webdevelopment">Web Development</li>
					    <li class="filter btn" data-filter="logodesign">Logo Design</li>
					</ul>
					<!-- /Portfolio Items Type Selector -->

					<!-- Portfolio Items -->
					<ul id="portfolio_grid">
					    <li class="mix webdesign">
					    	<a href="#portfolio_popup">
					    		<img src="img/portfolio_1.jpg" alt="img" />
					    		<div class="main">
					    			<div class="inner">
						    			<i class="fa fa-picture-o licon"></i>
						    			<i class="fa fa-search ricon"></i>
						    		</div>
					    		</div>
					    	</a>
				    		<div class="popup_information">
                                <div class="top">
                                    <img src="img/portfolio_1_r.jpg" alt="img"/>
                                </div>
                                <div class="bottom">
                                    <h3 class="title">Project Title</h3>
                                    <ul class="details">
                                    	<li>Client: Client Name</li>
                                    	<li>Date: 5-10-2013</li>
                                    </ul>
                                    <p>
										Lorem ipsum dolor sit amet, consectetur
										adipiscing elit. Praesent condimentum sed elit
										vitae tristique. Aliquam erat volutpat. Nunc sit
										amet cursus libero. In fringilla egestas ornare.
                                    </p>
                                    <div class="line">
	                                    <a href="#">Go to project</a>
	                                    <div class="share">
		                                    <span>or share it</span>
		                                    <a href="#" class="fa fa-twitter"></a>
		                                    <a href="#" class="fa fa-facebook"></a>
		                                    <a href="#" class="fa fa-youtube"></a>
		                                    <div class="clear"></div>
		                                </div>
		                            </div>
                                </div>
                                <div class="clear"></div>
                            </div>
					    </li>
					    <li class="mix webdesign">
					    	<a href="#portfolio_popup">
					    		<img src="img/portfolio_2.jpg" alt="img" />
					    		<div class="main">
					    			<div class="inner">
						    			<i class="fa fa-video-camera licon"></i>
						    			<i class="fa fa-search ricon"></i>
						    		</div>
					    		</div>
					    	</a>
				    		<div class="popup_information">
                                <div class="top video">
                                	<iframe width="560" height="315" src="//" style="border:none;" allowfullscreen></iframe>
                                	<span class="video_url">http://www.youtube.com/embed/fa8rjN1xHn8?wmode=transparent</span>
                                </div>
                                <div class="bottom">
                                    <h3 class="title">Project Title</h3>
                                    <ul class="details">
                                    	<li>Client: Client Name</li>
                                    	<li>Date: 5-10-2013</li>
                                    </ul>
                                    <p>
										Lorem ipsum dolor sit amet, consectetur
										adipiscing elit. Praesent condimentum sed elit
										vitae tristique. Aliquam erat volutpat. Nunc sit
										amet cursus libero. In fringilla egestas ornare.
                                    </p>
                                    <div class="line">
	                                    <a href="#">Go to project</a>
	                                    <div class="share">
		                                    <span>or share it</span>
		                                    <a href="#" class="fa fa-twitter"></a>
		                                    <a href="#" class="fa fa-facebook"></a>
		                                    <a href="#" class="fa fa-youtube"></a>
		                                    <div class="clear"></div>
		                                </div>
		                            </div>
                                </div>
                                <div class="clear"></div>
                            </div>
					    </li>
					    <li class="mix webdevelopment">
					    	<a href="#portfolio_popup">
					    		<img src="img/portfolio_3.jpg" alt="img" />
					    		<div class="main">
					    			<div class="inner">
						    			<i class="fa fa-video-camera licon"></i>
						    			<i class="fa fa-search ricon"></i>
						    		</div>
					    		</div>
					    	</a>
				    		<div class="popup_information">
                                <div class="top video">
                                	<iframe width="560" height="315" src="//" style="border:none;" allowfullscreen></iframe>
                                	<span class="video_url">http://player.vimeo.com/video/83436955?title=0&amp;byline=0&amp;portrait=0&amp;color=f52a2d</span>
                                </div>
                                <div class="bottom">
                                    <h3 class="title">Project Title</h3>
                                    <ul class="details">
                                    	<li>Client: Client Name</li>
                                    	<li>Date: 5-10-2013</li>
                                    </ul>
                                    <p>
										Lorem ipsum dolor sit amet, consectetur
										adipiscing elit. Praesent condimentum sed elit
										vitae tristique. Aliquam erat volutpat. Nunc sit
										amet cursus libero. In fringilla egestas ornare.
                                    </p>
                                    <div class="line">
	                                    <a href="#">Go to project</a>
	                                    <div class="share">
		                                    <span>or share it</span>
		                                    <a href="#" class="fa fa-twitter"></a>
		                                    <a href="#" class="fa fa-facebook"></a>
		                                    <a href="#" class="fa fa-youtube"></a>
		                                    <div class="clear"></div>
		                                </div>
		                            </div>
                                </div>
                                <div class="clear"></div>
                            </div>
					    </li>
					    <li class="mix logodesign">
					    	<a href="#portfolio_popup">
					    		<img src="img/portfolio_4.jpg" alt="img" />
					    		<div class="main">
					    			<div class="inner">
						    			<i class="fa fa-picture-o licon"></i>
						    			<i class="fa fa-search ricon"></i>
						    		</div>
					    		</div>
					    	</a>
				    		<div class="popup_information">
                                <div class="top">
                                    <img src="img/portfolio_4_r.jpg" alt="img"/>
                                </div>
                                <div class="bottom">
                                    <h3 class="title">Project Title</h3>
                                    <ul class="details">
                                    	<li>Client: Client Name</li>
                                    	<li>Date: 5-10-2013</li>
                                    </ul>
                                    <p>
										Lorem ipsum dolor sit amet, consectetur
										adipiscing elit. Praesent condimentum sed elit
										vitae tristique. Aliquam erat volutpat. Nunc sit
										amet cursus libero. In fringilla egestas ornare.
                                    </p>
                                    <div class="line">
	                                    <a href="#">Go to project</a>
	                                    <div class="share">
		                                    <span>or share it</span>
		                                    <a href="#" class="fa fa-twitter"></a>
		                                    <a href="#" class="fa fa-facebook"></a>
		                                    <a href="#" class="fa fa-youtube"></a>
		                                    <div class="clear"></div>
		                                </div>
		                            </div>
                                </div>
                                <div class="clear"></div>
                            </div>
					    </li>
					    <li class="mix webdevelopment">
					    	<a href="#portfolio_popup">
					    		<img src="img/portfolio_5.jpg" alt="img" />
					    		<div class="main">
					    			<div class="inner">
						    			<i class="fa fa-picture-o licon"></i>
						    			<i class="fa fa-search ricon"></i>
						    		</div>
					    		</div>
					    	</a>
				    		<div class="popup_information">
                                <div class="top">
                                    <img src="img/portfolio_5_r.jpg" alt="img"/>
                                </div>
                                <div class="bottom">
                                    <h3 class="title">Project Title</h3>
                                    <ul class="details">
                                    	<li>Client: Client Name</li>
                                    	<li>Date: 5-10-2013</li>
                                    </ul>
                                    <p>
										Lorem ipsum dolor sit amet, consectetur
										adipiscing elit. Praesent condimentum sed elit
										vitae tristique. Aliquam erat volutpat. Nunc sit
										amet cursus libero. In fringilla egestas ornare.
                                    </p>
                                    <div class="line">
	                                    <a href="#">Go to project</a>
	                                    <div class="share">
		                                    <span>or share it</span>
		                                    <a href="#" class="fa fa-twitter"></a>
		                                    <a href="#" class="fa fa-facebook"></a>
		                                    <a href="#" class="fa fa-youtube"></a>
		                                    <div class="clear"></div>
		                                </div>
		                            </div>
                                </div>
                                <div class="clear"></div>
                            </div>
					    </li>
					    <li class="mix logodesign">
					    	<a href="#portfolio_popup">
					    		<img src="img/portfolio_6.jpg" alt="img" />
					    		<div class="main">
					    			<div class="inner">
						    			<i class="fa fa-picture-o licon"></i>
						    			<i class="fa fa-search ricon"></i>
						    		</div>
					    		</div>
					    	</a>
				    		<div class="popup_information">
                                <div class="top">
                                    <img src="img/portfolio_6_r.jpg" alt="img"/>
                                </div>
                                <div class="bottom">
                                    <h3 class="title">Project Title</h3>
                                    <ul class="details">
                                    	<li>Client: Client Name</li>
                                    	<li>Date: 5-10-2013</li>
                                    </ul>
                                    <p>
										Lorem ipsum dolor sit amet, consectetur
										adipiscing elit. Praesent condimentum sed elit
										vitae tristique. Aliquam erat volutpat. Nunc sit
										amet cursus libero. In fringilla egestas ornare.
                                    </p>
                                    <div class="line">
	                                    <a href="#">Go to project</a>
	                                    <div class="share">
		                                    <span>or share it</span>
		                                    <a href="#" class="fa fa-twitter"></a>
		                                    <a href="#" class="fa fa-facebook"></a>
		                                    <a href="#" class="fa fa-youtube"></a>
		                                    <div class="clear"></div>
		                                </div>
		                            </div>
                                </div>
                                <div class="clear"></div>
                            </div>
					    </li>
					    <li class="mix webdesign">
					    	<a href="#portfolio_popup">
					    		<img src="img/portfolio_7.jpg" alt="img" />
					    		<div class="main">
					    			<div class="inner">
						    			<i class="fa fa-picture-o licon"></i>
						    			<i class="fa fa-search ricon"></i>
						    		</div>
					    		</div>
					    	</a>
				    		<div class="popup_information">
                                <div class="top">
                                    <img src="img/portfolio_7_r.jpg" alt="img"/>
                                </div>
                                <div class="bottom">
                                    <h3 class="title">Project Title</h3>
                                    <ul class="details">
                                    	<li>Client: Client Name</li>
                                    	<li>Date: 5-10-2013</li>
                                    </ul>
                                    <p>
										Lorem ipsum dolor sit amet, consectetur
										adipiscing elit. Praesent condimentum sed elit
										vitae tristique. Aliquam erat volutpat. Nunc sit
										amet cursus libero. In fringilla egestas ornare.
                                    </p>
                                    <div class="line">
	                                    <a href="#">Go to project</a>
	                                    <div class="share">
		                                    <span>or share it</span>
		                                    <a href="#" class="fa fa-twitter"></a>
		                                    <a href="#" class="fa fa-facebook"></a>
		                                    <a href="#" class="fa fa-youtube"></a>
		                                    <div class="clear"></div>
		                                </div>
		                            </div>
                                </div>
                                <div class="clear"></div>
                            </div>
					    </li>
					    <li class="mix logodesign">
					    	<a href="#portfolio_popup">
					    		<img src="img/portfolio_8.jpg" alt="img" />
					    		<div class="main">
					    			<div class="inner">
						    			<i class="fa fa-picture-o licon"></i>
						    			<i class="fa fa-search ricon"></i>
						    		</div>
					    		</div>
					    	</a>
				    		<div class="popup_information">
                                <div class="top">
                                    <img src="img/portfolio_8_r.jpg" alt="img"/>
                                </div>
                                <div class="bottom">
                                    <h3 class="title">Project Title</h3>
                                    <ul class="details">
                                    	<li>Client: Client Name</li>
                                    	<li>Date: 5-10-2013</li>
                                    </ul>
                                    <p>
										Lorem ipsum dolor sit amet, consectetur
										adipiscing elit. Praesent condimentum sed elit
										vitae tristique. Aliquam erat volutpat. Nunc sit
										amet cursus libero. In fringilla egestas ornare.
                                    </p>
                                    <div class="line">
	                                    <a href="#">Go to project</a>
	                                    <div class="share">
		                                    <span>or share it</span>
		                                    <a href="#" class="fa fa-twitter"></a>
		                                    <a href="#" class="fa fa-facebook"></a>
		                                    <a href="#" class="fa fa-youtube"></a>
		                                    <div class="clear"></div>
		                                </div>
		                            </div>
                                </div>
                                <div class="clear"></div>
                            </div>
					    </li>
					    <li class="mix logodesign">
					    	<a href="#portfolio_popup">
					    		<img src="img/portfolio_9.jpg" alt="img" />
					    		<div class="main">
					    			<div class="inner">
						    			<i class="fa fa-picture-o licon"></i>
						    			<i class="fa fa-search ricon"></i>
						    		</div>
					    		</div>
					    	</a>
				    		<div class="popup_information">
                                <div class="top">
                                    <img src="img/portfolio_9_r.jpg" alt="img"/>
                                </div>
                                <div class="bottom">
                                    <h3 class="title">Project Title</h3>
                                    <ul class="details">
                                    	<li>Client: Client Name</li>
                                    	<li>Date: 5-10-2013</li>
                                    </ul>
                                    <p>
										Lorem ipsum dolor sit amet, consectetur
										adipiscing elit. Praesent condimentum sed elit
										vitae tristique. Aliquam erat volutpat. Nunc sit
										amet cursus libero. In fringilla egestas ornare.
                                    </p>
                                    <div class="line">
	                                    <a href="#">Go to project</a>
	                                    <div class="share">
		                                    <span>or share it</span>
		                                    <a href="#" class="fa fa-twitter"></a>
		                                    <a href="#" class="fa fa-facebook"></a>
		                                    <a href="#" class="fa fa-youtube"></a>
		                                    <div class="clear"></div>
		                                </div>
		                            </div>
                                </div>
                                <div class="clear"></div>
                            </div>
					    </li>
					    <li class="mix webdevelopment">
					    	<a href="#portfolio_popup">
					    		<img src="img/portfolio_5.jpg" alt="img" />
					    		<div class="main">
					    			<div class="inner">
						    			<i class="fa fa-picture-o licon"></i>
						    			<i class="fa fa-search ricon"></i>
						    		</div>
					    		</div>
					    	</a>
				    		<div class="popup_information">
                                <div class="top">
                                    <img src="img/portfolio_5_r.jpg" alt="img"/>
                                </div>
                                <div class="bottom">
                                    <h3 class="title">Project Title</h3>
                                    <ul class="details">
                                    	<li>Client: Client Name</li>
                                    	<li>Date: 5-10-2013</li>
                                    </ul>
                                    <p>
										Lorem ipsum dolor sit amet, consectetur
										adipiscing elit. Praesent condimentum sed elit
										vitae tristique. Aliquam erat volutpat. Nunc sit
										amet cursus libero. In fringilla egestas ornare.
                                    </p>
                                    <div class="line">
	                                    <a href="#">Go to project</a>
	                                    <div class="share">
		                                    <span>or share it</span>
		                                    <a href="#" class="fa fa-twitter"></a>
		                                    <a href="#" class="fa fa-facebook"></a>
		                                    <a href="#" class="fa fa-youtube"></a>
		                                    <div class="clear"></div>
		                                </div>
		                            </div>
                                </div>
                                <div class="clear"></div>
                            </div>
					    </li>
					    <li class="mix logodesign">
					    	<a href="#portfolio_popup">
					    		<img src="img/portfolio_6.jpg" alt="img" />
					    		<div class="main">
					    			<div class="inner">
						    			<i class="fa fa-picture-o licon"></i>
						    			<i class="fa fa-search ricon"></i>
						    		</div>
					    		</div>
					    	</a>
				    		<div class="popup_information">
                                <div class="top">
                                    <img src="img/portfolio_6_r.jpg" alt="img"/>
                                </div>
                                <div class="bottom">
                                    <h3 class="title">Project Title</h3>
                                    <ul class="details">
                                    	<li>Client: Client Name</li>
                                    	<li>Date: 5-10-2013</li>
                                    </ul>
                                    <p>
										Lorem ipsum dolor sit amet, consectetur
										adipiscing elit. Praesent condimentum sed elit
										vitae tristique. Aliquam erat volutpat. Nunc sit
										amet cursus libero. In fringilla egestas ornare.
                                    </p>
                                    <div class="line">
	                                    <a href="#">Go to project</a>
	                                    <div class="share">
		                                    <span>or share it</span>
		                                    <a href="#" class="fa fa-twitter"></a>
		                                    <a href="#" class="fa fa-facebook"></a>
		                                    <a href="#" class="fa fa-youtube"></a>
		                                    <div class="clear"></div>
		                                </div>
		                            </div>
                                </div>
                                <div class="clear"></div>
                            </div>
					    </li>
					    <li class="mix webdesign">
					    	<a href="#portfolio_popup">
					    		<img src="img/portfolio_1.jpg" alt="img" />
					    		<div class="main">
					    			<div class="inner">
						    			<i class="fa fa-picture-o licon"></i>
						    			<i class="fa fa-search ricon"></i>
						    		</div>
					    		</div>
					    	</a>
				    		<div class="popup_information">
                                <div class="top">
                                    <img src="img/portfolio_1_r.jpg" alt="img"/>
                                </div>
                                <div class="bottom">
                                    <h3 class="title">Project Title</h3>
                                    <ul class="details">
                                    	<li>Client: Client Name</li>
                                    	<li>Date: 5-10-2013</li>
                                    </ul>
                                    <p>
										Lorem ipsum dolor sit amet, consectetur
										adipiscing elit. Praesent condimentum sed elit
										vitae tristique. Aliquam erat volutpat. Nunc sit
										amet cursus libero. In fringilla egestas ornare.
                                    </p>
                                    <div class="line">
	                                    <a href="#">Go to project</a>
	                                    <div class="share">
		                                    <span>or share it</span>
		                                    <a href="#" class="fa fa-twitter"></a>
		                                    <a href="#" class="fa fa-facebook"></a>
		                                    <a href="#" class="fa fa-youtube"></a>
		                                    <div class="clear"></div>
		                                </div>
		                            </div>
                                </div>
                                <div class="clear"></div>
                            </div>
					    </li>
					    <li class="gap"></li>
					</ul>
					<!-- /Portfolio Items -->

					<div id="portfolio_popup" class="zoom-anim-dialog mfp-hide"></div>
					<div class="clear"></div>
				</div>
				<!-- /Portfolio Page -->

				<!-- Blog Page -->
				<div id="blog">
					<h1 class="title color">Blog</h1>

					<!-- Blog Posts -->
					<div class="blog_posts">
						<div class="back_to_blog btn">Back to blog</div>

						<!-- Blog Post -->
						<div class="post animate animated">
							<div class="media">
								<div class="btns">
									<div class="fa fa-caret-left left_btn"></div>
									<div class="fa fa-caret-right right_btn"></div>
									<div class="clear"></div>
								</div>
								<div class="media_slideshow cycle-slideshow" data-cycle-speed="1000" data-cycle-timeout="4000">
									<img src="img/blog_img1.jpg" alt="img" />
									<img src="img/blog_img2.jpg" alt="img" />
									<img src="img/blog_img5.jpg" alt="img" />
								</div>
							</div>
							<div class="post_data">
								<div class="box_title title">
									<div class="icon"><i class="fa fa-picture-o"></i></div>
									<div class="text"><a href="#" class="read_more_btn">Lorem ipsum dolor sit amet</a></div>
									<div class="clear"></div>
								</div>
								<div class="info">
									<div class="meta user">
										<i class="fa fa-user"></i><span><a href="#">user</a></span>
									</div>
									<div class="meta date">
										<i class="fa fa-calendar"></i><span>2 hours ago</span>
									</div>
									<div class="meta tags">
										<i class="fa fa-tags"></i><span><a href="#">web</a>, <a href="#">design</a></span>
									</div>
									<div class="meta comments">
										<i class="fa fa-comments-o"></i><span>10</span>
									</div>
								</div>
								<div class="preview_body body">
									Lorem ipsum dolor sit amet, consectetur
									adipiscing elit. Praesent condimentum sed elit
									vitae tristique. Aliquam erat volutpat. Nunc sit
									amet cursus libero. In fringilla egestas ornare.
								</div>
								<div class="hidden_body body">
									<div class="body">
										<p>
											Lorem ipsum dolor sit amet, consectetur
											adipiscing elit. Praesent condimentum sed elit
											vitae tristique. Aliquam erat volutpat. Nunc sit
											amet cursus libero. In fringilla egestas ornare.
										</p>
										<p>
											Lorem ipsum dolor sit amet, consectetur
											adipiscing elit. Praesent condimentum sed elit
											vitae tristique. Aliquam erat volutpat. Nunc sit
											amet cursus libero. In fringilla egestas ornare.
										</p>
										<p>
											Lorem ipsum dolor sit amet, consectetur
											adipiscing elit. Praesent condimentum sed elit
											vitae tristique. Aliquam erat volutpat. Nunc sit
											amet cursus libero. In fringilla egestas ornare.
										</p>
										<p>
											Lorem ipsum dolor sit amet, consectetur
											adipiscing elit. Praesent condimentum sed elit
											vitae tristique. Aliquam erat volutpat. Nunc sit
											amet cursus libero. In fringilla egestas ornare.
										</p>
									</div>
									<div class="about_author">
										<div class="title">About Author</div>
										<img src="img/avatar.jpg" alt="img" />
										<div class="text">
											Lorem ipsum dolor sit amet, consectetur
											adipiscing elit. Praesent condimentum sed elit
											vitae tristique. Aliquam erat volutpat. Nunc sit
											amet cursus libero. In fringilla egestas ornare.
										</div>
										<div class="clear"></div>
									</div>
									<div class="post_comments">
										<div class="box_title title">
											<div class="icon"><i class="fa fa-comments-o"></i></div>
											<div class="text">5 Comments</div>
											<div class="clear"></div>
										</div>
										<div class="comments">
											<div class="comment">
												<img src="img/avatar.jpg" alt="img" />
												<div class="text">
													<div class="name">John Doe</div>
													<div class="date">12, September, 2013</div>
													Lorem ipsum dolor sit amet, consectetur
													adipiscing elit. Praesent condimentum sed elit
													vitae tristique. Aliquam erat volutpat. Nunc sit
													amet cursus libero. In fringilla egestas ornare.
												</div>
												<div class="comment sub">
													<img src="img/avatar.jpg" alt="img" />
													<div class="text">
														<div class="name">John Doe</div>
														<div class="date">12, September, 2013</div>
														Lorem ipsum dolor sit amet, consectetur
														adipiscing elit. Praesent condimentum sed elit
														vitae tristique. Aliquam erat volutpat. Nunc sit
														amet cursus libero. In fringilla egestas ornare.
													</div>
													<div class="clear"></div>
												</div>
												<div class="clear"></div>
											</div>
											<div class="comment">
												<img src="img/avatar.jpg" alt="img" />
												<div class="text">
													<div class="name">John Doe</div>
													<div class="date">12, September, 2013</div>
													Lorem ipsum dolor sit amet, consectetur
													adipiscing elit. Praesent condimentum sed elit
													vitae tristique. Aliquam erat volutpat. Nunc sit
													amet cursus libero. In fringilla egestas ornare.
												</div>
												<div class="clear"></div>
											</div>
											<div class="comment">
												<img src="img/avatar.jpg" alt="img" />
												<div class="text">
													<div class="name">John Doe</div>
													<div class="date">12, September, 2013</div>
													Lorem ipsum dolor sit amet, consectetur
													adipiscing elit. Praesent condimentum sed elit
													vitae tristique. Aliquam erat volutpat. Nunc sit
													amet cursus libero. In fringilla egestas ornare.
												</div>
												<div class="comment sub">
													<img src="img/avatar.jpg" alt="img" />
													<div class="text">
														<div class="name">John Doe</div>
														<div class="date">12, September, 2013</div>
														Lorem ipsum dolor sit amet, consectetur
														adipiscing elit. Praesent condimentum sed elit
														vitae tristique. Aliquam erat volutpat. Nunc sit
														amet cursus libero. In fringilla egestas ornare.
													</div>
													<div class="clear"></div>
												</div>
												<div class="clear"></div>
											</div>
										</div>
										<div class="comment_form">
											<div class="box_title title">
												<div class="icon"><i class="fa fa-comment-o"></i></div>
												<div class="text">Add a Comment</div>
												<div class="clear"></div>
											</div>
											<div class="form">
												<input type="text" name="name" class="name" value="" placeholder="Name *" />
												<input type="email" name="email" class="email" value="" placeholder="Email *" />
												<input type="text" name="website" class="website" value="" placeholder="Website" />
												<textarea name="comment_body" placeholder="Your Comment" class="comment_body"></textarea>
												<div class="btn post_comment_btn">Post Comment</div>
												<div class="clear"></div>
											</div>
										</div>
									</div>
								</div>
								<div class="btns">
									<a href="#" class="btn read_more_btn">Read More</a>
									<div class="social_btns">
										<a href="#" class="btn fa fa-twitter"></a>
										<a href="#" class="btn fa fa-facebook"></a>
									</div>
								</div>
							</div>
							<div class="clear"></div>
						</div>
						<!-- /Blog Post -->

						<!-- Blog Post -->
						<div class="post">
							<div class="media video">
                            	<iframe width="560" height="315" src="//" style="border:none;" allowfullscreen></iframe>
                            	<span class="video_url">http://www.youtube.com/embed/fa8rjN1xHn8?start=09&amp;wmode=transparent</span>
							</div>
							<div class="post_data">
								<div class="box_title title">
									<div class="icon"><i class="fa fa-film"></i></div>
									<div class="text"><a href="#" class="read_more_btn">Lorem ipsum dolor sit amet</a></div>
									<div class="clear"></div>
								</div>
								<div class="info">
									<div class="meta user">
										<i class="fa fa-user"></i><span><a href="#">user</a></span>
									</div>
									<div class="meta date">
										<i class="fa fa-calendar"></i><span>2 hours ago</span>
									</div>
									<div class="meta tags">
										<i class="fa fa-tags"></i><span><a href="#">web</a>, <a href="#">design</a></span>
									</div>
									<div class="meta comments">
										<i class="fa fa-comments-o"></i><span>10</span>
									</div>
								</div>
								<div class="preview_body body">
									Lorem ipsum dolor sit amet, consectetur
									adipiscing elit. Praesent condimentum sed elit
									vitae tristique. Aliquam erat volutpat. Nunc sit
									amet cursus libero. In fringilla egestas ornare.
								</div>
								<div class="hidden_body body">
									<div class="body">
										<p>
											Lorem ipsum dolor sit amet, consectetur
											adipiscing elit. Praesent condimentum sed elit
											vitae tristique. Aliquam erat volutpat. Nunc sit
											amet cursus libero. In fringilla egestas ornare.
										</p>
										<p>
											Lorem ipsum dolor sit amet, consectetur
											adipiscing elit. Praesent condimentum sed elit
											vitae tristique. Aliquam erat volutpat. Nunc sit
											amet cursus libero. In fringilla egestas ornare.
										</p>
										<p>
											Lorem ipsum dolor sit amet, consectetur
											adipiscing elit. Praesent condimentum sed elit
											vitae tristique. Aliquam erat volutpat. Nunc sit
											amet cursus libero. In fringilla egestas ornare.
										</p>
										<p>
											Lorem ipsum dolor sit amet, consectetur
											adipiscing elit. Praesent condimentum sed elit
											vitae tristique. Aliquam erat volutpat. Nunc sit
											amet cursus libero. In fringilla egestas ornare.
										</p>
									</div>
									<div class="about_author">
										<div class="title">About Author</div>
										<img src="img/avatar.jpg" alt="img" />
										<div class="text">
											Lorem ipsum dolor sit amet, consectetur
											adipiscing elit. Praesent condimentum sed elit
											vitae tristique. Aliquam erat volutpat. Nunc sit
											amet cursus libero. In fringilla egestas ornare.
										</div>
										<div class="clear"></div>
									</div>
									<div class="post_comments">
										<div class="box_title title">
											<div class="icon"><i class="fa fa-comments-o"></i></div>
											<div class="text">5 Comments</div>
											<div class="clear"></div>
										</div>
										<div class="comments">
											<div class="comment">
												<img src="img/avatar.jpg" alt="img" />
												<div class="text">
													<div class="name">John Doe</div>
													<div class="date">12, September, 2013</div>
													Lorem ipsum dolor sit amet, consectetur
													adipiscing elit. Praesent condimentum sed elit
													vitae tristique. Aliquam erat volutpat. Nunc sit
													amet cursus libero. In fringilla egestas ornare.
												</div>
												<div class="comment sub">
													<img src="img/avatar.jpg" alt="img" />
													<div class="text">
														<div class="name">John Doe</div>
														<div class="date">12, September, 2013</div>
														Lorem ipsum dolor sit amet, consectetur
														adipiscing elit. Praesent condimentum sed elit
														vitae tristique. Aliquam erat volutpat. Nunc sit
														amet cursus libero. In fringilla egestas ornare.
													</div>
													<div class="clear"></div>
												</div>
												<div class="clear"></div>
											</div>
											<div class="comment">
												<img src="img/avatar.jpg" alt="img" />
												<div class="text">
													<div class="name">John Doe</div>
													<div class="date">12, September, 2013</div>
													Lorem ipsum dolor sit amet, consectetur
													adipiscing elit. Praesent condimentum sed elit
													vitae tristique. Aliquam erat volutpat. Nunc sit
													amet cursus libero. In fringilla egestas ornare.
												</div>
												<div class="clear"></div>
											</div>
											<div class="comment">
												<img src="img/avatar.jpg" alt="img" />
												<div class="text">
													<div class="name">John Doe</div>
													<div class="date">12, September, 2013</div>
													Lorem ipsum dolor sit amet, consectetur
													adipiscing elit. Praesent condimentum sed elit
													vitae tristique. Aliquam erat volutpat. Nunc sit
													amet cursus libero. In fringilla egestas ornare.
												</div>
												<div class="comment sub">
													<img src="img/avatar.jpg" alt="img" />
													<div class="text">
														<div class="name">John Doe</div>
														<div class="date">12, September, 2013</div>
														Lorem ipsum dolor sit amet, consectetur
														adipiscing elit. Praesent condimentum sed elit
														vitae tristique. Aliquam erat volutpat. Nunc sit
														amet cursus libero. In fringilla egestas ornare.
													</div>
													<div class="clear"></div>
												</div>
												<div class="clear"></div>
											</div>
										</div>
										<div class="comment_form">
											<div class="box_title title">
												<div class="icon"><i class="fa fa-comment-o"></i></div>
												<div class="text">Add a Comment</div>
												<div class="clear"></div>
											</div>
											<div class="form">
												<input type="text" name="name" class="name" value="" placeholder="Name *" />
												<input type="email" name="email" class="email" value="" placeholder="Email *" />
												<input type="text" name="website" class="website" value="" placeholder="Website" />
												<textarea name="comment_body" placeholder="Your Comment" class="comment_body"></textarea>
												<div class="btn post_comment_btn">Post Comment</div>
												<div class="clear"></div>
											</div>
										</div>
									</div>
								</div>
								<div class="btns">
									<a href="#" class="btn read_more_btn">Read More</a>
									<div class="social_btns">
										<a href="#" class="btn fa fa-twitter"></a>
										<a href="#" class="btn fa fa-facebook"></a>
									</div>
								</div>
							</div>
							<div class="clear"></div>
						</div>
						<!-- /Blog Post -->

						<!-- Blog Post -->
						<div class="post">
							<div class="post_data">
								<div class="box_title title">
									<div class="icon"><i class="fa fa-pencil"></i></div>
									<div class="text"><a href="#" class="read_more_btn">Lorem ipsum dolor sit amet</a></div>
									<div class="clear"></div>
								</div>
								<div class="info">
									<div class="meta user">
										<i class="fa fa-user"></i><span><a href="#">user</a></span>
									</div>
									<div class="meta date">
										<i class="fa fa-calendar"></i><span>2 hours ago</span>
									</div>
									<div class="meta tags">
										<i class="fa fa-tags"></i><span><a href="#">web</a>, <a href="#">design</a></span>
									</div>
									<div class="meta comments">
										<i class="fa fa-comments-o"></i><span>10</span>
									</div>
								</div>
								<div class="preview_body body">
									<p>
										Lorem ipsum dolor sit amet, consectetur
										adipiscing elit. Praesent condimentum sed elit
										vitae tristique. Aliquam erat volutpat. Nunc sit
										amet cursus libero. In fringilla egestas ornare.
									</p>
									<p>
										Lorem ipsum dolor sit amet, consectetur
										adipiscing elit. Praesent condimentum sed elit
										vitae tristique. Aliquam erat volutpat. Nunc sit
										amet cursus libero. In fringilla egestas ornare.
									</p>
									<p>
										Lorem ipsum dolor sit amet, consectetur
										adipiscing elit. Praesent condimentum sed elit
										vitae tristique. Aliquam erat volutpat. Nunc sit
										amet cursus libero. In fringilla egestas ornare.
									</p>
								</div>
								<div class="hidden_body body">
									<div class="body">
										<p>
											Lorem ipsum dolor sit amet, consectetur
											adipiscing elit. Praesent condimentum sed elit
											vitae tristique. Aliquam erat volutpat. Nunc sit
											amet cursus libero. In fringilla egestas ornare.
										</p>
										<p>
											Lorem ipsum dolor sit amet, consectetur
											adipiscing elit. Praesent condimentum sed elit
											vitae tristique. Aliquam erat volutpat. Nunc sit
											amet cursus libero. In fringilla egestas ornare.
										</p>
										<p>
											Lorem ipsum dolor sit amet, consectetur
											adipiscing elit. Praesent condimentum sed elit
											vitae tristique. Aliquam erat volutpat. Nunc sit
											amet cursus libero. In fringilla egestas ornare.
										</p>
										<p>
											Lorem ipsum dolor sit amet, consectetur
											adipiscing elit. Praesent condimentum sed elit
											vitae tristique. Aliquam erat volutpat. Nunc sit
											amet cursus libero. In fringilla egestas ornare.
										</p>
									</div>
									<div class="about_author">
										<div class="title">About Author</div>
										<img src="img/avatar.jpg" alt="img" />
										<div class="text">
											Lorem ipsum dolor sit amet, consectetur
											adipiscing elit. Praesent condimentum sed elit
											vitae tristique. Aliquam erat volutpat. Nunc sit
											amet cursus libero. In fringilla egestas ornare.
										</div>
										<div class="clear"></div>
									</div>
									<div class="post_comments">
										<div class="box_title title">
											<div class="icon"><i class="fa fa-comments-o"></i></div>
											<div class="text">5 Comments</div>
											<div class="clear"></div>
										</div>
										<div class="comments">
											<div class="comment">
												<img src="img/avatar.jpg" alt="img" />
												<div class="text">
													<div class="name">John Doe</div>
													<div class="date">12, September, 2013</div>
													Lorem ipsum dolor sit amet, consectetur
													adipiscing elit. Praesent condimentum sed elit
													vitae tristique. Aliquam erat volutpat. Nunc sit
													amet cursus libero. In fringilla egestas ornare.
												</div>
												<div class="comment sub">
													<img src="img/avatar.jpg" alt="img" />
													<div class="text">
														<div class="name">John Doe</div>
														<div class="date">12, September, 2013</div>
														Lorem ipsum dolor sit amet, consectetur
														adipiscing elit. Praesent condimentum sed elit
														vitae tristique. Aliquam erat volutpat. Nunc sit
														amet cursus libero. In fringilla egestas ornare.
													</div>
													<div class="clear"></div>
												</div>
												<div class="clear"></div>
											</div>
											<div class="comment">
												<img src="img/avatar.jpg" alt="img" />
												<div class="text">
													<div class="name">John Doe</div>
													<div class="date">12, September, 2013</div>
													Lorem ipsum dolor sit amet, consectetur
													adipiscing elit. Praesent condimentum sed elit
													vitae tristique. Aliquam erat volutpat. Nunc sit
													amet cursus libero. In fringilla egestas ornare.
												</div>
												<div class="clear"></div>
											</div>
											<div class="comment">
												<img src="img/avatar.jpg" alt="img" />
												<div class="text">
													<div class="name">John Doe</div>
													<div class="date">12, September, 2013</div>
													Lorem ipsum dolor sit amet, consectetur
													adipiscing elit. Praesent condimentum sed elit
													vitae tristique. Aliquam erat volutpat. Nunc sit
													amet cursus libero. In fringilla egestas ornare.
												</div>
												<div class="comment sub">
													<img src="img/avatar.jpg" alt="img" />
													<div class="text">
														<div class="name">John Doe</div>
														<div class="date">12, September, 2013</div>
														Lorem ipsum dolor sit amet, consectetur
														adipiscing elit. Praesent condimentum sed elit
														vitae tristique. Aliquam erat volutpat. Nunc sit
														amet cursus libero. In fringilla egestas ornare.
													</div>
													<div class="clear"></div>
												</div>
												<div class="clear"></div>
											</div>
										</div>
										<div class="comment_form">
											<div class="box_title title">
												<div class="icon"><i class="fa fa-comment-o"></i></div>
												<div class="text">Add a Comment</div>
												<div class="clear"></div>
											</div>
											<div class="form">
												<input type="text" name="name" class="name" value="" placeholder="Name *" />
												<input type="email" name="email" class="email" value="" placeholder="Email *" />
												<input type="text" name="website" class="website" value="" placeholder="Website" />
												<textarea name="comment_body" placeholder="Your Comment" class="comment_body"></textarea>
												<div class="btn post_comment_btn">Post Comment</div>
												<div class="clear"></div>
											</div>
										</div>
									</div>
								</div>
								<div class="btns">
									<a href="#" class="btn read_more_btn">Read More</a>
									<div class="social_btns">
										<a href="#" class="btn fa fa-twitter"></a>
										<a href="#" class="btn fa fa-facebook"></a>
									</div>
								</div>
							</div>
							<div class="clear"></div>
						</div>
						<!-- /Blog Post -->

						<!-- Blog Post -->
						<div class="post">
							<div class="media video">
                            	<iframe width="560" height="315" src="//" style="border:none;" allowfullscreen></iframe>
                            	<span class="video_url">http://player.vimeo.com/video/83436955?title=0&amp;byline=0&amp;portrait=0&amp;color=f52a2d</span>
							</div>
							<div class="post_data">
								<div class="box_title title">
									<div class="icon"><i class="fa fa-film"></i></div>
									<div class="text"><a href="#" class="read_more_btn">Lorem ipsum dolor sit amet</a></div>
									<div class="clear"></div>
								</div>
								<div class="info">
									<div class="meta user">
										<i class="fa fa-user"></i><span><a href="#">user</a></span>
									</div>
									<div class="meta date">
										<i class="fa fa-calendar"></i><span>2 hours ago</span>
									</div>
									<div class="meta tags">
										<i class="fa fa-tags"></i><span><a href="#">web</a>, <a href="#">design</a></span>
									</div>
									<div class="meta comments">
										<i class="fa fa-comments-o"></i><span>10</span>
									</div>
								</div>
								<div class="preview_body body">
									Lorem ipsum dolor sit amet, consectetur
									adipiscing elit. Praesent condimentum sed elit
									vitae tristique. Aliquam erat volutpat. Nunc sit
									amet cursus libero. In fringilla egestas ornare.
								</div>
								<div class="hidden_body body">
									<div class="body">
										<p>
											Lorem ipsum dolor sit amet, consectetur
											adipiscing elit. Praesent condimentum sed elit
											vitae tristique. Aliquam erat volutpat. Nunc sit
											amet cursus libero. In fringilla egestas ornare.
										</p>
										<p>
											Lorem ipsum dolor sit amet, consectetur
											adipiscing elit. Praesent condimentum sed elit
											vitae tristique. Aliquam erat volutpat. Nunc sit
											amet cursus libero. In fringilla egestas ornare.
										</p>
										<p>
											Lorem ipsum dolor sit amet, consectetur
											adipiscing elit. Praesent condimentum sed elit
											vitae tristique. Aliquam erat volutpat. Nunc sit
											amet cursus libero. In fringilla egestas ornare.
										</p>
										<p>
											Lorem ipsum dolor sit amet, consectetur
											adipiscing elit. Praesent condimentum sed elit
											vitae tristique. Aliquam erat volutpat. Nunc sit
											amet cursus libero. In fringilla egestas ornare.
										</p>
									</div>
									<div class="about_author">
										<div class="title">About Author</div>
										<img src="img/avatar.jpg" alt="img" />
										<div class="text">
											Lorem ipsum dolor sit amet, consectetur
											adipiscing elit. Praesent condimentum sed elit
											vitae tristique. Aliquam erat volutpat. Nunc sit
											amet cursus libero. In fringilla egestas ornare.
										</div>
										<div class="clear"></div>
									</div>
									<div class="post_comments">
										<div class="box_title title">
											<div class="icon"><i class="fa fa-comments-o"></i></div>
											<div class="text">5 Comments</div>
											<div class="clear"></div>
										</div>
										<div class="comments">
											<div class="comment">
												<img src="img/avatar.jpg" alt="img" />
												<div class="text">
													<div class="name">John Doe</div>
													<div class="date">12, September, 2013</div>
													Lorem ipsum dolor sit amet, consectetur
													adipiscing elit. Praesent condimentum sed elit
													vitae tristique. Aliquam erat volutpat. Nunc sit
													amet cursus libero. In fringilla egestas ornare.
												</div>
												<div class="comment sub">
													<img src="img/avatar.jpg" alt="img" />
													<div class="text">
														<div class="name">John Doe</div>
														<div class="date">12, September, 2013</div>
														Lorem ipsum dolor sit amet, consectetur
														adipiscing elit. Praesent condimentum sed elit
														vitae tristique. Aliquam erat volutpat. Nunc sit
														amet cursus libero. In fringilla egestas ornare.
													</div>
													<div class="clear"></div>
												</div>
												<div class="clear"></div>
											</div>
											<div class="comment">
												<img src="img/avatar.jpg" alt="img" />
												<div class="text">
													<div class="name">John Doe</div>
													<div class="date">12, September, 2013</div>
													Lorem ipsum dolor sit amet, consectetur
													adipiscing elit. Praesent condimentum sed elit
													vitae tristique. Aliquam erat volutpat. Nunc sit
													amet cursus libero. In fringilla egestas ornare.
												</div>
												<div class="clear"></div>
											</div>
											<div class="comment">
												<img src="img/avatar.jpg" alt="img" />
												<div class="text">
													<div class="name">John Doe</div>
													<div class="date">12, September, 2013</div>
													Lorem ipsum dolor sit amet, consectetur
													adipiscing elit. Praesent condimentum sed elit
													vitae tristique. Aliquam erat volutpat. Nunc sit
													amet cursus libero. In fringilla egestas ornare.
												</div>
												<div class="comment sub">
													<img src="img/avatar.jpg" alt="img" />
													<div class="text">
														<div class="name">John Doe</div>
														<div class="date">12, September, 2013</div>
														Lorem ipsum dolor sit amet, consectetur
														adipiscing elit. Praesent condimentum sed elit
														vitae tristique. Aliquam erat volutpat. Nunc sit
														amet cursus libero. In fringilla egestas ornare.
													</div>
													<div class="clear"></div>
												</div>
												<div class="clear"></div>
											</div>
										</div>
										<div class="comment_form">
											<div class="box_title title">
												<div class="icon"><i class="fa fa-comment-o"></i></div>
												<div class="text">Add a Comment</div>
												<div class="clear"></div>
											</div>
											<div class="form">
												<input type="text" name="name" class="name" value="" placeholder="Name *" />
												<input type="email" name="email" class="email" value="" placeholder="Email *" />
												<input type="text" name="website" class="website" value="" placeholder="Website" />
												<textarea name="comment_body" placeholder="Your Comment" class="comment_body"></textarea>
												<div class="btn post_comment_btn">Post Comment</div>
												<div class="clear"></div>
											</div>
										</div>
									</div>
								</div>
								<div class="btns">
									<a href="#" class="btn read_more_btn">Read More</a>
									<div class="social_btns">
										<a href="#" class="btn fa fa-twitter"></a>
										<a href="#" class="btn fa fa-facebook"></a>
									</div>
								</div>
							</div>
							<div class="clear"></div>
						</div>
						<!-- /Blog Post -->

						<!-- Blog Post -->
						<div class="post">
							<div class="media">
								<img src="img/blog_img5.jpg" alt="img" />
							</div>
							<div class="post_data">
								<div class="box_title title">
									<div class="icon"><i class="fa fa-picture-o"></i></div>
									<div class="text"><a href="#" class="read_more_btn">Lorem ipsum dolor sit amet</a></div>
									<div class="clear"></div>
								</div>
								<div class="info">
									<div class="meta user">
										<i class="fa fa-user"></i><span><a href="#">user</a></span>
									</div>
									<div class="meta date">
										<i class="fa fa-calendar"></i><span>2 hours ago</span>
									</div>
									<div class="meta tags">
										<i class="fa fa-tags"></i><span><a href="#">web</a>, <a href="#">design</a></span>
									</div>
									<div class="meta comments">
										<i class="fa fa-comments-o"></i><span>10</span>
									</div>
								</div>
								<div class="preview_body body">
									Lorem ipsum dolor sit amet, consectetur
									adipiscing elit. Praesent condimentum sed elit
									vitae tristique. Aliquam erat volutpat. Nunc sit
									amet cursus libero. In fringilla egestas ornare.
								</div>
								<div class="hidden_body body">
									<div class="body">
										<p>
											Lorem ipsum dolor sit amet, consectetur
											adipiscing elit. Praesent condimentum sed elit
											vitae tristique. Aliquam erat volutpat. Nunc sit
											amet cursus libero. In fringilla egestas ornare.
										</p>
										<p>
											Lorem ipsum dolor sit amet, consectetur
											adipiscing elit. Praesent condimentum sed elit
											vitae tristique. Aliquam erat volutpat. Nunc sit
											amet cursus libero. In fringilla egestas ornare.
										</p>
										<p>
											Lorem ipsum dolor sit amet, consectetur
											adipiscing elit. Praesent condimentum sed elit
											vitae tristique. Aliquam erat volutpat. Nunc sit
											amet cursus libero. In fringilla egestas ornare.
										</p>
										<p>
											Lorem ipsum dolor sit amet, consectetur
											adipiscing elit. Praesent condimentum sed elit
											vitae tristique. Aliquam erat volutpat. Nunc sit
											amet cursus libero. In fringilla egestas ornare.
										</p>
									</div>
									<div class="about_author">
										<div class="title">About Author</div>
										<img src="img/avatar.jpg" alt="img" />
										<div class="text">
											Lorem ipsum dolor sit amet, consectetur
											adipiscing elit. Praesent condimentum sed elit
											vitae tristique. Aliquam erat volutpat. Nunc sit
											amet cursus libero. In fringilla egestas ornare.
										</div>
										<div class="clear"></div>
									</div>
									<div class="post_comments">
										<div class="box_title title">
											<div class="icon"><i class="fa fa-comments-o"></i></div>
											<div class="text">5 Comments</div>
											<div class="clear"></div>
										</div>
										<div class="comments">
											<div class="comment">
												<img src="img/avatar.jpg" alt="img" />
												<div class="text">
													<div class="name">John Doe</div>
													<div class="date">12, September, 2013</div>
													Lorem ipsum dolor sit amet, consectetur
													adipiscing elit. Praesent condimentum sed elit
													vitae tristique. Aliquam erat volutpat. Nunc sit
													amet cursus libero. In fringilla egestas ornare.
												</div>
												<div class="comment sub">
													<img src="img/avatar.jpg" alt="img" />
													<div class="text">
														<div class="name">John Doe</div>
														<div class="date">12, September, 2013</div>
														Lorem ipsum dolor sit amet, consectetur
														adipiscing elit. Praesent condimentum sed elit
														vitae tristique. Aliquam erat volutpat. Nunc sit
														amet cursus libero. In fringilla egestas ornare.
													</div>
													<div class="clear"></div>
												</div>
												<div class="clear"></div>
											</div>
											<div class="comment">
												<img src="img/avatar.jpg" alt="img" />
												<div class="text">
													<div class="name">John Doe</div>
													<div class="date">12, September, 2013</div>
													Lorem ipsum dolor sit amet, consectetur
													adipiscing elit. Praesent condimentum sed elit
													vitae tristique. Aliquam erat volutpat. Nunc sit
													amet cursus libero. In fringilla egestas ornare.
												</div>
												<div class="clear"></div>
											</div>
											<div class="comment">
												<img src="img/avatar.jpg" alt="img" />
												<div class="text">
													<div class="name">John Doe</div>
													<div class="date">12, September, 2013</div>
													Lorem ipsum dolor sit amet, consectetur
													adipiscing elit. Praesent condimentum sed elit
													vitae tristique. Aliquam erat volutpat. Nunc sit
													amet cursus libero. In fringilla egestas ornare.
												</div>
												<div class="comment sub">
													<img src="img/avatar.jpg" alt="img" />
													<div class="text">
														<div class="name">John Doe</div>
														<div class="date">12, September, 2013</div>
														Lorem ipsum dolor sit amet, consectetur
														adipiscing elit. Praesent condimentum sed elit
														vitae tristique. Aliquam erat volutpat. Nunc sit
														amet cursus libero. In fringilla egestas ornare.
													</div>
													<div class="clear"></div>
												</div>
												<div class="clear"></div>
											</div>
										</div>
										<div class="comment_form">
											<div class="box_title title">
												<div class="icon"><i class="fa fa-comment-o"></i></div>
												<div class="text">Add a Comment</div>
												<div class="clear"></div>
											</div>
											<div class="form">
												<input type="text" name="name" class="name" value="" placeholder="Name *" />
												<input type="email" name="email" class="email" value="" placeholder="Email *" />
												<input type="text" name="website" class="website" value="" placeholder="Website" />
												<textarea name="comment_body" placeholder="Your Comment" class="comment_body"></textarea>
												<div class="btn post_comment_btn">Post Comment</div>
												<div class="clear"></div>
											</div>
										</div>
									</div>
								</div>
								<div class="btns">
									<a href="#" class="btn read_more_btn">Read More</a>
									<div class="social_btns">
										<a href="#" class="btn fa fa-twitter"></a>
										<a href="#" class="btn fa fa-facebook"></a>
									</div>
								</div>
							</div>
							<div class="clear"></div>
						</div>
						<!-- /Blog Post -->

						<!-- Blog Post -->
						<div class="post">
							<div class="post_data">
								<div class="box_title title">
									<div class="icon"><i class="fa fa-quote-left"></i></div>
									<div class="text"><a href="#" class="read_more_btn">Lorem ipsum dolor sit amet</a></div>
									<div class="clear"></div>
								</div>
								<div class="info">
									<div class="meta user">
										<i class="fa fa-user"></i><span><a href="#">user</a></span>
									</div>
									<div class="meta date">
										<i class="fa fa-calendar"></i><span>2 hours ago</span>
									</div>
									<div class="meta tags">
										<i class="fa fa-tags"></i><span><a href="#">web</a>, <a href="#">design</a></span>
									</div>
									<div class="meta comments">
										<i class="fa fa-comments-o"></i><span>10</span>
									</div>
								</div>
								<div class="preview_body body">
									<i class="fa fa-quote-left"></i>
									Lorem ipsum dolor sit amet, consectetur
									adipiscing elit. Praesent condimentum sed elit
									vitae tristique. Aliquam erat volutpat. Nunc sit
									amet cursus libero. In fringilla egestas ornare.
									<i class="fa fa-quote-right"></i>
								</div>
								<div class="hidden_body body">
									<div class="body">
										<p>
											<i class="fa fa-quote-left"></i>
											Lorem ipsum dolor sit amet, consectetur
											adipiscing elit. Praesent condimentum sed elit
											vitae tristique. Aliquam erat volutpat. Nunc sit
											amet cursus libero. In fringilla egestas ornare.
											<i class="fa fa-quote-right"></i>
										</p>
										<p>
											Lorem ipsum dolor sit amet, consectetur
											adipiscing elit. Praesent condimentum sed elit
											vitae tristique. Aliquam erat volutpat. Nunc sit
											amet cursus libero. In fringilla egestas ornare.
										</p>
										<p>
											Lorem ipsum dolor sit amet, consectetur
											adipiscing elit. Praesent condimentum sed elit
											vitae tristique. Aliquam erat volutpat. Nunc sit
											amet cursus libero. In fringilla egestas ornare.
										</p>
										<p>
											Lorem ipsum dolor sit amet, consectetur
											adipiscing elit. Praesent condimentum sed elit
											vitae tristique. Aliquam erat volutpat. Nunc sit
											amet cursus libero. In fringilla egestas ornare.
										</p>
									</div>
									<div class="about_author">
										<div class="title">About Author</div>
										<img src="img/avatar.jpg" alt="img" />
										<div class="text">
											Lorem ipsum dolor sit amet, consectetur
											adipiscing elit. Praesent condimentum sed elit
											vitae tristique. Aliquam erat volutpat. Nunc sit
											amet cursus libero. In fringilla egestas ornare.
										</div>
										<div class="clear"></div>
									</div>
									<div class="post_comments">
										<div class="box_title title">
											<div class="icon"><i class="fa fa-comments-o"></i></div>
											<div class="text">5 Comments</div>
											<div class="clear"></div>
										</div>
										<div class="comments">
											<div class="comment">
												<img src="img/avatar.jpg" alt="img" />
												<div class="text">
													<div class="name">John Doe</div>
													<div class="date">12, September, 2013</div>
													Lorem ipsum dolor sit amet, consectetur
													adipiscing elit. Praesent condimentum sed elit
													vitae tristique. Aliquam erat volutpat. Nunc sit
													amet cursus libero. In fringilla egestas ornare.
												</div>
												<div class="comment sub">
													<img src="img/avatar.jpg" alt="img" />
													<div class="text">
														<div class="name">John Doe</div>
														<div class="date">12, September, 2013</div>
														Lorem ipsum dolor sit amet, consectetur
														adipiscing elit. Praesent condimentum sed elit
														vitae tristique. Aliquam erat volutpat. Nunc sit
														amet cursus libero. In fringilla egestas ornare.
													</div>
													<div class="clear"></div>
												</div>
												<div class="clear"></div>
											</div>
											<div class="comment">
												<img src="img/avatar.jpg" alt="img" />
												<div class="text">
													<div class="name">John Doe</div>
													<div class="date">12, September, 2013</div>
													Lorem ipsum dolor sit amet, consectetur
													adipiscing elit. Praesent condimentum sed elit
													vitae tristique. Aliquam erat volutpat. Nunc sit
													amet cursus libero. In fringilla egestas ornare.
												</div>
												<div class="clear"></div>
											</div>
											<div class="comment">
												<img src="img/avatar.jpg" alt="img" />
												<div class="text">
													<div class="name">John Doe</div>
													<div class="date">12, September, 2013</div>
													Lorem ipsum dolor sit amet, consectetur
													adipiscing elit. Praesent condimentum sed elit
													vitae tristique. Aliquam erat volutpat. Nunc sit
													amet cursus libero. In fringilla egestas ornare.
												</div>
												<div class="comment sub">
													<img src="img/avatar.jpg" alt="img" />
													<div class="text">
														<div class="name">John Doe</div>
														<div class="date">12, September, 2013</div>
														Lorem ipsum dolor sit amet, consectetur
														adipiscing elit. Praesent condimentum sed elit
														vitae tristique. Aliquam erat volutpat. Nunc sit
														amet cursus libero. In fringilla egestas ornare.
													</div>
													<div class="clear"></div>
												</div>
												<div class="clear"></div>
											</div>
										</div>
										<div class="comment_form">
											<div class="box_title title">
												<div class="icon"><i class="fa fa-comment-o"></i></div>
												<div class="text">Add a Comment</div>
												<div class="clear"></div>
											</div>
											<div class="form">
												<input type="text" name="name" class="name" value="" placeholder="Name *" />
												<input type="email" name="email" class="email" value="" placeholder="Email *" />
												<input type="text" name="website" class="website" value="" placeholder="Website" />
												<textarea name="comment_body" placeholder="Your Comment" class="comment_body"></textarea>
												<div class="btn post_comment_btn">Post Comment</div>
												<div class="clear"></div>
											</div>
										</div>
									</div>
								</div>
								<div class="btns">
									<a href="#" class="btn read_more_btn">Read More</a>
									<div class="social_btns">
										<a href="#" class="btn fa fa-twitter"></a>
										<a href="#" class="btn fa fa-facebook"></a>
									</div>
								</div>
							</div>
							<div class="clear"></div>
						</div>
						<!-- /Blog Post -->

						<div class="load_more_posts btn">Load More</div>
					</div>
					<!-- Blog Posts -->

					<!-- Sidebar -->
					<div class="sidebar">

						<!-- Search Bar -->
						<div class="search_bar">
							<input type="text" name="query" value="" placeholder="Search" class="search_input" />
							<i class="fa fa-search"></i>
						</div>
						<!-- /Search Bar -->

						<!-- Categories -->
						<div class="categories">
							<div class="title color">Categories</div>
							<div class="categories">
								<div class="item">
									<i class="fa fa-circle"></i>
									<span class="text"><a href="#">Web Design</a></span>
								</div>
								<div class="item">
									<i class="fa fa-circle"></i>
									<span class="text"><a href="#">Web Development</a></span>
								</div>
								<div class="item">
									<i class="fa fa-circle"></i>
									<span class="text"><a href="#">Graphic Design</a></span>
								</div>
								<div class="item">
									<i class="fa fa-circle"></i>
									<span class="text"><a href="#">UI Design</a></span>
								</div>
								<div class="item">
									<i class="fa fa-circle"></i>
									<span class="text"><a href="#">Logo Design</a></span>
								</div>
								<div class="clear"></div>
							</div>
						</div>
						<!-- /Categories -->

						<!-- Tabs -->
						<div class="tabs">
							<div class="title color">Tabs</div>
							<div class="tabs">
								<div class="tabs_menu">
									<a href="#popular">Popular</a>
									<a href="#recent">Recent</a>
									<a href="#comments"  class="active">Comments</a>
									<div class="clear"></div>
								</div>
								<div class="tabs_body">
									<div id="popular" class="items active">
										<div class="item">
											<img src="img/blog_img1.jpg" alt="img" />
											<span class="body">
												<a href="#">Lorem ipsum dolor sit</a>
												Lorem ipsum dolor sit amet, consectetur...
											</span>
										</div>
										<div class="item">
											<img src="img/blog_img2.jpg" alt="img" />
											<span class="body">
												<a href="#">Lorem ipsum dolor sit</a>
												Lorem ipsum dolor sit amet, consectetur...
											</span>
										</div>
										<div class="item">
											<img src="img/blog_img5.jpg" alt="img" />
											<span class="body">
												<a href="#">Lorem ipsum dolor sit</a>
												Lorem ipsum dolor sit amet, consectetur...
											</span>
										</div>
										<div class="clear"></div>
									</div>
									<div id="recent" class="items">
										<div class="item">
											<img src="img/blog_img2.jpg" alt="img" />
											<span class="body">
												<a href="#">Lorem ipsum dolor sit</a>
												Lorem ipsum dolor sit amet, consectetur...
											</span>
										</div>
										<div class="item">
											<img src="img/blog_img1.jpg" alt="img" />
											<span class="body">
												<a href="#">Lorem ipsum dolor sit</a>
												Lorem ipsum dolor sit amet, consectetur...
											</span>
										</div>
										<div class="item">
											<img src="img/blog_img5.jpg" alt="img" />
											<span class="body">
												<a href="#">Lorem ipsum dolor sit</a>
												Lorem ipsum dolor sit amet, consectetur...
											</span>
										</div>
										<div class="clear"></div>
									</div>
									<div id="comments" class="items">
										<div class="item">
											<img src="img/blog_img5.jpg" alt="img" />
											<span class="body">
												<a href="#">Lorem ipsum dolor sit</a>
												Lorem ipsum dolor sit amet, consectetur...
											</span>
										</div>
										<div class="item">
											<img src="img/blog_img2.jpg" alt="img" />
											<span class="body">
												<a href="#">Lorem ipsum dolor sit</a>
												Lorem ipsum dolor sit amet, consectetur...
											</span>
										</div>
										<div class="item">
											<img src="img/blog_img1.jpg" alt="img" />
											<span class="body">
												<a href="#">Lorem ipsum dolor sit</a>
												Lorem ipsum dolor sit amet, consectetur...
											</span>
										</div>
										<div class="clear"></div>
									</div>
									<div class="clear"></div>
								</div>
							</div>
						</div>
						<!-- /Tabs -->

						<!-- Archive -->
						<div class="archive">
							<div class="title color">Archive</div>
							<div class="categories">
								<div class="item">
									<i class="fa fa-circle"></i>
									<span class="text"><a href="#">Web Design</a></span>
								</div>
								<div class="item">
									<i class="fa fa-circle"></i>
									<span class="text"><a href="#">Web Development</a></span>
								</div>
								<div class="item">
									<i class="fa fa-circle"></i>
									<span class="text"><a href="#">Graphic Design</a></span>
								</div>
								<div class="item">
									<i class="fa fa-circle"></i>
									<span class="text"><a href="#">UI Design</a></span>
								</div>
								<div class="item">
									<i class="fa fa-circle"></i>
									<span class="text"><a href="#">Logo Design</a></span>
								</div>
								<div class="clear"></div>
							</div>
						</div>
						<!-- /Archive -->

						<!-- About -->
						<div class="about">
							<div class="title color">About</div>
							<div class="text">
								Lorem ipsum dolor sit amet, consectetur
								adipiscing elit. Praesent condimentum sed elit
								vitae tristique. Aliquam erat volutpat. Nunc sit
								amet cursus libero. In fringilla egestas ornare.
							</div>
						</div>
						<!-- /About -->

						<!-- Tags -->
						<div class="tags">
							<div class="title color">Tags</div>
							<a href="#" class="btn">web</a>
							<a href="#" class="btn">design</a>
							<a href="#" class="btn">iOS</a>
							<a href="#" class="btn">HTML</a>
							<a href="#" class="btn">CSS</a>
							<a href="#" class="btn">jQuery</a>
							<a href="#" class="btn">Wordpress</a>
							<div class="clear"></div>
						</div>
						<!-- /Tags -->

						<!-- Tweets -->
						<div class="blog_tweets tweets">
							<div class="title color">Tweets</div>
							<div class="tweets"></div>
						</div>
						<!-- /Tweets -->
					</div>
					<!-- /Sidebar -->
					<div class="clear"></div>
					
				</div>
				<!-- /Blog Page -->

				<!-- Contact Page -->
				<div id="contact">
					<h1 class="title color">Contact</h1>

					<!-- Description -->
					<p>
						Lorem ipsum dolor sit amet, consectetur
						adipiscing elit. Praesent condimentum sed elit
						vitae tristique. Aliquam erat volutpat. Nunc sit
						amet cursus libero. In fringilla egestas ornare.
					</p>
					<!-- /Description -->

					<!-- Google Map -->
					<div id="gmap"></div>
					<!-- /Google Map -->

					<!-- Info -->
					<div class="info">
						<div class="user">
							<i class="fa fa-user"></i>
							<span>John Doe</span>
						</div>
						<div class="user">
							<i class="fa fa-map-marker"></i>
							<span>New York City</span>
						</div>
						<div class="user">
							<i class="fa fa-envelope"></i>
							<span>john@site.com</span>
						</div>
						<div class="clear"></div>
					</div>
					<!-- /Info -->

					<!-- Contact Form -->
					<div class="contact_form_outer">
						<h1 class="title color">Email Me</h1>
						<p>
							Lorem ipsum dolor sit amet, consectetur
							adipiscing elit. Praesent condimentum sed elit
							vitae tristique.
						</p>
						<div class="contact_form">
							<input type="text" value="" placeholder="Your Name" class="name" />
							<input type="email" value="" placeholder="Your Email" class="email" />
							<textarea class="message" placeholder="Your Message"></textarea>
							<input type="button" value="Send Message" class="btn send_message_btn" name="submit" />
							<span class="message"></span>
						</div>
					</div>
					<!-- /Contact Form -->

				

				</div>
				<!-- /Contact Page -->

			</div>
			<div class="clear"></div>
		</div>
		<!-- /Main Content -->
		
		

		<div class="clear"></div>

	</div>
	<!-- /Wrapper -->

	<!-- Footer -->
	<div class="footer">
		2014 &copy; John Doe. VR Responsive vCard Template by <a href="http://www.codecanyon.net/user/Maxdp?ref=Maxdp">Maxdp</a>
	</div>
	<!-- /Footer -->

	<!-- Loading Overlay -->
	<div class="loading_overlay">
		<div><img class="loading" src="img/loading.gif" alt="img" /></div>
	</div>
	<!-- /Loading Overlay -->

    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/mixitup.min.js"></script>
    <script type="text/javascript" src="js/jquery.cycle2.min.js"></script>
    <script type="text/javascript" src="js/modernizr.custom.js"></script>
    <script type="text/javascript" src="js/jquery.hoverdir.js"></script>
    <script type="text/javascript" src="js/jquery.mousewheel.js"></script>
    <script type="text/javascript" src="js/jquery.jscrollpane.min.js"></script>
    <script type="text/javascript" src="js/jquery.magnific_popup.js"></script>
    <script type="text/javascript" src="js/tweetie.min.js"></script>
    <script src="http://maps.google.com/maps/api/js?sensor=false&amp;libraries=geometry&amp;v=3.7"></script>
    <script type="text/javascript" src="js/maplace.js"></script>
    <script type="text/javascript" src="js/scripts.js"></script>
    <script type="text/javascript" src="js/jquery.ba-hashchange.js"></script>

    <!--[if lt IE 9]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
</body>
</html>