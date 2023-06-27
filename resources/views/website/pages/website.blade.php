<!-- =================================================
Theme Name: Topper Bootstrap Theme
Author: WebThemez.com
License: https://webthemez.com/license
======================================================= -->

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Mirrors Beauty Parlour Website</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">
  <meta content="Author" name="WebThemez">
  <!-- Favicons -->
  <link href="{{ asset('website/img/favicon.png') }}" rel="icon">
  <link href="{{ asset('website/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800|Montserrat:300,400,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="{{ asset('website/lib/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="{{ asset('website/lib/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
  <link href="{{ asset('website/lib/animate/animate.min.css') }}" rel="stylesheet">
  <link href="{{ asset('website/lib/ionicons/css/ionicons.min.css') }}" rel="stylesheet">
  <link href="{{ asset('website/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
  <link href="{{ asset('website/lib/magnific-popup/magnific-popup.css') }}" rel="stylesheet">
  <link href="{{ asset('website/lib/ionicons/css/ionicons.min.css') }}" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="{{ asset('website/css/style.css') }}" rel="stylesheet">
</head>

<body id="body">

  <!--==========================
    Top Bar
  ============================-->
  <section id="topbar" class="d-none d-lg-block">
    <div class="container clearfix">
      <div class="contact-info float-left">
        <i class="fa fa-envelope-o"></i> <a href="mailto:contact@example.com">name@websitename.com</a>
        <i class="fa fa-phone"></i> +1 2345 67855 22
      </div>
      <div class="social-links float-right">
        <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
        <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
        <a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
        <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
        <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
      </div>
    </div>
  </section>

  <!--==========================
    Header
  ============================-->
  <header id="header">
    <div class="container">

      <div id="logo" class="pull-left">
        <h1><a href="#body" class="scrollto"><span>M</span>irrors</a></h1>
        {{-- <!-- <a href="#body"><img src="{{ asset('website/img/logo.png') }}" alt="" title="" /></a>--> --}}
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li class="menu-active"><a href="#body">Home</a></li>
          <li><a href="#about">About Us</a></li>
          <li><a href="#services">Services</a></li>
          <li><a href="#portfolio">Portfolio</a></li>
          <li><a href="#team">Our Team</a></li>
         <!-- <li class="menu-has-children"><a href="">Dropdown</a>
            <ul>
              <li><a href="#">Link Item 1</a></li>
              <li><a href="#">Link Item 3</a></li>
              <li><a href="#">Link Item 4</a></li>
              <li><a href="#">Link Item 5</a></li>
            </ul>
          </li> -->
		  <li><a href="#price">Price</a></li>
          <li><a href="#contact">Contact</a></li>
        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- #header -->

  <!--==========================
    Intro Section
  ============================-->
  <section id="intro">

    <div class="intro-content">
      <h2><span>Hair & Skin Care</span><br>Best Salon in City</h2>
      <div>
        <a href="#about" class="btn-get-started scrollto">OFFERS</a>
      </div>
    </div>
    <div class="item" style="background-image: url('img/intro-carousel/1.jpg');"></div>
  </section><!-- #intro -->

  <main id="main">

    <!--==========================
      About Section
    ============================-->
    <section id="about" class="wow fadeInUp sec-padding">
      <div class="container">
	    <div class="section-header">
          <h2>About Mirrors</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores quae porro consequatur aliquam, incidunt eius magni provident, doloribus omnis minus ovident, doloribus omnis minus temporibus perferendis nesciunt..</p>
        </div>
        <div class="row">
          <div class="col-lg-6 about-img">
            <img src="{{ asset('website/img/about-img.png') }}" alt="">
          </div>

          <div class="col-lg-6 content">
            <h2>Lorem ipsum dolor sit amet, consectetur adipiscing</h2>
            <h3>Dolores quae porro consequatur aliquam, incidunt eius magni provident, doloribus omnis minus ovident</h3>
			<p>Consectetur adipisicing elit. Dolores quae porro consequatur aliquam, incidunt fugiat. Dolores quae porro consequatur aliquam, incidunt fugiat culpa esse aute nulla. malis nulla duis fugiat</p>
            <ul>
              <li><i class="icon ion-ios-checkmark-outline"></i> Dolores quae porro consequatur aliquam, incidunt fugiat culpa.</li>
              <li><i class="icon ion-ios-checkmark-outline"></i> Dolores quae porro consequatur aliquam, culpa esse aute nulla.</li>
              <li><i class="icon ion-ios-checkmark-outline"></i> Dolores quae porro esse aute nulla. malis nulla duis fugiat</li>
            </ul>
          </div>
        </div>

      </div>
    </section><!-- #about -->

    <!--==========================
      Services Section
    ============================-->
    <section id="services" class="sec-padding">
      <div class="container">
        <div class="section-header">
          <h2>Our Services</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores quae porro consequatur aliquam, incidunt fugiat culpa esse aute nulla. malis nulla duis fugiat culpa esse aute nulla ipsum velit export irure minim illum fore</p>
        </div>

		<div class="row">
		     <div class="col-lg-4">
			   <div class="card wow fadeInLeft" style="width: 18rem;">
				   <img src="{{ asset('website/img/services/1.jpg') }}" alt="" class="card-img-top">
				  <div class="card-body">
					<h5 class="card-title">HAIR</h5>
				  </div>
				</div>
			  </div>
			  <div class="col-lg-4">
			   <div class="card wow fadeInLeft" style="width: 18rem;">
				   <img src="{{ asset('website/img/services/2.jpg') }}" alt="" class="card-img-top">
				  <div class="card-body">
					<h5 class="card-title">SKIN</h5>
				  </div>
				</div>
			  </div>
			  <div class="col-lg-4">
			   <div class="card wow fadeInLeft" style="width: 18rem;">
				   <img src="{{ asset('website/img/services/3.jpg') }}" alt="" class="card-img-top">
				  <div class="card-body">
					<h5 class="card-title">HANDS & FEET</h5>
				  </div>
				</div>
			  </div>
		</div>
				<div class="row">
		     <div class="col-lg-4">
			   <div class="card wow fadeInLeft" style="width: 18rem;">
				   <img src="{{ asset('website/img/services/4.jpg') }}" alt="" class="card-img-top">
				  <div class="card-body">
					<h5 class="card-title">ESSENTIALS</h5>
				  </div>
				</div>
			  </div>
			  <div class="col-lg-4">
			   <div class="card wow fadeInLeft" style="width: 18rem;">
				   <img src="{{ asset('website/img/services/5.jpg') }}" alt="" class="card-img-top">
				  <div class="card-body">
					<h5 class="card-title">INOVATIONS</h5>
				  </div>
				</div>
			  </div>
			  <div class="col-lg-4">
			   <div class="card wow fadeInLeft" style="width: 18rem;">
				   <img src="{{ asset('website/img/services/6.jpg') }}" alt="" class="card-img-top">
				  <div class="card-body">
					<h5 class="card-title">BRIDAL</h5>
				  </div>
				</div>
			  </div>
		</div>
        <div class="row">


          <div class="col-lg-4">
            <div class="box wow fadeInRight" data-wow-delay="0.2s">
              <div class="icon"><i class="fa fa-map"></i></div>
              <h4 class="title"><a href="">ESSENTIALS</a></h4>
              <p class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores quae porro consequatur aliquam, incidunt fugiat culpa esse aute nulla.</p>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="box wow fadeInLeft" data-wow-delay="0.2s">
              <div class="icon"><i class="fa fa-shopping-bag"></i></div>
              <h4 class="title"><a href="">INOVATIONS</a></h4>
              <p class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores quae porro consequatur aliquam, incidunt fugiat culpa esse aute nulla.</p>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="box wow fadeInRight" data-wow-delay="0.2s">
              <div class="icon"><i class="fa fa-map"></i></div>
              <h4 class="title"><a href="">BRIDAL</a></h4>
              <p class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores quae porro consequatur aliquam, incidunt fugiat culpa esse aute nulla.</p>
            </div>
          </div>
        </div>

      </div>
    </section><!-- #services -->
    <!--==========================
      Price Section
    ============================-->
    <section id="price" class="wow fadeInUp sec-padding">
      <div class="container">
        <div class="section-header">
          <h2>Price List</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores quae porro consequatur aliquam, incidunt fugiat culpa esse aute nulla. duis fugiat culpa esse aute nulla ipsum velit export irure minim illum fore</p>
        </div>

	<div class="row">
		<div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
			<div class="offer offer-default">
				<div class="shape">
					<div class="shape-text">
						top
					</div>
				</div>
				<div class="offer-content">
					<h3 class="lead">
						All in One
					</h3>
					<p>
						$ 69
					</p>
				</div>
			</div>
		</div>
		<div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
			<div class="offer offer-success">
				<div class="shape">
					<div class="shape-text">
						top
					</div>
				</div>
				<div class="offer-content">
					<h3 class="lead">
						Hair Styling
					</h3>
					<p>
						$ 150
					</p>
				</div>
			</div>
		</div>
		<div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
			<div class="offer offer-radius offer-primary">
				<div class="shape">
					<div class="shape-text">
						top
					</div>
				</div>
				<div class="offer-content">
					<h3 class="lead">
						Face Cleanup
					</h3>
					<p>
						$ 250
					</p>
				</div>
			</div>
		</div>
		<div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
			<div class="offer offer-info">
				<div class="shape">
					<div class="shape-text">
						top
					</div>
				</div>
				<div class="offer-content">
					<h3 class="lead">
						Makeup Pack
					</h3>
					<p>
						$99
					</p>
				</div>
			</div>
		</div>
		<div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
			<div class="offer offer-warning">
				<div class="shape">
					<div class="shape-text">
						top
					</div>
				</div>
				<div class="offer-content">
					<h3 class="lead">
						Hands & Legs
					</h3>
					<p>
						$ 19
					</p>
				</div>
			</div>
		</div>
		<div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
			<div class="offer offer-radius offer-danger">
				<div class="shape">
					<div class="shape-text">
						top
					</div>
				</div>
				<div class="offer-content">
					<h3 class="lead">
						Face Pack
					</h3>
					<p>
						$ 9
					</p>
				</div>
			</div>
		</div>
	</div>

      </div>
    </section><!-- #clients -->

    <!--==========================
      Clients Section
    ============================-->
    <section id="clients" class="wow fadeInUp sec-padding">
      <div class="container">
        <div class="section-header">
          <h2>Products</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores quae porro consequatur aliquam, incidunt fugiat culpa esse aute nulla. duis fugiat culpa esse aute nulla ipsum velit export irure minim illum fore</p>
        </div>

        <div class="owl-carousel clients-carousel">
          <img src="{{ asset('website/img/clients/client-1.jpg') }}" alt="">
          <img src="{{ asset('website/img/clients/client-2.jpg') }}" alt="">
          <img src="{{ asset('website/img/clients/client-3.jpg') }}" alt="">
          <img src="{{ asset('website/img/clients/client-4.jpg') }}" alt="">
          <img src="{{ asset('website/img/clients/client-5.jpg') }}" alt="">
          <img src="{{ asset('website/img/clients/client-6.jpg') }}" alt="">
        </div>

      </div>
    </section><!-- #clients -->

    <!--==========================
      Our Portfolio Section
    ============================-->
    <section id="portfolio" class="wow fadeInUp sec-padding">
      <div class="container">
        <div class="section-header">
          <h2>Our Portfolio</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores quae porro consequatur aliquam, incidunt fugiat culpa esse aute nulla. nulla duis fugiat culpa esse aute nulla ipsum velit export irure minim illum fore</p>
        </div>
      </div>

      <div class="container-fluid">
        <div class="row no-gutters">

          <div class="col-lg-3 col-md-4">
            <div class="portfolio-item wow fadeInUp">
              <a href="{{ asset('website/img/portfolio/1.jpg') }}" class="portfolio-popup">
                <img src="{{ asset('website/img/portfolio/1.jpg') }}" alt="">
                <div class="portfolio-overlay">
                  <div class="portfolio-info"><h2 class="wow fadeInUp">Portfolio Name</h2></div>
                </div>
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="portfolio-item wow fadeInUp">
              <a href="{{ asset('website/img/portfolio/2.jpg') }}" class="portfolio-popup">
                <img src="{{ asset('website/img/portfolio/2.jpg') }}" alt="">
                <div class="portfolio-overlay">
                  <div class="portfolio-info"><h2 class="wow fadeInUp">Portfolio Name</h2></div>
                </div>
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="portfolio-item wow fadeInUp">
              <a href="{{ asset('website/img/portfolio/3.jpg') }}" class="portfolio-popup">
                <img src="{{ asset('website/img/portfolio/3.jpg') }}" alt="">
                <div class="portfolio-overlay">
                  <div class="portfolio-info"><h2 class="wow fadeInUp">Portfolio Name</h2></div>
                </div>
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="portfolio-item wow fadeInUp">
              <a href="{{ asset('website/img/portfolio/4.jpg') }}" class="portfolio-popup">
                <img src="{{ asset('website/img/portfolio/4.jpg') }}" alt="">
                <div class="portfolio-overlay">
                  <div class="portfolio-info"><h2 class="wow fadeInUp">Portfolio Name</h2></div>
                </div>
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="portfolio-item wow fadeInUp">
              <a href="{{ asset('website/img/portfolio/5.jpg') }}" class="portfolio-popup">
                <img src="{{ asset('website/img/portfolio/5.jpg') }}" alt="">
                <div class="portfolio-overlay">
                  <div class="portfolio-info"><h2 class="wow fadeInUp">Portfolio Name</h2></div>
                </div>
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="portfolio-item wow fadeInUp">
              <a href="{{ asset('website/img/portfolio/6.jpg') }}" class="portfolio-popup">
                <img src="{{ asset('website/img/portfolio/6.jpg') }}" alt="">
                <div class="portfolio-overlay">
                  <div class="portfolio-info"><h2 class="wow fadeInUp">Portfolio Name </h2></div>
                </div>
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="portfolio-item wow fadeInUp">
              <a href="{{ asset('website/img/portfolio/7.jpg') }}" class="portfolio-popup">
                <img src="{{ asset('website/img/portfolio/7.jpg') }}" alt="">
                <div class="portfolio-overlay">
                  <div class="portfolio-info"><h2 class="wow fadeInUp">Portfolio Name </h2></div>
                </div>
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="portfolio-item wow fadeInUp">
              <a href="{{ asset('website/img/portfolio/8.jpg') }}" class="portfolio-popup">
                <img src="{{ asset('website/img/portfolio/8.jpg') }}" alt="">
                <div class="portfolio-overlay">
                  <div class="portfolio-info"><h2 class="wow fadeInUp">Portfolio Name</h2></div>
                </div>
              </a>
            </div>
          </div>

        </div>

      </div>
    </section><!-- #portfolio -->

    <!--==========================
      Testimonials Section
    ============================-->
    <section id="testimonials" class="wow fadeInUp sec-padding">
      <div class="container">
        <div class="section-header">
          <h2>Testimonials</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores quae porro consequatur aliquam, incidunt fugiat culpa esse aute nulla. duis fugiat culpa esse aute nulla ipsum velit export irure minim illum fore</p>
        </div>
        <div class="owl-carousel testimonials-carousel">

            <div class="testimonial-item">
              <p>Dolores quae porro consequatur aliquam, incidunt fugiat culpa esse aute nulla. duis fugiat culpa esse aute nulla ipsum velit export irure minim illum fore

              </p>
              <h3>Mrio James</h3>
              <h4>CEO &amp; Founder</h4>
            </div>

            <div class="testimonial-item">
              <p>
                Dolores quae porro consequatur aliquam, incidunt fugiat culpa esse aute nulla. duis fugiat culpa esse aute nulla ipsum velit export irure minim illum fore

              </p>
              <h3>Finton Gofnes</h3>
              <h4>CTO</h4>
            </div>

            <div class="testimonial-item">
              <p>
                Dolores quae porro consequatur aliquam, incidunt fugiat culpa esse aute nulla. duis fugiat culpa esse aute nulla ipsum velit export irure minim illum fore

              </p>
              <h3>Marcus Kell</h3>
              <h4>Marketing</h4>
            </div>

            <div class="testimonial-item">
              <p>
                Dolores quae porro consequatur aliquam, incidunt fugiat culpa esse aute nulla. duis fugiat culpa esse aute nulla ipsum velit export irure minim illum fore

              </p>
              <h3>Williams Belly</h3>
              <h4>Accounts</h4>
            </div>

            <div class="testimonial-item">
              <p>
                Dolores quae porro consequatur aliquam, incidunt fugiat culpa esse aute nulla. duis fugiat culpa esse aute nulla ipsum velit export irure minim illum fore

              </p>
              <h3>Larry Hanson</h3>
              <h4>Investor</h4>
            </div>

        </div>

      </div>
    </section><!-- #testimonials -->

    <!--==========================
      Call To Action Section
    ============================-->
    <section id="call-to-action" class="wow fadeInUp sec-padding">
      <div class="container">
        <div class="row">
          <div class="col-lg-9 text-center text-lg-left">
            <h3 class="cta-title">Get Our Service</h3>
            <p class="cta-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores quae porro consequatur aliquam, incidunt fugiat culpa esse aute nulla cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          </div>
          <div class="col-lg-3 cta-btn-container text-center">
            <a class="cta-btn align-middle" href="#contact">Contact Us</a>
          </div>
        </div>

      </div>
    </section><!-- #call-to-action -->

    <!--==========================
      Our Team Section
    ============================-->
    <section id="team" class="wow fadeInUp sec-padding">
      <div class="container">
        <div class="section-header">
          <h2>Our Team</h2>
        </div>
        <div class="row">
          <div class="col-lg-3 col-md-6">
            <div class="member">
              <div class="pic"><img src="{{ asset('website/img/team1.jpg') }}" alt=""></div>
              <div class="details">
                <h4>James Smith</h4>
                <span>Chief Executive Officer</span>
                <div class="social">
                  <a href=""><i class="fa fa-twitter"></i></a>
                  <a href=""><i class="fa fa-facebook"></i></a>
                  <a href=""><i class="fa fa-google-plus"></i></a>
                  <a href=""><i class="fa fa-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="member">
              <div class="pic"><img src="{{ asset('website/img/team2.jpg') }}" alt=""></div>
              <div class="details">
                <h4>Michell Kellon</h4>
                <span>Technical Manager</span>
                <div class="social">
                  <a href=""><i class="fa fa-twitter"></i></a>
                  <a href=""><i class="fa fa-facebook"></i></a>
                  <a href=""><i class="fa fa-google-plus"></i></a>
                  <a href=""><i class="fa fa-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="member">
              <div class="pic"><img src="{{ asset('website/img/team3.jpg') }}" alt=""></div>
              <div class="details">
                <h4>French Lincon</h4>
                <span>Financial Manager</span>
                <div class="social">
                  <a href=""><i class="fa fa-twitter"></i></a>
                  <a href=""><i class="fa fa-facebook"></i></a>
                  <a href=""><i class="fa fa-google-plus"></i></a>
                  <a href=""><i class="fa fa-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="member">
              <div class="pic"><img src="{{ asset('website/img/team4.jpg') }}" alt=""></div>
              <div class="details">
                <h4>Amanda Jepson</h4>
                <span>Accountant</span>
                <div class="social">
                  <a href=""><i class="fa fa-twitter"></i></a>
                  <a href=""><i class="fa fa-facebook"></i></a>
                  <a href=""><i class="fa fa-google-plus"></i></a>
                  <a href=""><i class="fa fa-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section><!-- #team -->

    <!--==========================
      Contact Section
    ============================-->
    <section id="contact" class="wow fadeInUp sec-padding">
      <div class="container">
        <div class="section-header">
          <h2>Contact Us</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores quae porro consequatur aliquam, incidunt fugiat culpa esse aute nulla. malis nulla duis fugiat culpa esse aute nulla ipsum velit export irure minim illum fore</p>
        </div>

        <div class="row contact-info">
         <div class="col-lg-5">
            <div class="contact-address">
              <i class="ion-ios-location-outline"></i>
              <h3>Address</h3>
              <address>MN-12 Lincon Street, NewYork 12356, USA</address>
            </div>
            <div class="contact-phone">
              <i class="ion-ios-telephone-outline"></i>
              <h3>Phone Number</h3>
              <p><a href="tel:+155895548855">+1 2345 67890 12</a></p>
            </div>
            <div class="contact-email">
              <i class="ion-ios-email-outline"></i>
              <h3>Email</h3>
              <p><a href="mailto:info@example.com">name@website.com</a></p>
            </div>
		 </div>
		 <div class="col-lg-7">
		      <div class="container">
        <div class="form">

		   <!-- Form itself -->
          <form name="sentMessage" class="well" id="contactForm"  novalidate>
		 <div class="control-group">
                   <div class="form-group">
			<input type="text" class="form-control"
			   	   placeholder="Full Name" id="name" required
			           data-validation-required-message="Please enter your name" />
			  <p class="help-block"></p>

		   </div>
	         </div>
                <div class="form-group">
                  <div class="controls">
			<input type="email" class="form-control" placeholder="Email"
			   	            id="email" required
			   		   data-validation-required-message="Please enter your email" />
		</div>
	    </div>

               <div class="form-group">
                 <div class="controls">
				 <textarea rows="10" cols="100" class="form-control"
                       placeholder="Message" id="message" required
		       data-validation-required-message="Please enter your message" minlength="5"
                       data-validation-minlength-message="Min 5 characters"
                        maxlength="999" style="resize:none"></textarea>
		</div>
               </div>
	     <div id="success"> </div> <!-- For success/fail messages -->
	    <button type="submit" class="btn btn-primary pull-right">Send</button><br />
          </form>
        </div>

      </div>
		 </div>


        </div>
      </div>

      <div class="container mb-4 map">
	  <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d387191.33750346623!2d-73.979681!3d40.6974881!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew+York%2C+NY%2C+USA!5e0!3m2!1sen!2sin!4v1541477355474" width="100%" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>
      </div>

    </section><!-- #contact -->

  </main>

  <!--==========================
    Footer
  ============================-->
  <footer id="footer">
    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong>Topperr</strong>. All Rights Reserved
      </div>
      <div class="credits">
        website by <a href="https://webthemez.com/consulting/">WebThemez</a>
      </div>
    </div>
  </footer><!-- #footer -->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

  <!-- JavaScript  -->
  <script src="{{ asset('website/lib/jquery/jquery.min.js') }}"></script>
  <script src="{{ asset('website/lib/jquery/jquery-migrate.min.js') }}"></script>
  <script src="{{ asset('website/lib/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('website/lib/easing/easing.min.js') }}"></script>
  <script src="{{ asset('website/lib/superfish/hoverIntent.js') }}"></script>
  <script src="{{ asset('website/lib/superfish/superfish.min.js') }}"></script>
  <script src="{{ asset('website/lib/wow/wow.min.js') }}"></script>
  <script src="{{ asset('website/lib/owlcarousel/owl.carousel.min.js') }}"></script>
  <script src="{{ asset('website/lib/magnific-popup/magnific-popup.min.js') }}"></script>
  <script src="{{ asset('website/lib/sticky/sticky.js') }}"></script>
 <script src="{{ asset('website/contact/jqBootstrapValidation.js') }}"></script>
 <script src="{{ asset('website/contact/contact_me.js') }}"></script>
  <script src="{{ asset('website/js/main.js') }}"></script>

</body>
</html>
