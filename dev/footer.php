<footer>
	<div class="container">
		<div class="footerLeft">
			<div class="logoFooter">
				<a href="<?php echo site_url(); ?>">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo_internetWork.png" alt="InterNetwork IT logo">
				</a>
			</div>
			<div class="footerNewsletter">
				<?php echo do_shortcode('[formidable id=5]'); ?>
			</div>
		</div>
		<div class="footerContact">
			<address>
				<a href="tel:321.300.6383"><i class="fa fa-phone" aria-hidden="true"></i> 321.300.6383</a>
				<a href="mailto:info@internetworkit.com"><i class="fa fa-envelope" aria-hidden="true"></i> info@internetworkit.com</a>
				<a href="https://www.google.com/maps?client=firefox-b-d&q=2014+Edgewater+Dr,+Suite+225Orlando,+FL+32804&um=1&ie=UTF-8&sa=X&ved=0ahUKEwjcwY305OvhAhUwILkGHS67DUAQ_AUIDigB" target="_blank"><i class="fa fa-map-marker" aria-hidden="true"></i>
				<span>2014 Edgewater Dr, Suite 225<br>Orlando, FL 32804</span></a>
			</address> 
		</div>
		<div class="dppaLogo">
			<?php require_once('logo-dppa-footer.php'); ?>
		</div>
	</div>
</footer>
<script src="https://use.fontawesome.com/37d8e8fa0a.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/flexslider/2.7.2/jquery.flexslider-min.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/scripts-min.js"></script>
<?php wp_footer(); ?> 
</body>
</html> 