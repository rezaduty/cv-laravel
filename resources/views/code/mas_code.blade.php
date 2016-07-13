<!DOCTYPE html>
<html>
<head>
	<title>VR - Responsive vCard Template</title>
    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>

    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css" >
<link href="{{ asset('css/page_animations.css') }}" rel="stylesheet" type="text/css" >
<link href="{{ asset('css/normalize.css') }}" rel="stylesheet" type="text/css" >
<link href="{{ asset('css/animate.min.css') }}" rel="stylesheet" type="text/css" >


  <link href='http://www.fontonline.ir/css/IranNastaliq.css' rel='stylesheet' type='text/css'>
  <link href='http://www.fontonline.ir/css/BNazanin.css' rel='stylesheet' type='text/css'>



    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

    <script type="text/javascript">
    function contact_save()
    {
    	$('.send-btn').click(function(){
             
             $(document).ajaxStart(function() {
                $('.loading').show(); // show the gif image when ajax starts
            }).ajaxStop(function() {
                $('.loading').hide(); // hide the gif image when ajax completes
            });  
            $.ajax({
              url: '/contact/create',
              type: "POST",
              data: $('form#expenseForm').serialize(),
              success: function(data){
                $('.success').show();
                $('.success').html('موفقیت');
              },
              error: function(data){
               $('.success').html('خطا'); 
               $('.success').show();
              }
            });
          });
    }
    function c_save()
    {
    	
             
            alert($('#exForm').serialize());
            $.ajax({
              url: '/comment/create',
              type: "POST",
              data: $('#exForm').serialize(),
              success: function(data){
                $('.csuccess').show();
                alert(data);
                $('.csuccess').html('موفقیت');
              },
              error: function(data){
               $('.csuccess').html('خطا'); 
               $('.csuccess').show();
              }
            });
          
    }
    </script>

    <style type="text/css">
    	h1 {
		    font-family:IranNastaliq,'IranNastaliq',tahoma !important;
		    font-size: 36px;
		    font-weight: bold;
		    text-align: center;
		}
		div{
			font-family: BNazanin,'BNazanin',tahoma !important;
			font-size: 12px;
			font-weight: bold;
			text-align: center;
		}
		.content > div{
			background-color:rgb(1, 7, 19) !important;
		}
		.content > div#contact p{
			color: aliceblue !important;
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
.about_left{
	margin-right: 66%
}
    </style>
</head>

<body class="theme_1" style="background-color: rgb(67, 67, 67);
    background-image:linear-gradient(rgb(17, 28, 49), rgb(7, 39, 38));">



<div class="mask-galaxy">
	<br />
	<h1>بسم الله رحمان رحیم</h1>
</div>

</div>
<!-- Wrapper -->
	<div id="wrapper">
		
<div class="side_menu">

	@yield('right_menu')	
