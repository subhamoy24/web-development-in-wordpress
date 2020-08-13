
<!-- footer Start -->
<footer class="footer section">
	<div class="container">
		<div class="row">
			<div class="col-lg-3 col-md-6 col-sm-6">
				<div class="widget">
					<h4 class="text-capitalize mb-4">Company</h4>

					<ul class="list-unstyled footer-menu lh-35">
						<li><a href="#">Terms & Conditions</a></li>
						<li><a href="#">Privacy Policy</a></li>
						<li><a href="#">Support</a></li>
						<li><a href="#">FAQ</a></li>
					</ul>
				</div>
			</div>
			<div class="col-lg-2 col-md-6 col-sm-6">
				<div class="widget">
					<h4 class="text-capitalize mb-4">Quick Links</h4>

					<ul class="list-unstyled footer-menu lh-35">
						<li><a href="#">About</a></li>
						<li><a href="#">Services</a></li>
						<li><a href="#">Team</a></li>
						<li><a href="#">Contact</a></li>
					</ul>
				</div>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-6">
				<div class="widget">
					<?php dynamic_sidebar('footer-news');?>
				</div>
			</div>

			<div class="col-lg-3 ml-auto col-sm-6">
				<div class="widget">
					<div class="logo mb-4">
						<h3>Mega<span>kit.</span></h3>
					</div>
					<h6><a href="tel:+23-345-67890" >Support@megakit.com</a></h6>
					<a href="mailto:support@gmail.com"><span class="text-color h4">+23-456-6588</span></a>
				</div>
			</div>
		</div>
		
		<div class="footer-btm pt-4">
			<div class="row">
				<div class="col-lg-6">
					<div class="copyright">
						&copy; Copyright Reserved to <span class="text-color">Megakit.</span> by <a href="https://themefisher.com/" target="_blank">Themefisher</a>
					</div>
				</div>
				<div class="col-lg-6 text-left text-lg-right">
				  <?php socialio();?>
				</div>
			</div>
		</div>
	</div>
</footer>
   
    </div>

    <!-- 
    Essential Scripts
    =====================================-->

     js/jquery-3.2.1.min.js
    <!-- Main jQuery -->
    <script src="<?php echo get_template_directory_uri()?>/plugins/jquery/jquery.js"></script>
        <script src="<?php echo get_template_directory_uri()?>/js/jquery-3.2.1.min.js"></script>
    <script src="<?php echo get_template_directory_uri()?>/js/contact.js"></script>
      <script src="<?php echo get_template_directory_uri()?>/js/ninja.js"></script>
    <!-- Bootstrap 4.3.1 -->
    <script src="<?php echo get_template_directory_uri()?>/plugins/bootstrap/js/popper.js"></script>
    <script src="<?php echo get_template_directory_uri()?>/plugins/bootstrap/js/bootstrap.min.js"></script>
       <script src="<?php echo get_template_directory_uri()?>/js/owl.carousel.min.js"></script>
   <!--  Magnific Popup-->
    <script src="<?php echo get_template_directory_uri()?>/plugins/magnific-popup/dist/jquery.magnific-popup.min.js"></script>
    <!-- Slick Slider -->
    <script src="<?php echo get_template_directory_uri()?>/plugins/slick-carousel/slick/slick.min.js"></script>
    <!-- Counterup -->
    <script src="<?php echo get_template_directory_uri()?>/plugins/counterup/jquery.waypoints.min.js"></script>
    <script src="<?php echo get_template_directory_uri()?>/plugins/counterup/jquery.counterup.min.js"></script>

    <!-- Google Map -->
    <script src="<?php echo get_template_directory_uri()?>/plugins/google-map/map.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAkeLMlsiwzp6b3Gnaxd86lvakimwGA6UA&callback=initMap"></script>    
    
    <script src="<?php echo get_template_directory_uri()?>/js/script.js"></script>
    <?php wp_footer();?>

  </body>
  </html>
   