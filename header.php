
<!doctype html>
<html lang="en">
  <head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="megakit,business,company,agency,multipurpose,modern,bootstrap4">
  
  <meta name="author" content="themefisher.com">

  <title>Megakit| Html5 Agency template</title>
  <!-- bootstrap.min css -->
  <link rel="stylesheet" href="<?php echo get_template_directory_uri()?>/plugins/bootstrap/css/bootstrap.min.css">
  <!-- Icon Font Css -->
  <link rel="stylesheet" href="<?php echo get_template_directory_uri()?>/plugins/themify/css/themify-icons.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri()?>/plugins/fontawesome/css/all.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri()?>/plugins/magnific-popup/dist/magnific-popup.css">
  <!-- Owl Carousel CSS -->
  <link rel="stylesheet" href="<?php echo get_template_directory_uri()?>/plugins/slick-carousel/slick/slick.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri()?>/plugins/slick-carousel/slick/slick-theme.css">

  <!-- Main Stylesheet -->
  <link rel="stylesheet" href="<?php echo get_template_directory_uri()?>/css/style.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri()?>/css/owl.carousel.min.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri()?>/css/slider.css">
  <?php wp_head();?>

</head>
<style type="text/css">
	#navbar li{
		float: left;
		margin-left: 10px;
	}
	body {
  font-family: "Open Sans", sans-serif;
}

.testimonials {
  overflow: hidden;
  position: relative;
  max-height: 300px;
}

.testimonials {
  background: #161d25;
}

.one-slide,
.testimonial,
.message {
  border: none !important;
  outline: none !important;
}

.icon-overlay {
  position: absolute;
  opacity: 0.3;
  right: 10%;
  top: 0;
  height: auto;
  width: 100%;
  max-width: 400px;
}

.carousel-controls .control {
  position: absolute;
  transform: translateY(-50%);
  width: 45px;
  height: 45px;
  border-radius: 50%;
  border: 2px solid #fff;
  z-index: 1;
}

.prev {
  left: -2.25rem;
}

.next {
  right: -2.25rem;
}

@media screen and (max-width: 768px) {
  .testimonials {
    max-height: 700px;
  }
  .icon-overlay {
    height: 300px;
    top: calc(50% - 150px);
  }
  .carousel-controls .control {
    width: 25px;
    height: 25px;
    top: inherit;
  }
  .prev {
    left: 0;
  }
  .next {
    right: 0;
  }
  .control i {
    font-size: .7rem;
  }
  .testimonials .message {
    font-size: 1rem;
  }
  .testimonials h2 {
    font-size: 1.5rem;
  }
}

</style>
<script type="text/javascript">
$(document).ready(function() {
  $(".testimonial-carousel").slick({
    infinite: true,
    slidesToShow: 1,
    slidesToScroll: 1,
    autoplay: true,
    arrows: false,
    prevArrow: $(".testimonial-carousel-controls .prev"),
    nextArrow: $(".testimonial-carousel-controls .next")
  });
});
</script>

<body>


<!-- Header Start --> 

<header class="navigation">
	<div class="header-top " style="background-color: <?php echo get_theme_mod('navbar_bg_color');?>">
		<div class="container">
			<div class="row justify-content-between align-items-center">
				<div class="col-lg-2 col-md-4">
					<div class="header-top-socials text-center text-lg-left text-md-left">
						<a href="https://www.facebook.com/themefisher" target="_blank"><i class="ti-facebook"></i></a>
						<a href="https://twitter.com/themefisher" target="_blank"><i class="ti-twitter"></i></a>
						<a href="https://github.com/themefisher/" target="_blank"><i class="ti-github"></i></a>
					</div>
				</div>
				<div class="col-lg-10 col-md-8 text-center text-lg-right text-md-right">
					<div class="header-top-info">
						<a href="tel:+23-345-67890">Call Us : <span>+23-345-67890</span></a>
						<a href="mailto:support@gmail.com" ><i class="fa fa-envelope mr-2"></i><span>support@gmail.com</span></a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<nav class="navbar navbar-expand-lg  py-4" id="navbar">
		<div class="container">
		  <a class="navbar-brand" href="index.html">
		  	Mega<span>kit.</span>
		  </a>

		  <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarsExample09" aria-controls="navbarsExample09" aria-expanded="false" aria-label="Toggle navigation">
			<span class="fa fa-bars"></span>
		  </button>
	  
		  <div class="collapse navbar-collapse text-center" id="navbarsExample09">
			<ul class="navbar-nav ml-auto"  >
			    <?php wp_nav_menu($arrayName = array('theme_location' =>'top-menu' , 
			
                                                'items_wrap' => '<ul class="navbar-nav ml-auto">%3$s</ul>'));?>
			</ul>

			<form class="form-lg-inline my-2 my-md-0 ml-lg-4 text-center">
			  <a href="contact.html" class="btn btn-solid-border btn-round-full">Get a Quote</a>
			</form>
		  </div>
		</div>
	</nav>
</header>