</div>

	

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
							
							</div>
							<div class="description">

								<!-- Description Rotator -->
								<div class="rotate">
									<p>برنامه نویس و طراح انواع برنامه های تحت وب و موبایل و دسکتاپ و طراحی گرافیکی,,طراحی انواع شبکه و امنیت ان طراحی انواه مدارات الکترونیکی,,



										
									</p>
									
								</div>
								<!-- /Description Rotator -->

							</div>
						</div>
					    
					</div>
					<!-- /Slider -->

					<div class="resume_btn goto_resume_btn"><i class="fa fa-list"></i>مشاهده رزومه</div>
					<a href="#" class="cv_download_btn"><i class="fa fa-download"></i>Download my CV</a>
				</div>
				<!-- /Home Page -->

				<!-- About Page -->
				<div id="about">
					<h1 class="title color">درباره ما</h1>

					<!-- Left Side -->
					<div class="left_side">

						<!-- Who i am -->
						<div class="box who_i_am right_to_box1">
							<div class="title">
								<div class="icon"><i class="fa fa-user"></i></div>
								<div class="text">WHO I AM</div>
								<div class="clear"></div>
							</div>

							
							@yield('about')
							
					</div>
					<!-- /Left Side -->

					<!-- Right Side -->
					<div class="right_side">



						<!-- Testimonials -->
						<div class="box testimonials right_to_box2">
							<div class="title">
								<div class="icon"><i class="fa fa-users"></i></div>
								<div class="text">مدارک</div>
								<div class="clear"></div>
							</div>
							<div class="testimonials_btns">
								<div class="fa fa-caret-left left_btn"></div>
								<div class="fa fa-caret-right right_btn"></div>
								<div class="clear"></div>
							</div>
							<div class="testimonials cycle-slideshow" data-cycle-slides="div.testimonial">
								
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
								@foreach($about as $sonal)
								@endforeach
								<div class="testimonial">
									<div class="text">
										{!! $sonal->testimonials !!}
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
						
						<!--<div class="awards">
							<div class="award">
								<div class="date">2014</div>
								<div class="body">
									<div class="award_title">1rst Award &bull; Name of Institute</div>
									Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent condimentum sed elit vitae tristique. Aliquam erat volutpat. Nunc sit amet cursus libero. In fringilla egestas ornare. Vivamus enim tortor, ultricies nec lectus eget, interdum elementum elit. Ut laoreet neque sit amet velit auctor tempus. In ac lectus felis.
								</div>
								<div class="clear"></div>
							</div>
						</div>
					-->
					</div>
					<!-- /Awards -->

					<div class="clear"></div>
				</div>
				<!-- /About Page -->

				<!-- Resume Page -->
				<div id="resume">
					<h1 class="title color">رزومه</h1>

					<!-- Left Side -->
					<div class="left_side">

						<!-- Education -->
						<div class="education lists">
							<div class="box_title title">
								<div class="icon"><i class="fa fa-clock-o"></i></div>
								<div class="text">نمونه کار ها</div>
								<div class="clear"></div>
							</div>
							<div class="items">
								@yield('education')
							</div>
						</div>
						<!-- /Education -->

						<!-- Employment -->
						<div class="employment lists">
							<div class="box_title title">
								<div class="icon"><i class="fa fa-bolt"></i></div>
								<div class="text">تجربه</div>
								<div class="clear"></div>
							</div>
							<div class="items">
								
								
								@yield('employment')
							</div>
						</div>
						<!-- /Employment -->

					</div>
					<!-- /Left Side -->

					<!-- Right Side -->
					<div class="right_side">

						

						<!-- Download CV -->
						<div class="resume_download lists">
							<div class="box_title title">
								<div class="icon"><i class="fa fa-file-text"></i></div>
								<div class="text">رزومه</div>
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
					<h1 class="title color">بلاگ</h1>

					<!-- Blog Posts -->
					<div class="blog_posts">
						<div class="back_to_blog btn">بازگشت</div>

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
							@if($blog)
						@foreach ($blog as $b)
							<br />
    						 <div class="post_data">
								<div class="box_title title">
									<div class="icon"><font size="1">{{ $b->categorizes }}</font></div>
									<div class="text"><a href="#" class="read_more_btn"> 
										{{ $b->title }}   
									</a></div>
									<div class="clear"></div>
								</div><!--
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
								</div>-->
								<div class="preview_body body">
									{{ $b->smallcontent }}
								</div>
								<div class="hidden_body body">
									<div class="body">
										<p>
											{!! $b->content !!}
										</p>
								

										
									</div>

									<div class="about_author">
										<div class="title">درباه نویسنده</div>
										<img src="image/profile.jpg" alt="profile picture | عکس صفحه" />
										<div class="text">
											{{$sonal->name}} هستم 
										</div>
										<div class="clear"></div>
									</div>
									<div class="post_comments">
										
										<div class="comments">
											
												
												<div class="comment">
													
													<div class="text">
														
													</div>
												
												<!--<div class="comment sub">
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
												</div>-->
												<div class="clear"></div>
											</div>
										</div>
										<div class="comment_form">

											<div class="box_title title">
												@if($errors->any())
											@foreach($errors->all() as $err)
												<p>{{$err}}<p>
											@endforeach
											@endif
												<div class="icon"><i class="fa fa-comment-o"></i></div>
												<div class="text">نظر شما درباره این مطلب</div>
												<p class='csuccess' style="display:none;"></p>
												<div class="clear"></div>
											</div>
											<div class="form">
												{!! Form::open( array( 'url' => 'comment/create/','id'=>'exForm' ) ) !!}
												{!! Form::text('name',null,['name'=>'name','class'=>'name','placeholder'=>'نام']) !!}
												{!! Form::text('email',null,['name'=>'email','class'=>'email','placeholder'=>'ایمیل']) !!}
												{!! Form::hidden('type',$b->id,['name'=>'type','class'=>'email']) !!}
												{!! Form::textarea('message',null,['name'=>'message','class'=>'message','placeholder'=>'پیام']) !!}
												{!! Form::submit('ثبت',['name'=>'submit','class'=>'btn send_message_btn send-btn']) !!}
												
												{!! Form::close() !!}

											</div>
										</div>
									</div>
								</div>
								<div class="btns">
									<a href="#" class="btn read_more_btn">ادامه مطلب</a>
									<div class="social_btns">
										<p>{{$b->date}}<p>
									</div>
								</div>
							</div>
							<div class="clear"></div>

						@endforeach
						@endif
						</div>
						<!-- /Blog Post -->

						
						<?php echo $blog->render();?>
						


					</div>
					<!-- Blog Posts -->

					<!-- Sidebar -->
					<div class="sidebar">

						<!-- Search Bar
						<div class="search_bar">
							<input type="text" name="query" value="" placeholder="Search" class="search_input" />
							<i class="fa fa-search"></i>
						</div>-->
						<!-- /Search Bar -->

						<!-- Categories -->
						<div class="categories">
							<div class="title color">دسته بندی ها</div>
							<div class="categories">

								@foreach($cat as $ca)
								<div class="item">
									<i class="fa fa-circle"></i>
									<span class="text"><a href="/{{$ca->name}}">{{$ca->name}}</a></span>
								</div>
								@endforeach
								<div class="clear"></div>
							</div>
						</div>
						<!-- /Categories -->

						<!-- Tabs -->
						<div class="tabs">
							<div class="title color">موضوع ها</div>
							<div class="tabs">
								<div class="tabs_menu">
									<a href="#popular">بهترین مطالب</a>
									<a href="#recent">اخرین مطالب</a>
									<a href="#comments"  class="active">اخرین نظرات</a>
									<div class="clear"></div>
								</div>
								<div class="tabs_body">
									<div id="popular" class="items active">
										@foreach($blog as $l)
										<div class="item">
											<span class="body">
												
											</span>
										</div>
										@endforeach
										<div class="clear"></div>
									</div>
									<div id="recent" class="items">
										@foreach($blog as $l)
										@endforeach
										<div class="item">
											<span class="body">
												{{$l->title}}
											</span>
										</div>
										
										<div class="clear"></div>
									</div>
									<div id="comments" class="items">
										@foreach($com as $co)
										<div class="item">
											<span class="body">
												{{$co->commn}}
											</span>
										</div>
										@endforeach
										<div class="clear"></div>
									</div>
									<div class="clear"></div>
								</div>
							</div>
						</div>
						<!-- /Tabs -->

						<!-- Archive -->
						<div class="archive">
							<div class="title color">تبلیغات</div>
							<div class="categories">
								<div class="item">
									<i class="fa fa-circle"></i>
									<span class="text"><a href="http://www.mahak-charity.org/main/index.php/fa" alt="mahak-charity | موسسه خیریه کودکان مبطلا به سرطان محک" /><img src="image/mahak.gif" /></span>
								</div>
								
								<div class="clear"></div>
							</div>
						</div>
						<!-- /Archive -->

						<!-- About -->
						<div class="about">
							<div class="title color">درباره ما</div>
							<div class="text">
								خوش امدید;
								در این بخش سعی می کنم مطالب خوب و بدرد بخوری که
								کاربرد دارد را با شما به اشتراگ بگذارم امیدوارم
								ذره ای به شما کمک کنم.
							</div>
						</div>
						<!-- /About -->

						<!-- Tags -->
						<div class="tags" style="display:none;">
							<div class="title color">تگ ها</div>
							<a href="#" class="btn">web</a>
							
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

				@yield('contact')

			</div>
			<div class="clear"></div>
		</div>
		<!-- /Main Content -->

		<div class="clear"></div>

	</div>
	<!-- /Wrapper -->

	<!-- Footer -->
	@yield('footer')

	<!-- Loading Overlay -->
	<div class="loading_overlay">
		<div><img class="loading" src="{{ asset('img/loading.gif') }}" alt="img" /></div>
	</div>
	<!-- /Loading Overlay -->



<script type="text/javascript" src="{{ asset('js/jquery.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/mixitup.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/jquery.cycle2.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/modernizr.custom.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/jquery.hoverdir.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/jquery.mousewheel.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/jquery.jscrollpane.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/jquery.magnific_popup.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/tweetie.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/http://maps.google.com/maps/api/js?sensor=false&amp;libraries=geometry&amp;v=3.7') }}"></script>
<script type="text/javascript" src="{{ asset('js/maplace.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/scripts.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/jquery.ba-hashchange.js') }}"></script>








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
